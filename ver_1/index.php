<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="Nivo-Slider-master/nivo-slider.css" rel="stylesheet" type="text/css" />
<link href="Nivo-Slider-master/themes/default/default.css" rel="stylesheet" type="text/css" />
<link href="fontello/css/fontello.css" rel="stylesheet" type="text/css" />
<link href="css/fontello_custom.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="Nivo-Slider-master/jquery.nivo.slider.pack.js"></script>
<title>Monica - Hair & Beauty Supplies</title>
</head>

<body>
	<div id="wrapper">
		<header>
    		<div id="logo">
            	<a href="index.php?view=home"><img src="img/logo.png" id="logo_img" /></a>
            </div>
        	<div id="social">
            	<a href="#"><span class="icon-facebook-circled" id="icon_facebook"></span></a>
                <a href="#"><span class="icon-twitter-circled" id="icon_twitter"></span></a>
                <a href="#"><span class="icon-gplus-circled" id="icon_gplus"></span></a>
                <a href="#"><span class="icon-instagram-circled" id="icon_instagram"></span></a>
            </div>
        	<div id="nav">
            	<ul>
                	<li><a href="index.php?view=home">HOME</a></li>
                    <li><a href="index.php?view=offer">OFFER</a></li>
                    <li><a href="index.php?view=gallery">GALLERY</a></li>
                    <li><a href="index.php?view=contact">CONTACT</a></li>
                </ul>
            </div>
    	</header>
        <section>
            <div id="slider_container">
            	<div class="slider-wrapper theme-default">
                	<div id="slider" class="nivoSlider">
                    	<img src="img/slider/slide_1.PNG">
                        <img src="img/slider/slide_2.PNG">
                        <img src="img/slider/slide_3.PNG">
                        <img src="img/slider/slide_4.PNG">
                    </div>
                </div>
            </div>
            <article>
             <?php
				$view = $_GET["view"];
				switch($view){
						case home:
							include("views/home.php");
							break;
						case offer:
							include("views/offer.php");
							break;
						case gallery:
							include("views/gallery.php");
							break;
						case contact:
							include("views/contact.php");
							break;
						default:
							include("views/home.php");
							break;
					}
			?>  
            </article>
        </section>
        <footer>
        	<p>Copyrights © 2016, designed by <a href="http://www.grzegorzbach.co.uk">Grzegorz Bach</a>.</p>
        </footer>
    </div>
</body>
</html>
