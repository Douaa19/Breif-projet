<?php
// Include connection
    include_once('../../Database/database.php');
    session_start();


// 
    $submit = $_POST['login'];
    if (isset($submit)) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username) || empty($password)) {
            header('Location: ../index.php');
            die();
        } else {
            $select = "SELECT * FROM users WHERE username='$username' AND pass_word='$password'";
            $result = mysqli_query($connect, $select);
            if (mysqli_num_rows($result)==1) {
                $user = mysqli_fetch_assoc($result);
                $user_role = $user['role'];
                if ($user_role == 'Student') {
                    $_SESSION['id_user'] = $user['id'];
                    header('Location: ../../Etudiant/index.php');
                } elseif ($user_role == 'Coach') {
                    $_SESSION['id_user'] = $user['id'];
                    header('Location: ../../Formateur/index.php');
                }
            } else {
                header("Location: ../index.php?error");
            }
        }
    }



?>