<?php
include 'list_of_gallery_pages.php';
function output_gallery_page($photo_index, $index_before, $index_after) {
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


    <a class="galleryArrow1" href="gallery_page.php?photo_index=<?php echo $index_before;?>">
        <img src="../../private/images/svg/svgo/angle-left-solid.svg">
    </a>
    <img src="../../private/images/photos/<?php echo list_of_pages()[$photo_index][0];?>" alt="" title=""
        class="mainGalleryImg">
    <a class="galleryArrow2" href="gallery_page.php?photo_index=<?php echo $index_after;?>">
        <img src="../../private/images/svg/svgo/angle-right-solid.svg">
    </a>
    <div class="buttonsArea">
        <div class="menuButtons">
            <a href="../../gallery.php" class="button">Back</a>
        </div>
    </div>
</body>

</html>
<?php
}
?>

<?php
$photo_index = $_GET['photo_index'];
$number_of_pages = count(list_of_pages());

if ($photo_index == 0) {
    output_gallery_page($photo_index, $number_of_pages - 1, 1);
} elseif ($photo_index == ($number_of_pages - 1)) {
    output_gallery_page($photo_index, $photo_index - 1, 0);
} else {
    output_gallery_page($photo_index, $photo_index - 1, $photo_index + 1);
}
?>