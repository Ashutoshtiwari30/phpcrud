<?php
include("connection.php");
$id=$_GET["id"];
$sql="SELECT * FROM user WHERE id= $id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);


print_r($row);
?>
<! DOCTYPE html>
<html>
    <head>
        <h1> Update data</h1>
    </head>
    
<body >
    <form action="home.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row["id"]?>">
    <label > First Name :</label></br>
    <input type="text" name ="first_name" value="<?php echo $row["first_name"]?>" ></br>
     <label > Last Name :</label></br>
    <input type="text" name="last_name" value="<?php echo $row["last_name"]?>" ></br>
     <label >Email :</label></br>
    <input type="text" name ="email" value="<?php echo $row["email"]?>" ></br>
    <button type="submit" name="update"> Update </button>
    </form>
</body>
</html>