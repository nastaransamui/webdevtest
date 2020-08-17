<?php
include_once('server/conf.php');

$sql = "SELECT label, name FROM formFields";
$result = $conn->query($sql);
return $result;
$conn-> close();
?>