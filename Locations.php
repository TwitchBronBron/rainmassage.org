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
    RAIN Massage currently provides services to the following locations in Pennsylvania:</p>
<ul>
    <li>Lehigh County</li>
    <li>Northampton County</li>
    <li>Monroe County</li>
    <li>Bucks County</li>
    <li>Berks County</li>
</ul>
<!--<?php include("partials/LocationCharge.php"); ?>-->
<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>