<?php
$title = "Services";
//head includes
ob_start();
?>

<style type="text/css">
    #servicesLink{
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
<h1>Services</h1>
<p>
    We currently offer the following services:
</p>
<p>
    <b>30 Minute Swedish Massage: $35.00 </b>
    <br/>
    A 30 minute Swedish Massage can be either a full body massage 
    or a focused area massage, focusing on the back, arms, legs front and back, neck,
    shoulders, hands, feet, glutes or abdominal muscles. The focused area massage is designed to
    release tension in any part of the body that is irritated, 
    tense, tight, or is simply in need of special attention. 
</p>
<p>
    <b>60 Minute Swedish Massage:  $60.00</b>
    <br/>
    A 60 Minute Swedish Massage generally consists of 
    the face, neck, shoulders, arms, hands, legs front and back, glutes, back, feet, and 
    sometimes a scalp massage depending on preference. Abdominal muscles can be included per 
    request. 
</p>
<p>
    <b>90 Minute Swedish Massage: $90.00</b> 
    <br/>
    A 90 Minute Swedish Massage is an extended version of
    the 60 Minute Swedish Massage. The massage includes face, neck, shoulders, arms, hands, 
    legs front and back, glutes, back, feet, and a scalp massage depending on preference. 
    Abdominal Muscles can be included per request. With a 90 Minute Swedish Massage, the muscles
    endure and experience a longer time period allowing for a deep relaxation or deep therapeutic 
    relief massage. 
</p>
<p>
    <b>Special Attention Massage: $1 Per Minute of Massage.
        (Massages under 40 Minutes will be charged a service fee of $5.00, 
        unless more than one massage is being given to multiple people at one location) 
    </b>
    <br/>Special Attention Massage is helpful when you are pressed for time and only have 40-45 minutes 
    to spare instead of the full hour. With this massage, you can focus on one arm, 
    one leg, the back, the neck, the hands, the feet, the calves, the thighs, or the
    whole body. It is entirely up to you. 
</p>
<p>
    <b>Couples' Teaching Massage</b><br/>
    More information coming soon.
</p>

<br/>
<p>
    <b>*NOTE: </b>Due to the individuality of the individual's build, muscles, and therapy goals. 
    Special attention can be paid to any of the muscles listed above in order to provide a better 
    therapeutic massage experience as well as to provide release of tensed muscles needing more time. 
    Any part of any massage can be omitted per request. 

</p>

<p>
    For locations more than 25 Miles away from <a href="https://www.google.com/maps/preview?authuser=0#!q=hawley%2C+pa&data=!4m15!2m14!1m13!1s0x89c4b1b4b1fa3c51%3A0x6f0fe9702451cdc!3m8!1m3!1d26319325!2d-95.677068!3d37.0625!3m2!1i1600!2i775!4f13.1!4m2!3d41.4759224!4d-75.1821189">Hawley, PA</a>, there will be a $0.30 charge per mile OVER the 25 mile limit. 
    If you are not sure if RAIN would travel to your area, please do not hesitate to <a href="ContactUs.php">contact us</a>. 
    Arrangements can sometimes be made for farther location requests. 

</p>
<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>