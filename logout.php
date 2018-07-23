<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
     <link href="css/styles.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <title>Logged out</title>
</head>
    <body>
        <h1>Logged Out</h1>
        <hr>
        <a href='login.php'><button type="button" class="btn btn-info">Login</button></a>

    <?php
// remove all session variables
    session_unset();

// destroy the session 
    session_destroy();
    ?>
    </body>
</html>