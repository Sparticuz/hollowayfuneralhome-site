<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Holloway Funeral Home</title>
<style type="text/css">
@import url("holloway.css");
</style>
<link rel="stylesheet" href="assets/css/slimbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="assets/jmootools.v1.11.js"></script>
<script type="text/javascript" src="assets/slimbox.js"></script>
<script type="text/javascript" src="assets/validate.js"></script>
<link rel="icon" type="image/png" href="/images/favicon.png" />
<!--[if IE 6]>
<style type="text/css">
/* some css fixes for IE browsers */
html {overflow-y:hidden;}
body {overflow-y:auto;}
#image {position:absolute; z-index:-1;}
#wrapper {position:static;}
</style>
<![endif]-->
</head>

<body id="body">

<div id="image"><img src="images/bg.jpg" width="100%" height="100%" alt="" /></div>
<div id="wrapper">

<div id="header">&nbsp;</div>

<div id="main">

<div id="nav">
<ul>
	<li class="home"><a href="index.php?page=home">&nbsp;</a></li>
	<li class="services"><a href="index.php?page=services">&nbsp;</a></li>
	<li class="admin"><a href="index.php?page=admin">&nbsp;</a></li>
	<li class="merch"><a href="index.php?page=merch">&nbsp;</a></li>
    <li class="contact"><a href="index.php?page=contact">&nbsp;</a></li>
</ul>
</div>

<div id="background">
<div id="content">
<?php
	$ext = '.php';
	$idx = $_REQUEST["page"];
	$idx = isset($idx) ? $idx.$ext : 'home'.$ext;
	if(file_exists($idx))
	{include $idx;}else{
	echo 'Could not include '.$idx.'! Something is either wrong with my code or wrong with your browser version, please upgrade to the latest version of your browser.';
	}
?>
</div>
<div id="bottom">&nbsp;</div>
</div>
</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-4237750-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
