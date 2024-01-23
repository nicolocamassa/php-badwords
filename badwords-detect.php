<?php 
    $textToModify = $_GET['text'];
    $wordCensured = $_GET['badWord'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TEXT: <?php echo $textToModify ?></h1>
    <h1>CENSURED WORD: <?php echo $wordCensured ?></h1>
</body>
</html>