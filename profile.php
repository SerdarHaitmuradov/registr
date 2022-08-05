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
        <form>
            <img src="<?php $_SESSION['user']['avatar']?>" width="100" alt="avatar">
            <h2> <?php echo $_SESSION['user']['name']; ?></h2>
        </form>
    </body>
</html>