<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SIGN IN</title>
        <link href="config.css" rel="stylesheet">
    </head>
    <body>
        <form action="signIn.php" method="post" >
            <label>Login</label><br>
            <input type="text" name="name" placeholder="Input login"><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Input password"><br>
            <button type="submit" name="submit">Go</button><br>
            Dont have an account? <a href="regist.php">Sign up</a>
            <?php
             if($_SESSION['aut'])
            {
                echo'<p>'.$_SESSION['aut'].'</p>';
            }
            unset($_SESSION['aut']);
           ?>
        </form>
    </body>
</html>