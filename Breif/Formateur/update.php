<?php
    include_once('connex.php');
    $selct = "SELECT * FROM projets";
    $query = mysqli_query($connect,$selct);
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $delete = "DELETE FROM projets WHERE id_projet='$id'";
        $quer = mysqli_query($connect,$delete);
        if (!$quer) {
            echo "eror";
        }
        else {
            header("location:update.php");
        }
    }


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/update.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="header">
            <div class="logo">
                <h1><span>You</span>Code</h1>
            </div>
            <div class="para_noti">
                <img src="../Conception_Frontend/imag/Notification.png" alt="notifi" class="img1">
                <img src="../Conception_Frontend/imag/Parametre.png" alt="setting" class="img2">
            </div>
        </div>
        <?php
            foreach ($query as $row) :
        ?>
        <div class="cart">
            <form action="cart-brief.php">
                <P>Titre</P>
                <input type="text" name="titre" <?php ?>>

                <P>Description</P>
                <input type="text" name="discreption">

                <P>context</P>
                <input type="text" name="livrabl">

                <P>dead_line</P>
                <input type="text" name="livrabl">

                <P>date_prj</P>
                <input type="text" name="livrabl">

                <input type="submit" name="submit" value="update">

            </form>

        </div>
        <?php
            endforeach;
        ?>
    </div>

</body>
</html>