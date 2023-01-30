<?php

session_start();
if(isset($_SESSION['uid'])){
    echo "";
    }else{
    header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body
        {
        background-image:url('../images/sc4.png');
        background-repeat: no-repeat;
        background-size: cover;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div align= 'center' style="font-weight:bolder ; color:firebrick;  font-family:'Times New Roman', Times, serif"><br><br><br><br>
        <h1>This is a Global Courier Management Service</h1>
        <h2>The fastest courier service of India</h2><br><br>
        
        
    </div>
</body>
</html>