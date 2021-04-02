<<<<<<< HEAD
<?php
    include_once('connex.php');
    $select = "SELECT * FROM projets WHERE id_formateur = 1";
    $result = mysqli_query($connect,$select);
    


?>





=======
>>>>>>> main
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page formateur</title>
    <link rel="stylesheet" href="CSS/index.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <h1><span >You</span>Code</h1>
                
            </div>
            <div class="para_noti">
                <a href="notification.php"><img src="../Conception_Frontend/imag/Notification.png" alt="notifi" class="img1"></a>
                <img src="../Conception_Frontend/imag/Parametre.png" alt="setting" class="img2">
            </div>
        </div>
            <button class="add">
                <img src="../Conception_Frontend/imag/plus.svg" alt="plus">
            </button>
        <div class="cartes">
            <?php
                foreach ($result as $row) {
            ?>
                    <div class="carte1">
                        <p><?php echo $row['titre']; ?></p>
                        <p><?php echo $row['date_prj']; ?></p>
                        <span><a href="update.php" >Modifier</a>/<a href="#">Suprimer</a></span>
                     </div>
            <?php
            }
            ?>
            
        </div>
        <div class="footer">
            <p>©</p>

        </div>
    </div>
=======
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projet</title>
</head>
<body>
<h1> HELLO</h1>
>>>>>>> main
</body>
</html>