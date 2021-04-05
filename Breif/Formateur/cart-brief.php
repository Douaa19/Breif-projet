<?php
    include_once('../Database/database.php');
    session_start();
    $coach_id = $_SESSION['coach_id'];
    if (isset($_POST['titre']) && isset($_POST['description']) && isset($_POST['context']) && isset($_POST['dead_line']) && isset($_POST['submit'])) {
        $titer = $_POST['titre'];
        $discreption = $_POST['description'];
        $context = $_POST['context'];
        $dead_line = $_POST['dead_line'];
        $insert = "INSERT INTO projets(titre, description, contexte	, dead_line, id_formateur) VALUE ('$titer', '$discreption', '$context', '$dead_line', $coach_id)";
        $query = mysqli_query($connect, $insert);
        header("location:index.php");
        if (!$query) {
            echo "erreur" . mysqli_error($connect);
        }
    }






?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cart-brief.css">
    <title>cart</title>
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

        <div class="cart">
            <form action="cart-brief.php" method="post">
                <P>Titre</P>
                <input type="text" name="titre">

                <P>Description</P>
                <input type="text" name="description">

                <P>context</P>
                <input type="text" name="context">

                <P>dead_line</P>
                <input type="text" name="dead_line">

                <P>date_prj</P>
                <input type="text" name="date_prj"><br>

                <input type="submit" name="submit" value="Ajouté">

            </form>

        </div>
    </div>


    
</body>
</html>