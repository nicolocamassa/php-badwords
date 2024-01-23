<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Badwords</title>
</head>
<body>
    <h1 class="page-title">CENSURATORE DI PAROLE</h1>
    <form action="badwords-detect.php" method="get">
        <span>Text:</span>
        <textarea type="text" name="text"></textarea>

        <span>Bad words:</span>
        <input type="text" name="badWord">

        <input type="submit">
    </form>
</body>
</html>