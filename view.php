<?php
include("connection.php");
$id= $_GET["id"];
$sql ="SELECT * FROM user WHERE id = $id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
 print_r($row);
 
?>
<!dOCTYPE html>
<html>
<head>

</head>
<body>
    <h1> Name </h1><br>
    <h3><?php echo $row["first_name"] . " ". $row["last_name"] ?></h3>
    <h1> Email </h1><br>
    <h3><?php echo $row["email"] ?></h3>
</body>

</html>