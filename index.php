<?php
$title = "Welcome to RainMassage.org";
//head includes
ob_start();
?>
<style type="text/css">
    #indexLink{
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
<h1>Welcome to RainMassage.org</h1>
<p>This will eventually be the web page for RainMassage.org. It is currently in development. 
    In the meantime, send us an email at <a href="mailto:rainmassagetherapy@gmail.com">RainMassageTherapy@gmail.com</a>
    <br/>
    <br/>
    Thank you for visiting. Check in soon for more updates!
</p>

<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>