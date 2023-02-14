<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=$_POST['fname'];
        $email=$_POST['mail'];
        $desc=$_POST['desc'];

        //connecting to a database
    $servername="localhost";
    $username="root";
    $password="";

    //creating a  ob
    $conn=mysqli_connect($servername,$username,$password);
    //checking connection
    if(!$conn){
        die("connection failed");
    }
    else{
        $sql= "INSERT INTO `contacts`.`contactus`(`name`,`email`,`concern`,`date`) VALUES ('$name','$email','$desc',current_timestamp())";
        $result=mysqli_query($conn,$sql);
    
        if($result){
            echo"<br>The data successfully inserted in db<br>";
        }
        else{
            echo"<br>The data not inserted in db<br>";
        }
         
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body>
    <h1>contact for concerns</h1>

    <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

    name:<input type="text"    name="fname" id="name">
    <br><br>

    email: <input type="email" name="mail" id="email">
    <br><br>

    password: <input type="password" name="pass" id="password">
    <br><br>

    description:
    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
    <br><br>

    <input type="submit">

</form>
</body>
</html>