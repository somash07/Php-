<?php
    $servername="localhost";
    $username="root";
    $password="";

    $conn=mysqli_connect($servername,$username,$password);

    if(!$conn){
        die("connection failed".mysqli_connect_error());
    }
    echo"connection to db established<br>";

    //create a db
    $sql="CREATE DATABASE db_name3";

    $result=mysqli_query($conn,$sql);

    //check fo r the db creation success
    if($result){
        echo"the db was created successfully<br>";
    }
    else{
        echo"the db was not created <br>".mysqli_error($conn);
    }
    echo("the sql query running operation is<br>");
    //1 if sql query ran successfull else 0;
    echo var_dump($result)."<br>";
?>