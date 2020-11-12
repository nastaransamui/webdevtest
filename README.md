# webdevtest
1	Responsive HTML Design
Create an html template based on the screenshots. The menu should be created using pure css.
When the user scrolls down, the menu should stick to the top of the users browsers viewport and thus always stay visible.
If the user visits the page with a smaller viewport, the top image is only displayed partly, while the right part of the image is always displayed. The image next to the text is dynamically reduced in seize.
Visiting the page with an even smaller viewport, the image is not displayed next to the text anymore, but below it.
Please use OpenSans as the default font for the entire site.

2	JavaScript
1	Practical task
When visiting the page for the first time, the user gets to see a layer which contains a form to submit contact information.
The fields that this form should should be read asynchronously from http://localhost/formFields.php.
When the form is submitted, it is transmitted to http://localhost/formSubmit.php, and the layer will fade out.
The layer will also fade out when the user clicks on it.
Feel free to use jQuery / jQuery UI if you like.

2	Questions
1. How would you debug JavaScript code?
  `I debug via VS code or directly from Chrome developer panel with add debug break point`
2. You got two JavascriptObjects:

var a = {
 greeting: 'Hello, ',
 say: function() {
 jQuery.each(this.names, function(index, value) {
 alert(this.greeting + value);
 });
 }
};

var b = {
 names: ['Champ', 'Jang', 'Else']
};

3. Please describe how you would merge these objects into one single object.

    `Personally I prefer to go with ES6 and use “…” (3 dot notation)`

    `but can go with “Object assign” as well`
4. You want to call the method „say“ of the newly created object, but it does not work. Try to find the error and fix it.
  
`“greeting” was undefined inside say() function I assign this to self outside of variable and get the value of greeting from self.a.greeting.`
5. Please describe in your own words what prototyping is and where you would use it in javascript.
`When need javascript have default value available in everywhere use “prototype” such as if want to use profile of user in everywhere.`

3	PHP
Currently, the files formFields.php and formSubmit.php only contain dummy data.
Form fields that are to be displayed should be read from the MySQL database table „formFields“.
Forms submitted should be saved in the tables formSubmit and formSubmitData.
Try using classes to store objects and feel free to use an object relational mapper if you want to.

4	Time estimation
How long did it take to complete this test?
If you had to do it again, with a new design and some changes to the back-end, how long do you think it would take you to re-make it?
```
Task 1 take around 2 hours.
Task 2 take around 3 hours.
Task 3 PHP it’s take around 2 hours I studies Object relational mapper and around 3 hours to fix it 
I used around 1 hour to do QA and test all parts that work as expected.
It depend on change and new requirement but I believe it will take less than this.
```

PS:
    
    • refer to this task: “The layer will also fade out when the user clicks on it.” I believe it will not the best practice as dialog show only in first entrance and possible to fade out by mistake click via user.
    
    • Base on library red beanphp for ORM 2 tables name of DB: “formSubmit & formSubmitData” are not camel case but created automatic on first submit of form.
    
    • In either way of I get this position or not your technical code review comments on my job will highly appreciated in advance.
The last change from dev Branch
