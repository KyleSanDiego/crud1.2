<?php
    session_start();

    if(!isset($_SESSION['username']) || $_SESSION['role'] != 'admin')
    {
        header("Location: pamboli.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "welcome admin ".$_SESSION['username'];
    ?>
    <br><a href="logout.php">Logout</a>
    
</body>
</html>