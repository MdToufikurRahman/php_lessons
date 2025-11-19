<?php 

$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM stu WHERE employeeID = '$id'";
include_once("db_config.php");

$db->query($sql);
header("Location:index.php");


?>