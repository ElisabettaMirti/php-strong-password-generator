<?php

$users = [
    [
        "user" => "Edmond",
        "password" => "Montecristo"
    ],
    [
        "user" => "Jekyll",
        "password" => "MrHyde"
    ],
    [
        "user" => "Beatrix",
        "password" => "Bride"
    ],
    [
        "user" => "Michelangelo",
        "password" => "Caravaggio"
    ],
    [
        "user" => "Shinji",
        "password" => "Evangelion"
    ],
];

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
        </form>
    </main>
</body>
</html>