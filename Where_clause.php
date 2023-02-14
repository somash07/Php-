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
     
    /* 
    simply using select
    
    $sql="SELECT * FROM `trip`";

    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo"query mismtch";
    }

    echo "number of records: ".mysqli_num_rows($result);*/
  
    //select with where clause
    $sql="SELECT * from `trip` where `destination`='ktm'";

    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo"query mismtch";
    }
    $num=mysqli_num_rows($result);
    if($num>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "hello ".$row['name']."welcome to ".$row['destination'];
        }
    }

    //updating db using where clause
    $update="UPDATE `trip` SET `name`='somash1' WHERE `destination`='ktm'";

    $result2=mysqli_query($conn,$update);
    //$result2 return value true or false.boolean can be checked by var_dump($result2)
    if($result2){
        echo"<br>updated record successfully<br>";
    }
    else{
        echo mysqli_error($conn);
    }
    //to find number of affected rows :
    $aff=mysqli_affected_rows($conn);
    echo"<br>number of affected rows: ".$aff."<br>";    
?>