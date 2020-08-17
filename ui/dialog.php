<div id="dialog-form" class="dialog_show" style="display:none;">
  <div style=" width: 50%; ">
  <h3>Welcome</h3>
      <p>
        Maecenas sed diam eget risus varius blandit sit amet non magna. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Curabitur blandit tempus porttitor.
      </p>
      <p>
        Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
      </p>
  </div>
  <div class="form-content" >
  <h3 >Contact form</h3>
  <form class="cmxform" id="commentForm" method="post" action="server/submit.php">
  <?php require 'server/formFieldsQuery.php'; while ($row = $result->fetch_assoc()): ?>
    <span class="form-inputs">
      <label for="<?php echo $row["label"]; ?>">
      <?php echo $row["label"]; ?>
      </label>
      <input 
      required 
      class="text ui-corner-all form-font"
      type="<?php echo $row["name"] === 'email' ? 'email' : 'text' ?>" 
      name="<?php echo $row["name"]; ?>"
      id="<?php echo $row["name"]; ?>"/>
    </span>
    <?php endwhile; ?>
    <span class="form-submit">
    <input  class="submit" type="submit" value="Submit">
  </form>
  </div>
</div>