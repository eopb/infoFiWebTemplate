<?php
    // http://localhost/gallery/every.php?photo=basement/basement.jpg
    $photo = $_GET['photo'];
    
    include '../template.php';
    output_gallery_page($photo, str_replace(".jpg","25.jpg", $photo), str_replace(".jpg","50.jpg", $photo), str_replace(".jpg","75.jpg", $photo), 4535, 3401, 2268, 3402, "roof/roofStepsDown.html", "basement/basementHatchway.html");
?>