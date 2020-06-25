<?php require '../app/init.php'?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel ="stylesheet" href ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel ="stylesheet" href="css/styles.css">

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class = "container">
        <div class ="navbar-header">
            <span class = "sr-only">Toggle navigation</span>
            <span class ="icon-bar"></span>
            <span class ="icon-bar"></span>
            <a class="navbar-brand" href ="#">SMS APP</a>
        </div>
        <div id = "navbar"  class="collapse navbar-collapse">
        <ul class = "nav navbar-nav">
            <li><a href ="index.php">send message</a></li>
            <li><a href = "code.php">send code</a></li>
            <li><a href = "verify.php">verify</a></li>
        </ul>
        </div>
    </div>
</nav>
</body>
</html>
