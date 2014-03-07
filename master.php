<html>
    <head>
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
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47120707-1', 'rainmassage.org');
  ga('send', 'pageview');

</script>
    </body>
</html>