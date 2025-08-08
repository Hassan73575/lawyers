<?php 
include("dbconnect.php");

$id = $_GET["id"];
$query ="DELETE FROM `user` WHERE user_id = '$id'";
$exe = mysqli_query($conn, $query);
if($exe){
    echo "<script> alert('data delete successfully')
     window.location.href = 'all-user.php' </script>";
}else{
    echo "<script> alert('failed to delete data ')</script>";
}

?>