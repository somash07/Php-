<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="db_name";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("connection unsuccesfull").mysqli_connect_error();
    }
    echo "connected.<br>";
     
    $sql="DELETE FROM `trip` WHERE `dest`='pkr'";

    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo"query mismtch";
    }
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "hello ".$row['name']."welcome to ".$row['destination'];
        }
    }
    //;if mysqli_affected_rows($conn) returns -1 then error 
    $aff=mysqli_affected_rows($conn);
    echo"<br>number of affected rows: ".$aff."<br>";    
?>