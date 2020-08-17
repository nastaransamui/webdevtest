window.onscroll = function() {StickyFunction()};

var navbar = document.getElementById('navbar');
var sticky = navbar.offsetTop;

// make navbar Sticky
function StickyFunction() {
  navbar.classList.add('sticky');
}

//Check if first time view
var firstTime = localStorage.getItem("first_time");
$(function() {
  var form,dialog,
  dialog = $("#dialog-form").dialog({
    autoOpen: false,
    height: 400,
    width: '75%',
    modal: false,
    position: {my: "center top+45% ", at: "top"},
    show: { effect: 'fade', duration: 500 },
  })

  if(!firstTime){
    localStorage.setItem("first_time","1")
    dialog.dialog( "open" );
  }
  
$("#commentForm").validate({
  submitHandler: function(form){
  $("#dialog-form").LoadingOverlay("show",{
    background  : "rgba(65,58,96, 0.5)"
});
     $(form).ajaxSubmit({
       clearForm: true,
       success: function() {
        alert('Data sent');
        dialog.dialog( "close" );
        $("#dialog-form").LoadingOverlay("hide", true);
       }
     });
    return false;
  },
  invalidHandler: function(form) {
    alert('error')
  }
});

$(document).on("click" , "#dialog-form" , function (event) {
  //Close except on input click
  if(event.target.nodeName !== 'INPUT'){
    dialog.dialog( "close" );
  }
  
});

var jqReady = $.Deferred();
    // Bind doc ready to my deferred object
    $(document).bind("ready", jqReady.resolve);

    // Check to see is doc is ready
    if(jqReady.state() !== 'resolved'){
        $.LoadingOverlay("show",{
          background  : "rgba(65,58,96, 0.5)"
      });
        // $("body").addClass("loading"); 
        $("#dialog-form").css("display: none; "); 
    }

    $.when(jqReady).then(function () {
        $.LoadingOverlay("hide");
        $("span").removeClass("dialog_Not_show");
    });
})