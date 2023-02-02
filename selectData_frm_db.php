<?php
        $servername="localhost";
        $username="root";
        $password="";
        $database="logs";
    
        $conn=mysqli_connect($servername,$username,$password,$database);
    
        if(!$conn){
            die("cannot connect to the site due to technical error<br>");
        }
        echo "connection established<br>";

        //sql query to select data from data base
        $sql="SELECT * FROM `logindata`";
        $result=mysqli_query($conn,$sql);

        //finding number of records returned in rows  
        $num=mysqli_num_rows($result);
        echo $num."<br>";

        //displaying rows returned by sql query
        /* mysqli_fetch_assoc->assosiative array. it fetches record one by one until all the data are fetched from db.the assosiative array represents next rows of data in db.
         
        if($num>0){
            $row=mysqli_fetch_assoc($result);
            echo var_dump($row)."<br>";
            $row=mysqli_fetch_assoc($result);
            echo var_dump($row)."<br>";
            $row=mysqli_fetch_assoc($result);
            echo var_dump($row)."<br>";
            $row=mysqli_fetch_assoc($result);
            echo var_dump($row)."<br>";
            $row=mysqli_fetch_assoc($result);
            echo var_dump($row)."<br>";
            //returns null if all the data are fetched
        }
        */
        echo"<br><br>";

        //above tedious so using loops(while)
        while($row=mysqli_fetch_assoc($result))
        //or while(mysqli_fetch_assoc)or while(mysqli_fetch_assoc($result)!=NULL)
        {
            echo "hello ".$row['name']."<br>";
        }//true until mysqi_fetch_assoc returns null
?>