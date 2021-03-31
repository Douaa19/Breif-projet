<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <main>
        <div class="container">
            <form action="includes/login.inc.php" method="post">
            <h1>Login</h1>
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
            </form>
        </div>
    </main>
</body>
</html>