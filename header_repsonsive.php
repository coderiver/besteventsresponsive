<style>
    #blog .interior{
        position: fixed;
        top: 190px;
        right: 5px;
        width: 36px;
        height: 218px;
        background: url(img/int_ru.png) no-repeat 0 0;
        overflow: hidden;
        text-decoration: none;
    }
    #blog a{
        text-indent: -1983em;
    }
    #slogan_ru{
        text-indent: -2000em;
    }
</style>
<div id="blog">
<!-- <a href="http://caterer.com.ua/" class="close" target="_blank" style="background:url(../img/blog_<?=$lang;?>.png) no-repeat 0px bottom;"></a> -->
<a href="http://caterer.com.ua/" target="_blank" class="open" style="background:url(../img/blog_<?=$lang;?>.png) no-repeat 0px bottom;">Блог</a>
<?
$asd = '';
if($lang=='en') {$asd='en/';}?>
<a href="http://besteventscatering.com.ua/<?=$asd?>company/interior/"  class="interior open" style="background:url(../img/int_<?=$lang;?>.png) no-repeat 0px 0;">Уникальный интерьер</a>

</div>
    	<?php if(($current_name_lat<>'contacts') and $current_name_lat<>'main'){ ?>
        <div id="bg">
        	<img src="<?=$current_background;?>" width="100%">
	        <div class="bg_title"></div>
		</div>
        <?php } ?>
        <?php if($current_name_lat=='main'){ ?>
        <div id="bg">
        	<img src="/img/body1.jpg" width="100%">
	        <div class="bg_title"></div>
        	<img src="/img/body2.jpg" width="100%">
	        <div class="bg_title"></div>
        	<?php /*?><img src="/img/body3.jpg" width="100%">
	        <div class="bg_title"></div><?php */?>
        	<img src="/img/body4.jpg" width="100%">
	        <div class="bg_title"></div>
		</div>
        <?php } ?>
		<div id="header">
			<div id="header_main">
            	<div id="lang">
                    <a <?php if($lang=='ru'){ ?>class="active"<?php } ?> href="/">RUS</a>
                    <a <?php if($lang=='en'){ ?>class="active"<?php } ?> href="/en/">ENG</a>
                </div><!--lang-->
                <div id="e_mail">
                    <p>e-mail: <a href="mailto:info@bec.com.ua">info@bec.com.ua</a></p>
                </div><!--e_mail-->
            	<div id="phone_soc">
                 <p><span>044</span> 561 51 51</p>
                    <a class="fb" href="http://www.facebook.com/pages/Best-Events-Catering/366591770054587" target="_blank"><i class="fa fa-facebook"></i></a>					
					<a class="gp" href="https://plus.google.com/105835030017128034600" rel="publisher" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
                <?php if($lang=='ru'){ ?>
            	<a class="header_logo" href="/"><img src="/img/besteventscatering_logo_ru.png" width="201" height="145" alt="Профессиональный кейтеринг - организация торжеств, фуршетов, банкетов в Киеве" title="Профессиональный кейтеринг - организация торжеств, фуршетов, банкетов в Киеве"></a>
                <?php }else{ ?>
            	<a class="header_logo" href="/<?=$lang;?>/"><img src="/img/logo_en.png" width="201" height="145"></a>
                <?php } ?>
                <ul>
                	<?php
                    $video_name['ru'] = 'Видео';
                    $video_name['en'] = 'Video';
  $query3="select menu_name, name_lat, max_level, id, type from pages where location='main_menu' and id_parent=0  and visible=1 and lang='".$lang."' order by position asc";
  $result3 = mysql_query($query3);
  $num_results3 = mysql_num_rows($result3);
				$k = 1;
                $cl = '';
                if($_SERVER[REQUEST_URI]=='/video.php'){$cl = ' class="active"';}
				for ($i=1; $i<=$num_results3;$i++)
		         {	 if ($k == 3) {
                    
		         	 ?>
                        <li><a href="http://www.gallery.besteventscatering.com.ua/" target="_blank"><?=$gallery_name[$lang];?></a></li>
                    	<li><a href="http://www.besteventscatering.com.ua/video.php" <?=$cl?>><?=$video_name[$lang];?></a></li>

                    <?php
                    //echo "<!-- ".$_SERVER[REQUEST_URI]."-->";
		         	 }
		         	 $row3 = mysql_fetch_array($result3);
					 $menu_name3=stripslashes($row3['menu_name']);
					 $name_lat3=stripslashes($row3['name_lat']);
					 $type=stripslashes($row3['type']);
  					 $id3=intval($row3['id']);
  					 $max_level=intval($row3['max_level']);
					 $link=$lang_link.'/'.$name_lat3.'/';
					 if($name_lat3=='main'){$link=$lang_link.'/';}
					 //if($name_lat3=='contacts'){$link='#contacts';}
					 ?>
                    <li><a <?php if($id3==$top_parent_id && $cl==''){ ?>class="active"<?php } ?> href="<?=$link;?>"><?=$menu_name3;?></a></li>
                    <?php $k++; } ?>
                </ul>
            </div>
		</div>