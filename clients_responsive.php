<?php 

if(!isset($_GET['name'])){$current_name_lat='clients';}

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
	<link href="/css/responsive.css" rel="stylesheet" type="text/css">

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

			//setInterval(function(){$('#cont_box a.next').click();}, 7000);

		});

    </script>

    <!--hover_uslugi-->

    <script type="text/javascript">

		$(document).ready(function(){

			$('.uslugi').each(function(){

				$(this).hover(function(){

					$(this).children('a').children('span').children('img').eq(1).fadeOut(500);	

				}, function(){

					$(this).children('a').children('span').children('img').eq(1).fadeIn(500);	

				});

			});

		});

    </script>

    <!-- karusel -->

    <script type="text/javascript" src="/js/karusel/jquery.mousewheel.min.js"></script>

    <script type="text/javascript" src="/js/karusel/jcarousellite.js"></script>

	<script type="text/javascript"> 

		$(function(){ 

			var size = $(".karusel > div li").length;

			if( size > 6 ){

				$(".karusel > div").jCarouselLite({ 

					btnNext: ".next2", 

					btnPrev: ".prev2",

					circular: false,

       				speed: 1000,

					visible: 6

				});

			} else { $('.next2, .prev2').hide(); }

			$('.next, .prev').click(function(){return false;});

		    if(!$('.karusel > div li').prev().is('*')){ $('.prev2').addClass('disabled'); }

			if(!$('.karusel > div li').next().is('*')){ $('.next2').addClass('disabled'); }

		}); 

	</script>

    <!--click_karusel_li-->

	<script type="text/javascript"> 

		$(document).ready(function(){

			$('.karusel div ul li').eq(0).addClass('active');

			

			$('.karusel div ul li').click(function(){

				 if(!$(this).hasClass('active')){

					$('.karusel div ul li.active').removeClass('active');

					$(this).addClass('active');	

				}

				return false;

			});

		}); 

	</script>

	<!-- fancy -->

	<link rel="stylesheet" type="text/css" href="/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

	<script type="text/javascript" src="/fancybox/jquery.easing-1.3.pack.js"></script>

	<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){ $(".gallery").fancybox({'padding': 0, 'scrolling':'no', 'transitionIn': 'none', 'width':'440px', 'height':'383px', 'background':'000', 'overlayOpacity':0.5, 'overlayColor':'#160a05'}); });

	</script> 

	<!--img_center-->

    <script type="text/javascript">

		$(document).ready(function(){

			$('#clients a').each(function(){

				var heightImg = $(this).children('img').height();

				var marginImg = (100-heightImg)/2;

				$(this).children('img').css({'margin-top':marginImg});

			});

		});

    </script>

    <script type="text/javascript">

  $(window).load(function(){

   //$('.clients > div > span div')

   

   $('.clients > div > span').each(function(){

    var heightImg = $(this).children('img').height();

    var topImg = (130-heightImg)/2;

    

    var widthImg = $(this).children('img').width();

    var leftImg = (130-widthImg)/2;

    

    $(this).children('img').css({'top':topImg,'left':leftImg});

    

    var posTop = $(this).children('div').height();

    $(this).children('div').css({'top':-posTop});

    

    $(this).hover(function(){

     $(this).children('div').fadeIn(500);

     $(this).children('img.bw').fadeOut(500);

    }, function(){

     $(this).children('div').fadeOut(500);

     $(this).children('img.bw').fadeIn(500);

    });

   });

  });

    </script>

<?php include('google_counter.php'); ?>

</head>

<body>

    <div id="wrapper_all">

    	<?php include("header.php"); ?><!--#header-->

	    <div id="cont_box">

		    <?php /*?><div id="cont_button">

		    	<div><img src="img/bg1p.jpg" width="65px" height="65px"></div>

		    	<div><img src="img/bg2p.jpg" width="65px" height="65px"></div>

		    	<div><img src="img/bg3p.jpg" width="65px" height="65px"></div>

		    	<div class="active first"><img src="img/bg4p.jpg" width="65px" height="65px"></div>

	            <a href="#" class="next"></a>

		    </div><?php */?>

		    <div id="content">

            	<div id="wrapper_colum">

	            	<div id="left_colum">

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

					 $page_anons3=strip_tags(stripslashes($row3['page_anons']));

  					 $id3=intval($row3['id']);

  					 $max_level=intval($row3['max_level']);

					 $link=$lang_link.'/'.$name_lat3.'/';

					 if($name_lat3=='main'){$link=$lang_link.'/';}

					 //if($name_lat3=='contacts'){$link='#contacts';}

					 ?>

                        <a href="<?=$link;?>" class="button_<?=$name_lat3;?> <?php if($top_parent_id==$id3) echo "active"; ?>"><?=$menu_name3;?></a>

                     <?php } ?>

	                </div>

	                <div id="right_colum">

						<div id="text" class="clients">

                        	<div class="page_name">

							<?php if($current_parent_id<>0){ ?><a href="<?=$lang_link.'/'.$top_parent_name_lat.'/';?>" class="bread"><?=$top_parent_menu_name;?></a> / <?php } ?>

                            <h1><?=$current_menu_name;?></h1>

                            </div>

	                        

							<div class="all_clients">

                            	<?php	 

							$results = query("select id, small, name, post, preview from personnel where id_parent='".$current_id."' order by position;");

							$countimg = mysql_num_rows($results);	

							for ($j = 1; $j <=$countimg; $j++) {	

								$row = mysql_fetch_array($results);

								$client_id[$j] = stripslashes($row['id']);

								$image[$j] = stripslashes($row['small']);

								$image_bw[$j]=$client_id[$j].'_s_bw.jpg';

								$client_name[$j] = stripslashes($row['name']);

								?>

                            	<span><img src="/files/clients/<?=$image[$j];?>"><img class="bw" src="/files/clients/<?=$image_bw[$j];?>"><div><a href="#"><?=$client_name[$j];?></a><span></span></div></span>

                                <?php /*?><a href="javascript:void(0);" style="cursor:default" title="<?=$client_name[$j];?>"><img src="/files/clients/<?=$image[$j];?>"></a><?php */?>

                                <?php } ?>

                            </div><!--clients-->

                           <?php /*?> <div id="page">

                            	<a href="#" class="active">1</a>

                            	<a href="#">2</a>

                            	<a href="#">3</a>

                            </div><?php */?>

	                    </div><!--text-->

	                </div><!--right_colum-->

                    <?php if($page_text){ ?>

                    <div id="seo_txt">

                        <?=$page_text;?>

                    </div><!--seo_txt-->

                    <?php } ?>

                </div><!--wrapper_colum-->

		    </div><!--content-->

            <div class="clear"></div>

	    </div><!--cont_box-->

        <div class="clear"></div>

    </div><!--wrapper_all-->

    <div class="clear"></div>

	<?php include('footer.php'); ?><!--#footer-->

<?php include('yandex_metrika.php'); ?>

</body>

</html>