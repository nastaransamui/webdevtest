<?php 
$servername = 'localhost';
$username = 'root';
$password = 'mysql';
$dbName = 'webdev';
// Connect to MySQL
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If database is not exist create one
if (!mysqli_select_db($conn,$dbName)){
    $sql = "CREATE DATABASE ".$dbName;
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    }else {
        echo "Error creating database: " . $conn->error;
    }
} 
// if formFields table not exist 
$sql = "SELECT label, name FROM formFields";
$exists = mysqli_query($conn, $sql);
$result = $conn->query($sql);
if(empty($exists)){
   $query = "CREATE TABLE IF NOT EXISTS `webdev`.`formFields` (
     `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
     `name` VARCHAR(255) NULL,
     `label` VARCHAR(255) NULL,
     PRIMARY KEY (`id`))
   ENGINE = InnoDB;";
   $exists =mysqli_query($conn, $query);
   echo '<script language="javascript">';
      echo 'alert("database was created please refresh browser one more time")';
      echo '</script>';
}else{
  $addRow = "INSERT INTO 
  `formFields` (`id`, `name`, `label`) 
  VALUES 
  (1, 'name', 'first name'),
  (2, 'surname', 'last name'),
  (3, 'country', 'country'),
  (4, 'email', 'email'),
  (5, 'telephone', 'phone number')
  ";
  $rowcount=mysqli_num_rows($result);
  //if formField has less than 5 row
  if ($rowcount < 5) {
    if ($conn->multi_query($addRow) === TRUE) {
      echo '<script language="javascript">';
      echo 'alert("formField table was updated")';
      echo '</script>';
    } else {
      echo "Error: " .  "<br>" . $conn->error;
    }
  } 
}
?>
