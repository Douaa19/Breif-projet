<?php
include_once('conexion.php');
if(!empty($_POST['submit'])){
$url=$_POST['url'];
$sql=mysqli_query ($connect,"INSERT INTO `url`( `url`) VALUES  ('$url')") ;
if ($sql) {
    echo"welcom";
    
}else{
    echo"ereur";
}  
}  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
</head>
<body>
    <div>
        <form action="chat.php" method="post">
            <label for="url1">  entre url </label>
            <input type="text" name="url" id="url1">
            <input type="submit" name="submit" id>
        </form>
    </div>
</body>
</html>