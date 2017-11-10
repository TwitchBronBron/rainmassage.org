<html>
    <head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-47120707-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-47120707-1');
		</script>

        <title><?php echo isset($title) ? "Rain Massage $title" : "Rain Massage Therapy"; ?></title>
        <link rel="icon" type="image/png" href="favicon.ico">
        <link href='http://fonts.googleapis.com/css?family=IM+Fell+English+SC' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lusitana' rel='stylesheet' type='text/css'>
        <?php echo isset($headContents) ? $headContents : ""; ?>

        <link rel="stylesheet" type="text/css" href="styles/style.css" /> 
    </head>
    <body>
        <div id="banner" class="stacked">
            <img src="images/flower.jpg" style="margin-top:0px"/>
            <div class="logo">
                <span style="font-size:40px; ">Rain Therapeutic Massage</span>
                <br/>
                <span>RELAXING~ATTENTIVE~INDIVIDUALLY~NATURALISTIC</span>
            </div>
        </div>

        <div id="navbar" class="stacked">
            <a id="indexLink" href="index.php">Home</a>
            <a id="historyLink" href="History.php">History</a> 
            <a id="locationsLink"  href="Locations.php">Locations</a>
            <a id="servicesLink"  href="Services.php">Services</a>
            <a id="contactUsLink" href="ContactUs.php">Contact Us</a> 
        </div>

        <div class="content stacked">
            <?php echo isset($bodyContents) ? $bodyContents : ""; ?>
        </div>
    </body>
</html>