<?php
    include_once('../Database/database.php');
    session_start();
    $id_projet = $_GET["id_projet"];
    $selct = "SELECT * FROM projets WHERE id_projet = $id_projet";
    $query = mysqli_query($connect,$selct);
    $feach = mysqli_fetch_assoc($query);

    if (isset($_POST['submit'])) {
        $titre = $_POST["titre"];
        $description = $_POST["description"];
        $context = $_POST["context"];
        $dead_line = $_POST["dead_line"];
       
        $update = "UPDATE projets SET titre = '$titre', description = '$description', contexte= '$context', dead_line = '$dead_line' WHERE id_projet = $id_projet";
        $query = mysqli_query($connect,$update);
        if ($query) {
            header("location: index.php");
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
            </div>
        </div>
           
        <div class="cart">
            <form action="update.php?id_projet=<?php echo $id_projet ; ?>" method="post">
                <P>Titre</P>
                <input type="text" name="titre" value="<?php echo $feach['titre'] ; ?>">

                <P>Description</P>
                <input type="text" name="description" value="<?php echo $feach['description'] ; ?>">

                <P>Context</P>
                <input type="text" name="context" value="<?php echo $feach['contexte'] ; ?>">

                <P>Dead_line</P>
                <input type="text" name="dead_line" value="<?php echo $feach['dead_line'] ; ?>"><br>

                <input type="submit" name="submit" value="Modifier">

            </form>
        </div>
    </div>

</body>
</html>