<?php 

if(!isset($_GET['name'])){$current_name_lat='contacts';}

include("init.php"); ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo $title; ?></title>

<meta name="keywords" content="<?php echo $keywords; ?>" />

<meta name="description" content="<?php echo $description; ?>" />

<meta http-equiv="Content-Language" content="<?=$lang;?>">

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<LINK href="/favicon.ico" type=image/x-icon rel="shortcut icon">

<LINK href="/favicon.ico" type=image/x-icon rel=icon>

	<link href="/css/style.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>

	<link href="css/style_ie.css" rel="stylesheet" type="text/css">

	<![endif]-->

	<script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>

    

    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=AIzaSyAkbeaHTwneuY6psy81NFy_VEsdhs6BibM" type="text/javascript"></script>

    <script language="Javascript" type="text/javascript" src="/js/map.js"></script>

    <style type="text/css" media="screen">

    	iframe{ vertical-align:top;}

    </style>



<?php include('google_counter.php'); ?>

</head>

<body onload="initialize()" onunload="GUnload()">

    <div id="wrapper_all">

    

    	<div id="map_canvas" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; z-index: 0;"></div>

    	<?php include("header.php"); ?><!--#header-->

        <div class="clear"></div>
        <div class="contacts_wrap"></div>
    </div><!--wrapper_all-->

    <div class="clear"></div>

	<?php include('footer.php'); ?><!--#footer-->

<?php include('yandex_metrika.php'); ?>

</body>

</html>