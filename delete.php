<?php 
include("connection.php");
$id=$_GET["id"];
$sql= "DELETE FROM user WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:home.php");
    exit();
}else{
    echo mysqli_error($conn);
}

?>