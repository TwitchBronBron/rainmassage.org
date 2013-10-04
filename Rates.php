<?php
$title = "Rain Massage: Rates";
//head includes
ob_start();
?>

<style type="text/css">
  #ratesLink{
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
<h1>Rates</h1>
30 Minute Swedish Massage: $35.00<br/>
60 Minute Swedish Massage: $60.00<br/>
90 Minute Swedish Massage: $90.00<br/>
Specific Work Massage: $1 per minute Of Massage<br/>
<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>