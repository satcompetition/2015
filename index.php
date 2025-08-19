<?php
$cat="welcome";
if (isset($_GET["cat"])) {
  $cat=$_GET["cat"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SAT-Race 2015</title>
<link rel="stylesheet" href="main.css" type="text/css">
<link rel="icon" type="image/x-icon" href="doge2.ico">
<!--<link rel="icon" type="image/x-icon" href="favicon.ico">-->
</head>
<body>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61669812-1', 'auto');
  ga('send', 'pageview');

</script>
<div class="main">
  
  <div class="navigation">
    <a href="index.php">
      <img src="evoe7260-450.png" border="0" width="180" alt="SAT-Race Logo">
    </a>
    <h3>SAT-Race 2015</h3>
    <a href="index.php" <?php if ($cat == "welcome") echo "class='active'"; ?>>Overview</a><br>
    <a href="index.php?cat=rules" <?php if ($cat == "rules") echo "class='active'"; ?>>Rules & Instructions</a><br>
    <a href="index.php?cat=organizers" <?php if ($cat == "organizers") echo "class='active'"; ?>>Organizers</a><br>
    <a href="index.php?cat=solvers" <?php if ($cat == "solvers") echo "class='active'"; ?>>Solvers</a><br>
    <a href="index.php?cat=results" <?php if ($cat == "results") echo "class='active'"; ?>>Results</a><br>
    <a href="index.php?cat=downloads" <?php if ($cat == "downloads") echo "class='active'"; ?>>Downloads</a><br>
    <a href="index.php?cat=related" <?php if ($cat == "related") echo "class='active'"; ?>>Related Events</a><br>
  </div>

  <div class="content">
    <h1>SAT-Race 2015</h1>
    <?php
    $cats = array(
      "welcome", "rules", "organizers", "solvers", 
      "results", "downloads", "related"
    );

    if (in_array($cat, $cats)) {
      include($cat.".html");
    } else {
      include("welcome.html");
    }
    ?>
  </div>
    
</div>

</body>
</html>
