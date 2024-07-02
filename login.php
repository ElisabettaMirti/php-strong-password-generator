<?php

$users = [
    [
        "username" => "Edmond",
        "password" => "Montecristo"
    ],
    [
        "username" => "Jekyll",
        "password" => "MrHyde"
    ],
    [
        "username" => "Beatrix",
        "password" => "Bride"
    ],
    [
        "username" => "Michelangelo",
        "password" => "Caravaggio"
    ],
    [
        "username" => "Shinji",
        "password" => "Evangelion"
    ],
];

session_start();


if (isset($_POST["username"]) && isset($_POST["password"])){
    foreach ($users as $user) {
        if ($user["username"] === $_POST["username"]){
            if ($user["password"] === $_POST["password"]) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];
                $_SESSION["logged"] = true;
                Header("Location: ./index.php");
                break;
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login</title>
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <form action="./login.php" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="text" name="password" id="password">
            </div>
            <button type="submit">Login</button>
            <?php  if (!isset($_SESSION["logged"])){ ?>
                <pre>Wrong username or password</pre>
            <?php } ?>
        </form>
    </main>
</body>
</html>