<html lang="en">
<head>
<?php include "server/conf.php"; ?>
<?php include "ui/head.php"; ?>
</head>
<body >
  <?php include "ui/navbar.php" ?>

  <?php include "ui/dialog.php"; ?>

  <?php include "ui/body.php"; ?>
</body>
</html>
<script src="js/index.js"></script>
<!-- first code read from $dummyFields -->
<!-- 
          <?php require 'formFields.php'; for ($i=0; $i < count($dummyFields); $i++): ?>
          <span style="float: right;  margin-bottom: 10px;">
            <label for="<?php echo $dummyFields[$i]['label']; ?>">
            <?php echo $dummyFields[$i]['label']; ?>
            </label>
            <input required 
            class="text ui-widget-content ui-corner-all"
            type="<?php echo $dummyFields[$i]['name'] === 'email' ? 'email' : 'text' ?>" 
            name="<?php echo $dummyFields[$i]['name']; ?>"
            id="<?php echo $dummyFields[$i]['name']; ?>"/>
          </span>
        <?php endfor; ?>
 -->