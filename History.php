<?php
$title = "History";
//head includes
ob_start();
?>
<style type="text/css">
    #historyLink{
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

<div id="bio" >
    <img src="images/madison.jpg" style="float:left;margin-right:20px;"/>
    <h1>History</h1>
    <p>
        Madison became interested in Massage in her high school years. She had a gift for memorizing things such as 
        bones, muscles, and other anatomy related topics. Without really knowing what she wanted to do in life, 
        she had intended to pursue her love for horses and move far away to horse country. 
        However, with some gentle encouragement from her mother, she decided to pursue massage therapy.
    </p>
    <p>
        Madison graduated high school a semester early and quickly enrolled in massage school. 
        She completed massage program in a little under 8 months, acquiring 750 hours of book experience and 
        hands-on training. She graduated with a 3.9 GPA. After spending several months preparing, 
        Madison scheduled her licensing exam and passed, becoming a licensed massage therapist. 
    </p>
    <p>
        She has been working locally with some surrounding spas and resorts within Pike and Wayne county Pennsylvania.
        Madison spent a short time working as an intern with a local chiropractor, but she had a desire to 
        focus on personal clients and being able to do her own scheduling, different types of therapies, 
        and be able to coordinate with clients' personal lives on a day to day basis. 
    </p>
    <p>
        Madison has a passion for massage and differing types of therapy. She uses Lotions, creams and gels 
        from <a href='http://www.natural-formulations.com/'>Natural Formulations Company</a>, 
        which contain all natural ingredients and some certified organic products. 
        She strives to make massage as therapeutic as possible and is not driven by making money but by helping 
        people have a better quality of life.
    </p>

</div>

<?php
$bodyContents = ob_get_contents();
ob_end_clean();
//apply the layout
include("master.php");
?>