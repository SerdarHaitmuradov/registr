<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SIGN IN</title>
        <link href="config.css" rel="stylesheet">
    </head>
    <body>
        <form action="regis_config.php" method="post" enctype="multipart/form-data">
            <label>Name</label><br>
            <input type="text" name="name" placeholder="Input name"><br>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="Input email"><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Input password"><br>
            <label>Try password</label><br>
            <input type="password" name="password_r" placeholder="Retry password"><br>
            <label>Photo</label><br>
            <input type="file" name="photo"><br>
            <button type="submit" name="submit">Go</button><br>
            <?php
            if($_SESSION['p'])
            {
                echo'<p>'.$_SESSION['p'].'</p>';
            }
            unset($_SESSION['p']);
            if($_SESSION['reg'])
            {
                echo'<p>'.$_SESSION['reg'].'</p>';
            }
           unset($_SESSION['reg']); 
            ?>
        </form>
    </body>
</html>