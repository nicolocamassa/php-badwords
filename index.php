<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Badwords</title>
</head>
<body>
<form action="badwords-detect.php" method="get">
    <h1 class="page-title">Censor words</h1>
    <p class="subtitle">Enter your text and censor the word you want</p>

    <div class="container-windows">
        <div class="left-window window">
            <h1>Censor your words</h1>
            <div>On the side you will find the text area where you can insert your text and then choose the word to censor</div>
        </div>
        <div class="center-window window">
            <h1>Your text here:</h1>
            <textarea type="text" name="text" placeholder="Type here"></textarea>
        </div>
        <div class="right-windows">
            <div class="right-top-window window">
                <h1>Word to be censored:</h1>
                <input class="input-word" type="text" name="badWord">
                <input class="submit-btn" type="submit" value="CENSORE">
            </div>
            <div class="right-bottom-window window">
                The censored word will be replaced with "***"
            </div>
        </div>
    </div>
    </form>


    <!-- 
        <span>Text:</span>
        <textarea type="text" name="text"></textarea>

        <span>Bad words:</span>
        

        
    -->
</body>
</html>