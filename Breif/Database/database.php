<?php
//  Connexion database;
$connect = mysqli_connect('localhost', 'root', '', 'gestion_brief');
if (!$connect) {
    echo "Connection feild";
}