<?php
    include_once('../Database/database.php');
    //$selct = "SELECT * FROM projets";
    //$query = mysqli_query($connect,$selct);

    if (isset($_POST['submit'])) {
        $submit = $_POST['submit'];
        $update = "UPDATE projets SET titre = '$_POST[titre]', Description = '$_POST[description]', context = '$_POST[context]', dead_line = '$_POST[dead_line]', date_prj = '$_POST[date_prj]'";
        $query = mysqli_query($connect,$update);
        if (!$query) {
            echo "error";
        }
    }





    // if (isset($_GET['id'])) {
    //     $id = (int)$_GET['id'];
    //     $delete = "DELETE FROM projets WHERE id_projet='$id'";
    //     $quer = mysqli_query($connect,$delete);
    //     if (!$quer) {
    //         echo "eror";
    //     }
    //     else {
    //         header("location:update.php");
    //     }
    // }


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
            </div>
        </div>
            <?php
                // foreach ($query as $row) :
            ?>
        <div class="cart">
            <form action="cart-brief.php">
                <P>Titre</P>
                <input type="text" name="titre" <?php ?>>

                <P>Description</P>
                <input type="text" name="description">

                <P>Context</P>
                <input type="text" name="context">

                <P>Dead_line</P>
                <input type="text" name="dead_line">

                <P>Date_prj</P>
                <input type="text" name="date_prj">

                <input type="submit" name="submit" value="Modifier">

            </form>
        </div>
            <?php
                // endforeach;
            ?>
    </div>

</body>
</html>