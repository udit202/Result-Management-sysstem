<?php
session_start();
session_destroy();
header('location:login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <!-- <style>
        .container{
            width: 100%;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        a{
            text-decoration: none;
            font-size: 20px;
            border: 2px solid navy;
            padding: 3px 15px;
            border-radius: 5px;
            background-color: white;
        }
        a:hover{
            background-color: navy;
            color: white;
            font-size: 18px;
        }
    </style>
    <div class="container">
        <a href="login.php">Login</a>
    </div> -->
</body>
</html>