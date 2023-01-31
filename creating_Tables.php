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

   //create a table in db

   $sql="CREATE TABLE `table_name` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `destination` VARCHAR(11) NOT NULL , PRIMARY KEY (`sno`))";

   $result=mysqli_query($conn,$sql);

    //check for the table creation success
    if($result){
        echo"the table was created successfully<br>";
    }
    else{
        echo"the table was not created <br>".mysqli_error($conn);
    }

?>