<?php 
header('Content-Type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Онлайн книжковий магазин</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templatemo_container">
    <?php
	include("menu.php");
	include("header.php");
	?>
    
    <div id="templatemo_content">
    	
        <div id="templatemo_content_left">
        	<?php
			include_once("content_left.php");
			?>
        </div> <!-- end of content left -->
        
        <div id="templatemo_content_right">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-1845532317325027";
/* banner-468 */
google_ad_slot = "6181797301";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
		<h1 align="center">Замовлення</h1>
		<h2 align="center">Готуємо разом</h2>
			<div class="content_half float_l">
				<a  rel="lightbox[portfolio]" href="images/templatemo_image_02.jpg"><img src="images/templatemo_image_02.jpg" alt="image" /></a>
            </div>
			<div>
			<font color=yellow><h2>Ціна: 182грн.</h2></font>
			</div>
       <?php
		include_once("form_zamovl.php");
		?>
	<script type="text/javascript">
		function btnClick(){
			//отримуємо всі введені значення (без перевірки на їх заповнення)
			number = document.getElementById('book-number').value
			first_name = document.getElementById('user-first-name').value
			last_name = document.getElementById('user-last-name').value
			father_name = document.getElementById('user-father-name').value
			user_address = document.getElementById('user-address').value
			delivery_type = document.getElementById('delivery-type').value
			//початкова повна сума
			total = 182
			// домножаємо на кількість
			total = total * number
			//та додаємо вартість пересилки в залежності від обраного способу
			switch(delivery_type){
				case 'novaposhta': total += 50; break;
				case 'ukrposhta': total += 35; break;
			}
			// формуємо повідомлення 
			msg = 'Шановний, ' + first_name + ' ' + father_name + '!<br>Повна вартість Вашого замовлення складає ' + total + ' грн.<br>Дякуємо, що Ви з нами!'
			// та виводимо його в innerHTML (щоб тег BR інтерпретувався як тег, а не як частина тексту)
			document.getElementById('result').innerHTML = msg
		}
	</script>
   <div class="cleaner_with_height">&nbsp;</div>
            
            <a href="subpage.php"><img src="images/templatemo_ads.jpg" alt="ads" /></a>
        </div> <!-- end of content right -->
    
    	<div class="cleaner_with_height">&nbsp;</div>
    </div> <!-- end of content -->
    
      <div id="templatemo_footer">
	       <a href="index.php">Домашня сторінка</a> | <a href="index.php">Пошук</a> | <a href="#">Зв'язатися з нами</a><br />
        Copyright © 2016 <a href="#"><strong>Books Company</strong></a> 
	</div> <!-- end of footer -->
</div> <!-- end of container --></body>
</html>