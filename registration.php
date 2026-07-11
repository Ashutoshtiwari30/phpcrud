<!DOCTYPE html>
<html>
    <head>
         <title>Vibha Website </title>
      <link rel="stylesheet" href="style.css">
       <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
                <!-- <h1> Login /Registration succcesfull..</h1> -->

<?php


include("connection.php");
if(isset($_POST["create"])){
    $name=$_POST["name"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $haspassword=password_hash($password ,PASSWORD_DEFAULT);
    $sql="INSERT INTO user(first_name,last_name,email,password) VALUES('$name','$lname','$email','$haspassword')";
      if (mysqli_query($conn, $sql)) {
        header("Location: home.php");
        echo "Registration Successful";
    } else {
        echo "SQL Error: " . mysqli_error($conn);
    }


}else{
    echo(" Form not submitted");
}
?>
    </body>
</html>