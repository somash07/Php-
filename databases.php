
<?php
/* phpmyadmin: 
    it is webinterface used to communicate to db.Using mysql through phpmyadmin to communicate with db

    primary key: auto increment. if a column is primary key error will occur if same number occurs. primary key is unique.
    
    csv file: excel ma convert garxa db lai
    to create csv: Export->format ma csv->dumpallrows->go

    to delete table: operation->delete table or data

*/



    /* ways to connect to MYSQL database
    1. MYSQLi extentions->i stands for improved: uses only mySQL db.
    2.PDO(php data objects): uses many db systems*/
    $servername="localhost";
    $username="root";
    $password="";
    //the 3 vars servername,username and password are secret crediantials use to access server

    //creating a connection object
    $conn=mysqli_connect($servername,$username,$password);

    if(!$conn){
        //die if connection was not successfull
        die("connection failed".mysqli_connect_error());
    }
    echo"connection to db established<br>";
  
?>