<?php
    $connect = mysqli_connect('localhost', 'root', '', 'gestion');
    if (!$connect) {
        echo "Erreur";
        die();
    }

?>