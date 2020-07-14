<?php require 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Видюхи тащят</title>
    <style type="text/css">
     
        body {
            background: url(images/bg1.jpg);
        }

        #genaral {
            position: relative;
            justify-content: center;
            min-height: 100%;
            width: 50%;
            background: #D3D3D3;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact.css" />
</head>

<body>
        <div class="header">
            <a href="index.php">
                <img id="logo" src="images/mod2.png" alt="" />
            </a>
            <div class="head_buttons">
                <a href="log.php" class="btn btn-dark">Log</a>
                <a href="contact.php" class="btn btn-dark">Contacts</a>
                <a href="backcall.php" class="btn btn-dark">Back call</a>
            </div>
            <div class="buttons_sign">
                <a href="new2.php" class="btn btn-dark">Registration</a>
            </div>
        </div>
    