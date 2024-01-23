<?php 
    $textToModify = $_GET['text'];
    $wordCensured = $_GET['badWord'];

    $wordReplace = str_replace($wordCensured, '<span class="censored-word">***</span>', $textToModify)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div class="word-counter">
            <div class="word-counter-text window">Word count</div>
            <div class="word-counter-number window"><?php echo strlen($textToModify) ?></div>
        </div>
        <div class="old-text text-container window">
            <p><?php echo $textToModify ?></p>
        </div>

        <div class="word-counter">
            <div class="word-counter-text window">Word count</div>
            <div class="word-counter-number window"><?php echo strlen($wordReplace) ?></div>
        </div>
        <div class="new-text text-container window"><?php echo $wordReplace ?></div>
    </section>
</body>
</html>