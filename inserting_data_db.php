<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="db_name";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("connection failed".mysqli_connect_error());
    }
    echo"connection to db established<br>";

    //variables to be inserted
    $name="shirey";
    $destination="russia";

    //sql query to be executed
    $sql="INSERT INTO `trip` (`name`, `destination`) VALUES ('$name', '$destination');";

    //addinga new trip table in the db

    $result=mysqli_query($conn,$sql);

    //check fo r the db creation success
    if($result){
        echo"the record was inserted successfully<br>";
    }
    else{
        echo"the record was not inserted<br>".mysqli_error($conn);
    }
   
?>