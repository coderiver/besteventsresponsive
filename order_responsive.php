<?php 

if(!isset($_GET['name'])){$current_name_lat='order';}

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

    <!--select-->

    

    

    <script type="text/javascript" src="/js/jquery.easing-1.3.js"></script>

<script type="text/javascript" src="/js/sexyalertbox.v1.2.jquery.js"></script>

<link rel="stylesheet" type="text/css" media="all" href="/css/sexyalertbox.css"/>

<script src="/js/jquery.validationEngine-ru.js" type="text/javascript"></script>

<script src="/js/jquery.validationEngine.js" type="text/javascript"></script>

<link rel="stylesheet" href="/js/validationEngine.jquery.css" type="text/css" media="screen" charset="utf-8">

  <script>

   $(document).ready(function() {

    $("#order_form").validationEngine()

   })

  </script>

<?php if((isset($_POST['fio'])) and (isset($_POST['tel']))){ 



/*$event_name=$_POST['event_name']; $event_name=$event_name=='Вид мероприятия: Банкет, фуршет, барбекю, частный праздник, кофе-брейк'?'---':$_POST['event_name'];

$event_place=$_POST['event_place']; $event_place=$event_place=='Место проведения'?'---':$_POST['event_place'];

$guests_quantity=$_POST['guests_quantity']; $guests_quantity=$guests_quantity=='Кол. гостей'?'---':$_POST['guests_quantity'];

$event_date=$_POST['day'].'.'.$_POST['month'].'.'.$_POST['year'];

*/

$company_name=$_POST['company_name']; $company_name=$company_name=='Название компании'?'---':$_POST['company_name'];

$fio=$_POST['fio']; $fio=$fio=='Фамилия, имя'?'---':$_POST['fio'];

$tel=$_POST['tel']; $tel=$tel=='Телефон'?'---':$_POST['tel'];

$email=$_POST['email']; $tel=$tel=='E-mail'?'---':$_POST['email'];

$comments=$_POST['comments']; $comments=$comments=='Дополнительные пожелания'?'---':$_POST['comments'];



$subject = 'Заказ с сайта'; 

// тема письма 



$message = "---Контактные данные---



Название компании: ".$company_name."

Фамилия, имя: ".$fio."

Телефон: ".$tel."

E-mail: ".$email."



---Дополнительные пожелания---

".$comments;



$boundary = "--".md5(uniqid(time())); 

// генерируем разделитель 

$mailheaders = "MIME-Version: 1.0\n"; 

$mailheaders .="Content-Type: multipart/mixed; boundary=".$boundary."\n"; 

// разделитель указывается в заголовке в параметре boundary 



$mailheaders .= "From: bec.com.ua <".$message_email.">\r\n"; 

$mailheaders .= "Reply-To: noreply@bec.com.ua\r\n"; 





$multipart = "--$boundary\n"; 

$multipart .= "Content-Type: text/plain; charset=utf8\n\n"; 

$multipart .= "$message\n\n"; 



// первая часть само сообщение

//if(mail('yurgengol@yandex.ru',$subject,$multipart,$mailheaders)) {

if(mail('besteventsc@gmail.com',$subject,$multipart,$mailheaders)) {

	 	

	?>

<script type="text/javascript">

$(document).ready(function(){Sexy.alert('<?=$form['message_sent'][$lang];?>');return false;});

</script>



 

<?php } } ?> 



    

    

    <link href="/js/form-kit/css/style.css" media="screen" rel="stylesheet" type="text/css"/>

    <link href="/js/form-kit/css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="/js/form-kit/js/jquery.tools.js"></script>

    <script type="text/javascript" src="/js/form-kit/js/jquery.uniform.min.js"></script>

    <script type="text/javascript" src="/js/form-kit/js/main.js"></script>

    <!--val-->

	<script type="text/javascript">

		$(document).ready(function(){

			$('input[type=text], textarea').focus(function(){

				if(this.value == this.defaultValue)

					this.value = '';

			});

			$('input[type=text], textarea').blur(function(){

				if($(this).val() == '')

					this.value = this.defaultValue;

			});

		});

	</script>

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

						<div id="text">

                        	<div class="page_name"><h1><?=$page_name;?></h1></div>



                            <form id="order_form" action="" method="post" name="contact" enctype="multipart/form-data">

                            	

                            	<div><input type="text" name="company_name" value="<?=$form['company'][$lang];?>"></div>

                            	<div><input type="text" name="fio" id="fio" value="<?=$form['name'][$lang];?>"></div>

                            	<div><input type="text" name="tel" id="tel" value="<?=$form['tel'][$lang];?>"></div>

                            	<?php /*?><div><input type="text" name="mob_tel" id="mob_tel" value="Мобильный телефон"></div><?php */?>

                            	<div><input type="text" name="email" id="email" value="<?=$form['email'][$lang];?>"></div>

                            	<div><textarea name="comments"><?=$form['message'][$lang];?></textarea></div>

                            	<input type="submit" value="<?=$form['send'][$lang];?>" onclick="_gaq.push(['_trackPageview', '/goal/send']);">

                            </form>

	                    </div><!--text-->

	                </div><!--right_colum-->

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