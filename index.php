<?php include_once("Controller/config.php"); ?>
<!DOCTYPE html>
<html lang="en"> 

<head>

	<!-- Your Basic Site Informations -->
	<title>Final Project!Online Sports News</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="description" content="Enews is a news or magazine site template that built with very cool responsive template with clean design, fast load, seo friendly, beauty color and a slew of features." />
    <meta name="keywords" content="Site Template, News, Magazine, Portofolio, HTML, CSS, jQuery, Newsletter, PHP Contact, Subscription, Responsive, Marketing, Clean, SEO" />
    <meta name="author" content="Dots Theme" />
    
    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/theme-layout.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <noscript><link rel="stylesheet" href="css/no-js.css"></noscript> <!-- If JavaScript Disabled -->
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
    <!-- JavaScript -->
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.js'></script>
    <script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='js/jflickrfeed.min.js'></script>
    <script type='text/javascript' src='js/jquery.fitvids.min.js'></script>
    <script type='text/javascript' src='js/jquery.lazyload.mini.js'></script>
    <script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
    <script type='text/javascript' src='js/jquery.placeholder.min.js'></script>
    <script type='text/javascript' src='js/jquery.jticker.js'></script>
    <script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
    <script type='text/javascript' src='js/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/jquery.hoverdir.js'></script>
    <script type='text/javascript' src='js/modernizr.custom.js'></script>
    <script type="text/javascript" src="js/main.js"></script>
    
</head>

<body>

 <div class="theme-layout"> <!-- Stretched/Boxed Layout -->

 <div id="top-navigation">
  <div class="container">
    
   <!-- Navigation -->
    
   <!-- Search Form -->
   <form name="form-search" method="post" action="http://dotstheme.com/demo/premium/enews_responsive_news_template/html/boxed/search.html" class="form-search pull-right">
    <input type="text" name="search" placeholder="Search...." class="input-icon input-icon-search" />
   </form>
    
   <!-- Social Media -->
   <ul class="social pull-right">
    <li><a href="#" data-placement="bottom" data-original-title="Find us on LinkedIn"><img src="images/social/infocus/linkedin-logo.png" alt="LinkedIn"></a></li>
     <li><a href="#" data-placement="bottom" data-original-title="Find us on Flickr"><img src="images/social/infocus/flickr.png" alt="Flickr"></a></li>
     <li><a href="#" data-placement="bottom" data-original-title="Like us on Facebook"><img src="images/social/infocus/facebook-logo.png" alt="Facebook"></a></li>
     <li><a href="#" data-placement="bottom" data-original-title="Follow on DeviantArt"><img src="images/social/infocus/deviantart.png" alt="DeviantArt"></a></li>
    <li><a href="#" data-placement="bottom" data-original-title="Follow on Twitter"><img src="images/social/infocus/twitter.png" alt="Twitter"></a></li>
    <li><a href="#" data-placement="bottom" data-original-title="Follow on Stumbleupon"><img src="images/social/infocus/stumbleupon.png" alt="Stumbleupon"></a></li>
    <li><a href="#" data-placement="bottom" data-original-title="Call us via Skype"><img src="images/social/infocus/skype.png" alt="Skype"></a></li>
   </ul>
   
  </div> <!-- End Container -->
 </div> <!-- End Top-Navigation -->
 
 <div class="container">
  <header id="header" class="clearfix">
   
   <!-- Logo -->
   <div class="logo pull-left">
    <a href="index.html"><img src="images/logo.png" alt="Enews" /></a>
   </div>
   
   <!-- Ads -->
   <div class="ads pull-right">
    <img src="images/ads/480x80.png" alt="Ads" />
   </div>
   
  </header> <!-- End Header -->
  
  <nav id="main-navigation" class="clearfix">
   <ul>
    <li><a href="?v=home.php">Home</a></li>
    <li><a href="?o=football.php">Football<i class="arrow-main-nav"></i></a>
      <ul>
      <li><a href="?o=worldcup.php">WorldCup</a></li>
      <li><a href="?o=championleague.php">champion league</a></li>
      <li><a href="?o=europianleague.php">Europian league</a></li>
      <li><a href="?o=footballinternational.php">International</a></li>
      <li><a href="?v=footballrangking.php">Rangking</a></li>
     </ul>    
     </li>
    <li><a href="?o=cricket.php">Cricket<i class="arrow-main-nav"></i></a>
      <ul>
      <li><a href="?o=icc.php">ICC worldCup</a></li>
      <li><a href="?o=twenty20.php">ICC world Twenty20</a></li>
      <li><a href="?o=asiacup.php">Asia Cup</a></li>
      <li><a href="?o=cricketinternational.php">International</a></li>
      <li><a href="?o=ipl.php">IPL</a></li>
      <li><a href="?v=cricketrangking.php">Rangking</a></li>
     </ul>    
     </li>
    <li><a href="?o=othergames.php">Other Games <i class="arrow-main-nav"></i></a>
     <ul>
      <li><a href="?o=basketball.php">BasketBall</a></li>
      <li><a href="?o=hocky.php">Hocky</a></li>
      <li><a href="?o=golf.php">Golf</a></li>
      <li><a href="?o=race.php">race </a></li>
      <li><a href="?o=othersgame.php">others</a></li>
     </ul>
    </li>
    <li><a href="?o=celebrity.php">Celebrity</a></li>
    <li><a href="?v=live.php">Live</a></li>
    <li><a href="?o=contact.php">Contact Us </a> </li>
    <li><a href="?o=registration.php">Registration</a></li>
   </ul>
  </nav> <!-- End Main-Navigation -->
  
  <div id="highlight-posts" class="clearfix">

  <div class="row-fluid">
	<?php 
		include_once("Controller/userController.php");
	?>
  </div>


  </div>
 </div>


</body>
</html>