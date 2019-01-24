<?php
function output_gallery_page($photo, $photo_25, $photo_50, $photo_75, $photo_width, $photo_width_25, $photo_width_50, $photo_width_75, $link_before, $link_after) {
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
    <img srcset="../private/images/photos/<?php echo $photo;?> <?php echo $photo_width;?>w,
                    ../../private/images/photos/<?php echo $photo_75;?> <?php echo $photo_width_75;?>w,
                    ../../private/images/photos/<?php echo $photo_50;?> <?php echo $photo_width_50;?>w,
                    ../../private/images/photos/<?php echo $photo_25;?> <?php echo $photo_width_25;?>w"
        src="../../private/images/photos/<?php echo $photo;?>" alt="" title="" class="mainGalleryImg">
    <a class="galleryArrow2" href="../<?php echo $link_after;?>">
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