<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing-up</title>
    <link rel="stylesheet" href="CSS/sing-up.css">
</head>
<body>
    <main>
        <div class="container">
            <form action="includes/sing-up.inc.php" method="post">
                <h1>Sing-up</h1>
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
                <label for="function">Your are</label>
                <select id="function" name="role">
                    <option disabled selected></option>
                    <option value="Coach">Coach</option>
                    <option value="Student">Student</option>
                </select>
                <input type="submit" name="submit" value="Sing-up">
            </form>
        </div>
    </main>
</body>
</html>