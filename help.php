<?php 
include 'page_template.php';
output_gallery_page("Help", 
<<<EOT
<p>
    This is a virtual tour of the Wish Tower to aid visitors who want to learn more about the history of the
    Tower. You can click on each menu to navigate the website and check out each page, then go back to the menus
    to discover the next section. As the
    tours of the Wish Tower are run by volunteers, it is sadly not possible for them to run all-year round; this
    guide aids visitors by providing easy-to-access historical content to any internet-enabled device. All of
    our content was written
    by A-Level History Students at Eastbourne's East Sussex College Group campus, and the software and hardware
    was built by TechResort.
</p>
<u>
    <p>Technical info</p>
</u>
<p>
    This device was built by TechResort in collaboration with the Wish Tower Friends, and relies on using a
    small device called a Raspberry Pi to both act as a web server and an access point so that you can view the
    content from internet-enabled devices
    such as smartphones and tablets. It is solar powered as there is no power infrastructure in the Wish Tower
    site. This means that it is a WiFi network without external internet access but is completely secure, and
    can only access the Info-Fi
    guide.
</p>
EOT
, "index.html",
[]
);
?>
