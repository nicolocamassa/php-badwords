<?php 
    $textToModify = $_GET['text'];
    $wordCensured = $_GET['badWord'];

    $wordReplace = str_replace($wordCensured, '***', $textToModify)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TEXT:</h1>
    <p>Letters in the text: <?php echo strlen($textToModify) ?></p>
    <p><?php echo $textToModify ?></p>
    <h1>CENSURED WORD: <?php echo $wordCensured ?></h1>

    <p>Letters in the NEW text: <?php echo strlen($wordReplace) ?></p>
    <p><?php echo $wordReplace ?></p>
</body>
</html>