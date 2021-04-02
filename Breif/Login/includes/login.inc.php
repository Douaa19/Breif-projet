<?php
// Include connection
    include_once('../../Database/database.php');
    

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
                $sel_student = "SELECT role FROM users WHERE role='Student'";
                $result_student = mysqli_query($connect, $sel_student);
                if ($result_student) {
                    header('Location: ../../Etudiant/index.php');
                } else {
                    header('Location: ../../Formateur/index.php');
                }
            } else {
                header("Location: ../index.php?error");
            }
        }
    }



?>