<html>
    <head>
        <title><?php echo isset($title) ? $title : "Rain Massage Therapy"; ?></title>
        <link href='http://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lusitana' rel='stylesheet' type='text/css'>
        <?php echo isset($headContents) ? $headContents : ""; ?>

        <link rel="stylesheet" type="text/css" href="styles/style.css" /> 
    </head>
    <body>
        <div id="navbar" class="stacked">
            <a id="indexLink" href="index.php">Home</a>
            <a id="aboutUsLink" href="AboutUs.php">About Us</a> 
            <a id="ratesLink"  href="Rates.php">Rates</a>
            <a id="contactUsLink" href="ContactUs.php">Contact Us</a> 
        </div>

        <div id="banner" style="padding:0px;position:relative;" class="stacked">
            <img src="images/flower.jpg" />
            <div id="logo">
                <span style="font-size:40px; ">Rain Therapeutic Massage</span>
                <br/>
                <span>RELAXING~ATTENTIVE~INDIVIDUALLY~NATURALISTIC</span>
            </div>
        </div>
        <div class="stacked">
            <?php echo isset($bodyContents) ? $bodyContents : ""; ?>
        </div>
    </body>
</html>