<?php
$title = "Home";
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
<div id="homeBanner" class="stacked">
    <img src="images/flower.jpg" style=""/>
    <div class="logo">
        <span style="font-size:40px; ">Rain Therapeutic Massage</span>
        <br/>
        <span>RELAXING~ATTENTIVE~INDIVIDUALLY~NATURALISTIC</span>
    </div>
</div>
<h1>Welcome to RAIN Massage!</h1>
<p>
    Our goal is to make your massage as therapeutic as possible. We want to help give you a better quality of life. 
    If you are looking for a relaxing massage in the comfort of your own home then you have come to the right place.
    We use all natural creams, lotions, and gels from <a href='http://www.natural-formulations.com/'>Natural Formulations Company</a>. 
</p>
<p>
    Currently, RAIN massage is a traveling company. We come to you. It doesn't matter if the massage is 
    for you, your significant other, your friends or your coworkers. We even offer training massages for 
    you and your significant other so that you can learn how to correctly give each other a beneficial massage! 
    Check out the rest of our site to see what we have to offer.</p>

<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>