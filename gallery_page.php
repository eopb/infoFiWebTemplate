<?php
function output_gallery_page($photo, $link_before, $link_after) {
    ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

    <link rel="stylesheet" href="../../style/css/galleryPageStyle.css">

    <title>Wish Tower Guide</title>
    <link rel="icon" href="../../private/images/svg/svgo/lowPolyWishTower.svg">
    <link rel="icon" href="../../private/images/favicon.ico">
</head>

<body>


    <a class="galleryArrow1" href="../<?php echo $link_before;?>">
        <img src="../../private/images/svg/svgo/angle-left-solid.svg">
    </a>
    <img src="../../private/images/photos/<?php echo $photo;?>" alt="" title="" class="mainGalleryImg">
    <a class="galleryArrow2" href="gallery_page?<?php echo $link_after;?>">
        <img src="../../private/images/svg/svgo/angle-right-solid.svg">
    </a>
    <div class="buttonsArea">
        <div class="menuButtons">
            <a href="../../gallery.html" class="button">Back</a>
        </div>
    </div>
</body>

</html>
<?php
}
?>

<?php
    // http://localhost/gallery_page.php?photo=basement%2Fbasement25.jpg&photo_before=roof%2FroofStepsDown.html&photo_after=basement%2FbasementHatchway.html
    

    $photo = $_GET['photo'];
    $photo_before = $_GET['photo_before'];
    $photo_after = $_GET['photo_after'];
    
    output_gallery_page($photo , $photo_before, $photo_after);
?>