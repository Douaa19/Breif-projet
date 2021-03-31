<?php
// Connexion base de donnée;
    include_once('../../Database/database.php');
    if (!include_once('../../Database/database.php')) {
        echo "Includes feild";
    }

// Teste des données;
    $submit = $_POST['submit'];
    if(isset($submit)) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if (!empty($username) || !empty($email) || !empty($password) || !empty($role)) {
            $insert = 'INSERT INTO users(username, email, pass_word, role) VALUES ("' . $username . '" , "' . $email . '" , "' . $password . '" , "' . $role . '")';
            $result = mysqli_query($connect, $insert);
            if ($result) {
                echo "New insert";
            }
        }
    }
    




























?>