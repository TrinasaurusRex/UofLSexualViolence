<?php include('functions.php'); ?>

<!DOCTYPE html>
<html>
	<head>
    
		<title><?php echo do_html_title($the_title); ?></title>
    <link rel="icon" href="img/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Economica' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
	</head>
    <body>
      <div id='wrapper'>
<div class="sidenav">
      <div id="logo">
        <a href="index.php"><img src="img/logo.png" alt"logo" width="75%"></img></a>
      </div>
      <ul class="navtitles"> 
      <br>   
          <li><a href="stats.php" class="stats <? echo $active_page; ?>">Statistics</a></li>
          <li><a href="help.php" class="help <? echo $active_page; ?>">"Help! I..."</a></li>   
          <li><a href="resources.php" class="resources <? echo $active_page; ?>">Resources</a></li>
      </ul>
      <div id="contact">
        <ul id="socialmedia">
          <li>Contact us!</li>
            <!-- <li><img src="img/facebook.png" alt"facebook"> <img src="img/twitter.png" alt"twitter"> <img src="img/instagram.png" alt"instagram"></li> -->
            <li>contact@uoflsexualviolence.com</li>
        </ul>
      </div>
</div>

    
	<?php echo $the_content; ?>
  
  </div>
  </body>
</html>