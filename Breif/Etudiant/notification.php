<?php
include_once('../Database/database.php');
session_start();
$id_user = (int)$_SESSION['id_user'];
$select = "SELECT id_etudaint FROM etudaints WHERE id_user = $id_user";
$query= mysqli_query($connect,$select);
$etudiant = mysqli_fetch_assoc($query);
$etudiant_id = (int)$etudiant['id_etudaint'];
$select2 = "SELECT id_projet,validated FROM validation WHERE id_etudiant = $etudiant_id";
$query2 = mysqli_query($connect,$select2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/notification.css">
    <title>notification</title>
</head>
<body>
    <div class="container">
        <div class="header">
                    <div class="logo">
                        <h1 class="you">You </h1>
                        <h1 class="code">Code </h1>
                    </div>
        </div>
        <?php foreach ( $query2 as $row) { ?>
            <div class="notif">
                <h1>id projet : <?php echo $row['id_projet'] ; ?><h1>
                <h3><?php echo $row['validated'] ; ?></h3>
            </div>
        <?php
            }
         ?>
        <div class="footer">
            <p>©</p>
        </div>
    </div>
</body>
</html>