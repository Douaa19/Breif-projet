<?php
//  Connexion database;
$connect = mysqli_connect('localhost', 'root', '', 'gestion');
if (!$connect) {
    echo "Connection feild";
}