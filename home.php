<?php
session_start();
if(!isset($_SESSION[""])){
    header("Location:login.html");
    exit();
} 
include("connection.php")
?>

<!DOCTYPE html>
<html>

<head>
    <title>Vibha Website </title>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


    <h2 style="text-align: center;">User List</h2>
    <table align="center" border="">


        <tr>
            <th> First Name</th>
            <th> Last Name</th>
            <th> Email</th>
            <th> Action</th>
        </tr>


        <?php
        include("connection.php");

        if(isset($_POST["update"])){
            $id=$_POST["id"];
            $fname=$_POST["first_name"];
            $lname=$_POST["last_name"];
            $email=$_POST["email"];
            $sql= "UPDATE user SET first_name='$fname',
            last_name='$lname',
            email='$email' WHERE id='$id'";
            $result=mysqli_query($conn,$sql);
            if($result){
              header("Location:home.php");
              exit();
        }else{
            echo("data not updated");
        }
        }
        //     if(mysqli_num_rows($result)> 0){
        //         $row=mysqli_fetch_array($result);
            

        // }else{}
        $sql = "SELECT * FROM user";
        if (mysqli_query($conn, $sql)) {
            $result = mysqli_query($conn, $sql);

        } ?>



        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

            <tr>




                <td><?php echo $row["first_name"]; ?></td>
                <td><?php echo $row["last_name"]; ?></td>
                <td><?php echo $row["email"]; ?></td>

                <td>
                    <div>
                        <button  onclick="window.location.href='view.php?id=<?php echo $row["id"]; ?>'" type="submit" name="view"> View</button>

                        <button onclick="window.location.href='update.php?id=<?php echo $row["id"]; ?>'" type="submit" name="edit"> Edit</button>
                        <button type="submit" name="delet" onclick="window.location.href='delete.php?id=<?php echo $row["id"]; ?>'"> Delete</button>
                        
                    </div>
                <?php } ?>
            </td>
        </tr>
    </table>

</body>

</html>