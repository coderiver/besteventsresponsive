<?php
if(!isset($_GET['name'])){$current_name_lat='main';}
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
<link href="/css/style.css?123" rel="stylesheet" type="text/css">
<link href="/css/responsive.css" rel="stylesheet" type="text/css">
<link rel="canonical" href="<?php echo htmlspecialchars(($_SERVER['HTTPS']? 'https://': 'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>">
	<!--[if lt IE 9]>
	<link href="css/style_ie.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<script type="text/javascript" src="/js/jquery-1.4.4.min.js"></script>
    <!--for_bg-->
	<script type="text/javascript" src="/js/my_scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			addDataNumberImg(bgConteiner);
			$(bgConteiner).children('img:first').addClass('last_img');
			$('#cont_button > div').click(function(){
				if( !$(this).hasClass('active') && !$(bgConteiner).data('animate') ){
					$('#cont_button > .active').removeClass('active');
					$(this).addClass('active');
					clickNextSlide(bgConteiner, $('#cont_button > div').index(this), 500);
				}
			});
		});
		$(window).load(function(){
			setHeightImages(bgConteiner);
			$(window).resize(function(){
				setHeightImages(bgConteiner);
			});
		});
		$(window).unload(function(){
			var imgSrc = $(bgConteiner).children('img:last').attr('src');
			set_cookie ( "imgSrc", imgSrc );
		});
	</script>
    <!--click_for_bg-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('a.next').click(function(){
				if( $('#cont_button div.active').next().is('div') ){
					$('#cont_button div.active').removeClass('active').next('div').click().addClass('active');
				}
				else {
					$('#cont_button div.active').removeClass('active');
					$('#cont_button div:first').click().addClass('active');
				}
			});
			$('a.prev').click(function(){
				if( $('#cont_button div.active').prev().is('div') ){
					$('#cont_button div.active').removeClass('active').prev('div').click().addClass('active');
				}
				else {
					$('#cont_button div.active').removeClass('active');
					$('#cont_button div:last').click().addClass('active');
				}
			});
		});
	</script>
    <!--click_for_bg-->
	<script type="text/javascript">
		$(document).ready(function(){
			$('#cont_button div:first').click();
		});
	</script>
    <!--click_for_bg-->
	<script type="text/javascript"> 
		$(document).ready(function(){
			setInterval(function(){$('#cont_box a.next').click();}, 7000);
		});
    </script>
<?php include('google_counter.php'); ?>
</head>
<body>
<!-- <div style="position:fixed;background:red;width:10px;height:10px;top:0;right:0;z-index:1000;"></div> -->
    <div id="wrapper_all">
    	<?php include("header.php"); ?><!--#header-->
	    <div id="cont_box">
		    <div id="cont_button">
		    	<div><img src="/img/bg1p.jpg" width="65px" height="65px"></div>
		    	<div><img src="/img/bg2p.jpg" width="65px" height="65px"></div>
		    	<div><img src="/img/bg3p.jpg" width="65px" height="65px"></div>
		    	<div class="active first"><img src="img/bg4p.jpg" width="65px" height="65px"></div>
	            <a href="#" class="next"></a>
		    </div>
		    <div id="content">
            	<div id="wrapper_colum">
					<span id="slogan_<?php echo $lang; ?>">Мы готовы наполнить вкусом любой из ваших праздников.</span>
	                <div id="for_buttons">
	                	<?php 
  $query3="select menu_name, name_lat, max_level, id, type, page_anons from pages where location='dop_menu' and id_parent=0  and visible=1 and lang='".$lang."' order by position asc";
  //echo $query3;
  $result3 = mysql_query($query3);
  $num_results3 = mysql_num_rows($result3);
				for ($i=1; $i<=$num_results3;$i++)
		         {$row3 = mysql_fetch_array($result3);

					 $menu_name3=stripslashes($row3['menu_name']);
					 $name_lat3=stripslashes($row3['name_lat']);
					 $type=stripslashes($row3['type']);
					 $page_anons3=strip_tags(stripslashes($row3['page_anons']),"<br>");
						if($i==1){
							$page_anons3 = 'Стильное воплощение<br>Ваших идей';
						}
  					 $id3=intval($row3['id']);
  					 $max_level=intval($row3['max_level']);
					 $link=$lang_link.'/'.$name_lat3.'/';
					 if($name_lat3=='main'){$link='/';}
					 //if($name_lat3=='contacts'){$link='#contacts';}
					 ?>
                        <div><a href="<?=$link;?>" class="button_<?=$name_lat3;?> <?php if($top_parent_id==$id3) echo "active"; ?>"><?=$menu_name3;?></a><p style="text-align:center"><span class="marker"><span class="marker"><span class="marker"><?=$page_anons3;?></span></span></span></p></div>
                     <?php } ?>   
	                </div><!--for_buttons-->
                    
                    <?php if($page_text){ ?>
                    <div id="seo_txt">
                        <?=$page_text;?>
                    </div><!--seo_txt-->
                    <?php } ?>
                </div><!--wrapper_colum-->
		    </div>
			<?php /* if($lang == "ru") { ?><a class="main_banner" href="company/fashion_party/"><img src="img/food_banner.gif"></a> <?php } */ ?>
			<!--content-->
            <div class="clear"></div>
			<!--infoblock-->
			<?php
			$infoblock = mysql_query("select * from blocks where name_lat='text_at_main_".$lang."';");
			$infoblockrow = mysql_fetch_array($infoblock);
			if ($infoblockrow['visible'] == 1){ ?>
				<div id="main-text" style="height: 114px;">
					<div class="open-close" onclick="openClose('main-text');">
						v
					</div>
					<?php echo stripslashes($infoblockrow['text']); ?>
				</div>
				<script type="text/javascript">
				function openClose (id) {
					var div = document.getElementById(id);
					if (div.style.height == '114px') {
						$(div).animate({height: $(div)[0].scrollHeight}, 200);
					} else {
						$(div).animate({height: 114}, 200);
					}
				}
				</script>
			<?php } ?>
			<!--/infoblock-->
	    </div><!--cont_box-->
        <div class="clear"></div>
    </div><!--wrapper_all-->
    <div class="clear"></div>
	<?php include('footer.php'); ?><!--#footer-->
<?php include('yandex_metrika.php'); ?>
</body>
</html>