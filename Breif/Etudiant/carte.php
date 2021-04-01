<?php
include_once('conexion.php');
    $id_projet = $_GET['id'];
    $query = "SELECT * FROM projets WHERE id_projet = $id_projet AND id_formateur = 1";
    $result = mysqli_query($connect,$query);
    $prj = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carte.css">
    <title>carte</title>
</head>
<body>
    <div class="container">
            <div class="header">
                <div class="logo">
                    <h1 class="you">You </h1>
                    <h1 class="code">Code </h1>
                </div>
                <div class="para_noti">
                    <a href="notification.php"><img src="../Conception_Frontend/imag/Notification.png" alt="notifi" class="img1"></a>
                    <img src="../Conception_Frontend/imag/Parametre.png" alt="setting" class="img2">
                </div>
            </div>
                <div class="carte">
                    <h1><?php echo $prj['titre']; ?></h1>
                    <h3><?php echo $prj['date_prj']; ?></h3>
                    <h2><?php echo $prj['description']; ?></h2>
                    <p>
                        <?php echo $prj['contexte']; ?>
                    </p>
                    
                    <p><?php echo $prj['dead_line']; ?></p>
                </div>
            
    </div>
</body>
</html>