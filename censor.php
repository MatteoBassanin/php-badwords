<?php
    $sentence = $_GET['mySentence'];
    $censor = $_GET['myCensor']
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words Censored</title>
</head>
<body>
    <h1><?php echo str_replace($censor,"***",$sentence); ?></h1>
</body>
</html>