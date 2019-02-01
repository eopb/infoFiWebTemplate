<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">

    <link rel="stylesheet" href="style/css/galleryStyle.css">

    <title>Wish Tower Guide</title>
    <link rel="icon" href="private/images/svg/svgo/lowPolyWishTower.svg">
    <link rel="icon" href="private/images/favicon.ico">
</head>

<body>
    <header>
        <h1>Gallery</h1>
    </header>

    <section>
        <?php
        include 'list_of_gallery_pages.php';
        function gallery_card($photo_index, $caption) {
            ?>
        <figure>
            <a href="gallery_page.php?photo_index=<?php echo $photo_index;?>">
                <img src="private/images/photos/<?php echo list_of_pages()[$photo_index][0];?>"
                    alt="<?php echo $caption;?>" title="<?php echo $caption;?>">
            </a>
            <p><?php echo $caption;?></p>
        </figure>
        <?php
        }
        ?>
        <?php
            $pages = list_of_pages();
            $number_of_pages = count($pages);

            for($x = 0; $x < $number_of_pages; $x++) {
                gallery_card($x, $pages[$x][2]);
            }
        ?>


    </section>
    <div></div>
    <div class="buttonsArea">
        <div class="menuButtons">
            <a href="choice.html" class="button">Back</a>
        </div>
    </div>
</body>

</html>