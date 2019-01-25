<?php
function output_gallery_page_with_path($header, $body, $return_to, $path_correct) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

    <link rel="stylesheet" href="<?php echo $path_correct;?>style/css/contentStyle.css">

    <title>Wish Tower Guide</title>
    <link rel="icon" href="<?php echo $path_correct;?>private/images/svg/svgo/lowPolyWishTower.svg">
    <link rel="icon" href="<?php echo $path_correct;?>private/images/favicon.ico">
</head>

<body>
    <header>
        <h1><?php echo $header;?></h1>
    </header>
    <div class="mainContentText">
        <?php echo $body;?>
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
function output_gallery_page($header, $body, $return_to) {
    output_gallery_page_with_path($header, $body, $return_to, "");
}
?>