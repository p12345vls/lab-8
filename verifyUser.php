<?php
session_start();

include 'connect.php';
$connect = getDBConnection();

$sql = "SELECT * FROM users
        WHERE username = :username
        AND password = :password";
$stmt = $connect->prepare($sql);
$data = array("username"=> $_POST['username'], ":password"=>sha1($_POST['password']));

$stmt->execute($data);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

//Checking credentials in database
//redirecting user to quiz if credentials are valid
if(isset($user['username'])){
    
    $_SESSION['username'] = $user['username'];
    header('Location: index.php');

} else {
    ?>
    <!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body  class='info'>
        <div><h1 class="text-info">The values you entered were incorrect</h1></div>
        <br>
        <a href='login.php'><button type="button" class="btn btn-warning">Retry</button></a>
    </body>
</html>

<?php } ?>