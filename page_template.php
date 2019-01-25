<?php
function output_gallery_page($header, $body, $return_to) {
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

    <link rel="stylesheet" href="style/css/contentStyle.css">

    <title>Wish Tower Guide</title>
    <link rel="icon" href="private/images/svg/svgo/lowPolyWishTower.svg">
    <link rel="icon" href="private/images/favicon.ico">
</head>

<body>
    <header>
        <h1></h1>
    </header>
    <div class="mainContentText">
        $body;
    </div>
    <div class="buttonsArea">
        <div class="menuButtons">
            <a href="<?php echo $return_to;?>" class="button">Back</a>
        </div>
    </div>
</body>

</html>
<?php
}
?>