<?php
include_once('../Database/database.php');
session_start();
$id_user=(int)$_SESSION['id_user'];
$query = "SELECT id_formateur FROM etudaints WHERE id_user=$id_user";
$result1 = mysqli_query($connect,$query);
$query_formateur=mysqli_fetch_assoc($result1);
$formateur_id = $query_formateur['id_formateur'];
$select_projet="SELECT * FROM `projets` " ;
$result=mysqli_query($connect,$select_projet);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
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
            </div>
        </div>
        <div class="cartes">
            <?php
                foreach ($result as $row) {
                    $id_prj = $row['id_projet'];
            ?>
                <div class="carte1">
                    <p><?php echo $row['titre']; ?></p>
                    <p><?php echo $row['date_prj']; ?></p>
                    <a href="carte.php?id='<?php echo $id_prj; ?>'">lien de projet</a>
                </div>
            <?php
                }
            ?>
        </div>
        <div class="footer">
            <p>©</p>

        </div>
    </div>
</body>
</html>