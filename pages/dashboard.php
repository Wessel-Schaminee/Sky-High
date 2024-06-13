<?php
session_start();
require('conn.php');

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="dashboardmain">
    <div class="mainleft">
        <h1 >welkom <?php echo ($_SESSION['user']) ?></h1>
    </div>
    <div class="mainright"></div>
    <h1>mijn reizen </h1>
</div>
</body>
</html>