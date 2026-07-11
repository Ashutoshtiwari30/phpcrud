<?php
session_start();
include("connection.php");
if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM user WHERE email='$email' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];

        header("Location:home.php");
        exit();
    }else{
echo " invalid password";
    }
}else{
            echo "Email Not Found";

}
}

?>