<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    </head>
     <body class="well">
    <div>
   
        <h1>Login</h1>
        <h2>Credentials required before submiting form.</h2>
        <p>You can log in using usernames <strong>user_1</strong> 
        or <strong>user_2</strong>. The password is <strong>s3cr3t</strong>.</p>
        
        <!--Form to enter credentials-->
                <form method="post" action="verifyUser.php">
                     <div class="container">
                        <input type="text" name="username" placeholder="Username"/></br>
                        <input type="password" name="password" placeholder="Password"/></br></br>
                        <input type="submit" name="submit" value="login"  class = 'btn btn-primary'/>
                     </div>
                </form>
        
       
            </div>
        
    </body>
</html>