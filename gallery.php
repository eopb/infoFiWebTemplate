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
        function gallery_card($photo, $photo_before, $photo_after, $caption) {
            ?>
        <figure>
            <a
                href="gallery_page.php?photo=<?php echo $photo;?>&photo_before=<?php echo $photo_before;?>&photo_after=<?php echo $photo_after;?>">
                <img src="private/images/photos/<?php echo $photo;?>" alt="<?php echo $caption;?>"
                    title="<?php echo $caption;?>">
            </a>
            <p><?php echo $caption;?></p>
        </figure>
        <?php
        }
        ?>
        <?php 
            $pages = [
                ["outside/cwmt15.jpg", "Eastbourne Civilian War Memorial Trust"],
                ["outside/cwmtplaque15.jpg", "Eastbourne Civilian War Memorial Trust - Plaque"],
                ["outside/cwmtsign15.jpg", "Eastbourne Civilian War Memorial Trust - Sign"],
                ["outside/doorway15.jpg", "Doorway leading into the Tower"],
                ["outside/entrance15.jpg", "Entrance to the Tower"],
                ["outside/steps15.jpg", "Steps leading up to the Tower"],
                ["outside/stepslow15.jpg", "Steps leading up to the Tower"],
                ["outside/stepstop15.jpg", "Top of the steps and Tower"],
                ["middle/middle15.jpg", "Steps leading up to roof"],
                ["roof/centreRoof15.jpg", "Centre of the roof"],
                ["roof/door15.jpg", "Roof door"],
                ["roof/replicaDoor15.jpg", "Replica roof door"],
                ["roof/roof115.jpg", "Gun rail"],
                ["roof/roof215.jpg", "Gun rail"],
                ["roof/stepsDown15.jpg", "Steps down to the middle floor"],
                ["basement/basement15.jpg", "Basement area"],
                ["basement/hatchway15.jpg", "Hatchway to under-basement storage"],
                ["basement/magazineCopper15.jpg", "Copper frame around magazine room door"],
                ["basement/magazineDoor15.jpg", "Magazine Room Door"],
                ["basement/magazineRoom15.jpg", "Magazine Room"],
                ["basement/vents15.jpg", "Magazine Room - Vents"],
                ["basement/puppetDoor15.jpg", "Basement - Puppet Door"],
            ];
            $number_of_pages = count($pages);

            for($x = 0; $x < $number_of_pages; $x++) {
                if ($x == 0) {
                    gallery_card($pages[$x][0], $pages[$number_of_pages - 1][0], $pages[1][0], $pages[$x][1]);
                } elseif ($x == ($number_of_pages - 1)) {
                    gallery_card($pages[$x][0], $pages[$number_of_pages - 2][0], $pages[0][0], $pages[$x][1]);
                } else {
                    gallery_card($pages[$x][0], $pages[$x - 1][0], $pages[$x + 1][0], $pages[$x][1]);
                }
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