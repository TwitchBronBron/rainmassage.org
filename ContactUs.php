<?php
$title = "Rain Massage: Contact Us";
//head includes
ob_start();
?>
<style type="text/css">
  #contactUsLink{
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
<h1>Contacting Rain Massage</h1>
Madison Plumb <br/>
Licensed Massage Therapist<br/>
<a href="tel:7173771641">717.377.1641</a><br/>
<a href="mailto:rainmassagetherapy@gmail.com">RainMassageTherapy@gmail.com</a>
<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>