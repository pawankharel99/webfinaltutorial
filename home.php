<?php 

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h2{
            text-align:center;
        }
        </style>
</head>
<body>
    <h2>Welcome <?php echo $_SESSION['username']; ?> </h2>
    <a href="logout.php">LOGOUT</a>
</body>
</html>