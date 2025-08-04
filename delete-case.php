<?php 
include("dbconnect.php");

$id = $_GET["id"];
$query ="DELETE FROM `appointments` WHERE id = '$id'";
$exe = mysqli_query($conn, $query);
if($exe){
    echo "<script> alert('data delete successfully')
     window.location.href = 'admin-panel.php' </script>";
}else{
    echo "<script> alert('failed to delete data ')</script>";
}

?>