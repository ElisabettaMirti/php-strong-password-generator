<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <main>
        <?php if (isset($_SESSION["logged"]) && $_SESSION["logged"]){ ?>
        <h1>Logged in!</h1>
        <?php } else { ?>

        <h1>Sorry, wrong username or password</h1>

        <?php } ?>
    </main>
</body>
</html>