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
        <form action="includes/sing-up.inc.php" method="post" class="container">
            <h1>Sing-up</h1>
            <div class="username">
                <label id="username">Username</label>
                <input type="text" name="username">
            </div>
            <div class="email">
                <label id="email">Email</label>
                <input type="email" name="email">
            </div>
            <div class="password">
                <label id="password">Password</label>
                <input type="password" name="password">
            </div>
            <div class="function">
                <label id="function">Your are</label>
                <select name="role">
                    <option disabled selected>...</option>
                    <option value="Coach">Coach</option>
                    <option value="Student">Student</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Sing-up">
        </form>
    </main>
</body>
</html>