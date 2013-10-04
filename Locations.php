<?php
$title = "Locations";
//head includes
ob_start();
?>

<style type="text/css">
    #locationsLink{
        color:grey !important;
        text-decoration: underline !important;
        border-bottom:1px solid grey;
    }
</style>
<?php
$headContents = ob_get_contents();
ob_end_clean();
//body 
ob_start();
?>
<h1>Locations</h1>
<p>
    RAIN Massage currently provides services to:</p>
<ul>
    <li><a href="https://www.google.com/fusiontables/embedviz?q=select+col4+from+0IMZAFCwR-t7jZnVzaW9udGFibGVzOjIxMDIxNw+where+col0+%3D+'pa'+and+col2+%3D+'Pike'&viz=MAP&h=false&lat=41.1974026970661&lng=-74.98830097265625&t=1&z=9&l=col4&y=3&tmplt=3&hml=KML">Pike county</a></li>
    <li><a href="https://www.google.com/fusiontables/embedviz?q=select+col4+from+0IMZAFCwR-t7jZnVzaW9udGFibGVzOjIxMDIxNw+where+col0+%3D+'pa'+and+col2+%3D+'Wayne'&viz=MAP&h=false&lat=41.640223570431864&lng=-75.2766920859375&t=1&z=9&l=col4&y=3&tmplt=3&hml=KML">Wayne county</a></li>
    <li>Counties surrounding <a href="https://www.google.com/fusiontables/embedviz?q=select+col4+from+0IMZAFCwR-t7jZnVzaW9udGFibGVzOjIxMDIxNw+where+col0+%3D+'pa'+and+col2+%3D+'Pike'&viz=MAP&h=false&lat=41.1974026970661&lng=-74.98830097265625&t=1&z=9&l=col4&y=3&tmplt=3&hml=KML">Pike county</a></li>
</ul>
<p>
    For locations more than 25 Miles away from <a href="https://www.google.com/maps/preview?authuser=0#!q=hawley%2C+pa&data=!4m15!2m14!1m13!1s0x89c4b1b4b1fa3c51%3A0x6f0fe9702451cdc!3m8!1m3!1d26319325!2d-95.677068!3d37.0625!3m2!1i1600!2i775!4f13.1!4m2!3d41.4759224!4d-75.1821189">Hawley, PA</a>, there will be a $0.50 charge per mile OVER the 25 mile limit. 
    If you are not sure if RAIN would travel to your area, please do not hesitate to <a href="ContactUs.php">contact us</a>. 
    Arrangements can sometimes be made for farther location requests. 

</p>
<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>