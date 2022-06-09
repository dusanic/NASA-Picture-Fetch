<!DOCTYPE html>
<?php 
$content = file_get_contents("https://apod.nasa.gov/apod/astropix.html");

$imageurl = explode('">',explode('<a href="', $content)[2])[0];
$title = explode(' </b>', explode('<b> ', $content)[1])[0];
$text = explode('<p> <center>', explode('<b> ', $content)[2])[0];


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">

        <div class="title">NASA daily picture fetch</div>
        <div class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <div class="navbar-links">
            <ul>
                <li><a href="#">Upwork</a></li>
                <li><a href="#">Github</a></li>
            </ul>
        </div>
    </nav>

    <div class="loading">
        <div class="circle"></div>
    </div>

    <div class="content">
        <div class="image-content">
            <div class="image">
                <img src="https://apod.nasa.gov/apod/<?php echo $imageurl?>">
            </div>
            <div class="image-description">
                <p class="image-name"><?php echo $title;?></p>
                <p class="image-text"><?php echo $text;?></p>
            </div>
        </div>
    </div>

    <footer>
        <p>Made by Milorad Dušanić</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>