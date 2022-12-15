<?php
include_once 'upload.php'; 

$name = $_POST['Name_']; 
$Email = $_POST['Email'];
$area = $_POST['area_code'];
$Phone = $_POST['Phone'];
$Address = $_POST['Address_'];
$City = $_POST['City'];
$State = $_POST['State'];
$Type = $_POST['Type'];
$id = $_POST['id'];


    $sql = "INSERT INTO Jobs (Name_, Email, area_code, Phone, Address_, City, State_, Type_)
     VALUES('$name','$Email','$area','$Phone','$Address', '$City', '$State', '$Type');";
    mysqli_query($conn, $sql);

header("Location: ../contact.php?information sent");

?>