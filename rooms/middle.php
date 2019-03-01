<?php 
include '../page_template.php';
output_gallery_page_with_path(
"Middle Floor", 
<<<EOT
<p>
    The main section of the tower is accessed via the main entrance and steps from ground level, a relatively modern
    addition in comparison to the original footbridge which spanned the moat. A stone tablet, displaying the number 73
    (the number of the tower)
    is above the door.
</p>
<p>
    It was originally divided into 3 seperate areas by wooden partitions. This would have provided accommodation for 24
    men and one stationed officer, with two fireplaces heating the rooms. Light was provided by two small windows, to
    the north east and south
    west. In the centre of the tower, a supporting pillar is in place which supports the weight of the roof; this design
    ensures that the tower is resistant to external bombardment, including cannon-fire.
</p>
<img class="floatCenter"
    srcset="../private/images/photos/middle/middle.jpg 4016w,
                ../private/images/photos/middle/middle75.jpg 3012w,
                ../private/images/photos/middle/middle50.jpg 2008w,
                ../private/images/photos/middle/middle25.jpg 1004w"
    src="../private/images/photos/middle/middle.jpg" alt="Middle floor" title="Wish tower image">
<p>
    Evidence of the Tower's use as a home for a puppet museum can be seen from the middle floor by the colourful
    decorations surrounding the stairway up to the roof area, and the equally colourful modern spiral staircase leading
    down to the basement.
</p>
<p>
    Originally, a trapdoor and ladder would have been used to access the lower areas, which would have been used for
    storing ammunition and other supplies.
</p>

<p>
    <i>
        Sources: Wish Tower Conservation and Management Plan (Wish Tower Friends, ExtraVerte Community Projects),
        Historic England List Entry
    </i>
</p>
EOT
,
"../roomChoice.html",
"../",
[["Upstairs to Roof", "top.php"], ["Downstairs to Basement", "bottom.php"], ["Outside", "outside.php"]]
);
?>