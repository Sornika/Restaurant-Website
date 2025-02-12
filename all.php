<?php

include("connection.php");
include("login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NEPALI RESTAURANT</title>
    <link rel="icon" type="image/x-icon" href="img/restaurantIcon.png" />
    <link rel="stylesheet" href="all.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $("#header").load("header.html");
            $("#footer").load("footer.html");
        });
    </script>
</head>
<body>
    <div id="header"></div>
    <div id="hero">
        <div id="hero_content">
            <h1>EVEREST RESTAURANT</h1>
            <h2>AUTHENTIC INDIAN & NEPALI FOOD BY CHEF</h2>
            <a href="menu.html">SEE OUR MENU</a>
        </div>
    </div>
    <div id="footer"></div>
</body>
</html>
