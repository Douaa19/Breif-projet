<?php
// Connexion base de donnée;
    include _once('../../Database/database.php');
    if (!include_once('../../Database/database.php')) {
        echo "Include feild";
    }

// Teste des données;
    $submit = $_POST['submit'];
    if(isset($submit)) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        if (!empty($username) && !empty($email) && !empty($password) && !empty($role)) {
            $select = "SELECT * FROM users WHERE username='$username' AND pass_word='$password' AND email='$email' AND role='$role'";
            $res = mysqli_query($connect, $select);
            if (mysqli_num_rows($res)) {
                header('Location: ../index.php?this_user_is_aredy_here');
            } else {
                $insert = 'INSERT INTO users(username, email, pass_word, role) VALUES ("' . $username . '" , "' . $email . '" , "' . $password . '" , "' . $role . '")';
                $result = mysqli_query($connect, $insert);
                if ($result) {


                    
// $select_query = "SELECT * FROM `users` ORDER BY `users`.`id` DESC LIMIT 1  ";
// $result_quer = mysqli_query($connect,$select_query);
// $fetch=mysqli_fetch_assoc($result_quer);





                    header('Location: ../index.php?hello_new_user');
                    // die();
                }
                else {
                    echo "Insert is not working!!!";
                }
            }
        } else {
            header('Location: ../sing-up.php');
        }
    }
    




























?>