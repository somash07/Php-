<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nam=$_POST['name'];
        echo "success and name is ".$nam;
    }
    //using name in forms to access in php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="forms_get_post.php" method="post">
    name: <input type="text" name="name" >
    <input type="submit">
</form>
</body>
</html>