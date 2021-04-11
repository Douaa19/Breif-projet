
<?php
    include_once('../Database/database.php');
    session_start();
    $id_user = $_SESSION['id_user'];
    $select = "SELECT id_formateur FROM formateurs WHERE id_user = $id_user";
    $query = mysqli_query($connect,$select);
    $fetch = mysqli_fetch_assoc($query);
    $id_formateur = $fetch['id_formateur'];
    $_SESSION['coach_id'] = $id_formateur;
    $select = "SELECT * FROM projets WHERE id_formateur = $id_formateur";
    $result = mysqli_query($connect,$select);

    if (isset($_GET['id_projet'])) {
        $id_projet = (int)$_GET['id_projet'];
        $delete_valid = "DELETE FROM validation WHERE id_projet=$id_projet";
        $valid = mysqli_query($connect,$delete_valid);
        $delete = "DELETE FROM projets WHERE id_projet=$id_projet";
        $quer = mysqli_query($connect,$delete);
        if (!$quer) {
            echo "error" . mysqli_error($connect);
        }
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
                
            </div>
        </div>
            <button class="add">
               <a href="cart-brief.php"><img src="../Conception_Frontend/imag/plus.svg" alt="plus"></a> 
            </button>
        <div class="cartes">
            <?php
                foreach ($result as $row) {
                    $id_projet = $row['id_projet'];
            ?>
                    <div class="carte1">
                        <p><?php echo $row['titre']; ?></p>
                        <p><?php echo $row['date_prj']; ?></p>
                        <span><a href="update.php?id_projet=<?php echo $id_projet; ?>" >Modifier</a>/<a href="index.php?id_projet=<?php echo $id_projet; ?>">Suprimer</a></span>
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