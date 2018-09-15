<!DOCTYPE HTML>
<html lang="eng">
<head>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Monica Hair & Beauty Supplies</title>
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <!--Animate CSS -->
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<?php
	error_reporting(E_ALL ^ E_NOTICE);
?>

<body>
	<div class="container" id="wrapper">
    	<!-- HEADER -->
    	 <header class="container" id="header">
         	<div class="row">
            	<div class="col-xs-12 col-sm-5" id="header_left">
                	<a href="http://www.monicasupplies.co.uk">
                    	<img src="img/logo.png" alt="logo" class="img-responsive" id="logo" />
                    </a>
                </div>
                <div class="col-xs-12 col-sm-7" id="header_right">
                        <!--<div id="shop" class="pull-right">
                            <div class="shop_buttons">
                                <button class="btn btn-success btn_login disabled">Log In</button>
                                <button class="btn btn-danger btn_register disabled">Register</button>
                            </div>
                            <div class="shop_cart">
                                <span class="glyphicon glyphicon-shopping-cart" id="shopping_cart"></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>-->
                </div>
            </div>
         </header>
         
         <!-- NAVIGATION -->
         <nav class="container" id="navigation">
         	<div class="row">
            	<div class="col-xs-12 visible-xs menu_item" id="mini_menu">
                	<a href="#" class="dropdown" data-toggle="dropdown">
                    	<span class="glyphicon glyphicon-menu-hamburger"></span> Menu 
                    </a>
                    <ul class="dropdown-menu">
                    	<li><a href="index.php?view=home">Home</a></li>
                        <li><a href="index.php?view=offer">Offer</a></li>
                        <li><a href="index.php?view=gallery">Gallery</a></li>
                        <li><a href="index.php?view=contact">Contact</a></li>
                    </ul>
                    
          		</div>
                <div class="col-sm-3 hidden-xs menu_item">
                	<a href="index.php?view=home">Home</a>
                </div>
                <div class="col-sm-3 hidden-xs menu_item">
                	<a href="index.php?view=offer">Offer</a>
                </div>
                <div class="col-sm-3 hidden-xs menu_item">
                	<a href="index.php?view=gallery">Gallery</a>
                </div>
                <div class="col-sm-3 hidden-xs menu_item">
                	<a href="index.php?view=contact">Contact</a>
                </div>
            </div>
         </nav>
         
         <!-- SLIDER -->
         <section class="container" id="slider">
         	<div class="row">
            	<div class="col-xs-10 col-xs-offset-1">
                	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                      </ol>
                    
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="img/slider/slide_1.png" alt="">
                        </div>
                        <div class="item">
                          <img src="img/slider/slide_2.png" alt="">
                        </div>
                        <div class="item">
                          <img src="img/slider/slide_3.png" alt="">
                        </div>
                       
                      </div>
                    
                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
         </section>
         
         <!-- CONTENT -->
         <?php
				$view = $_GET["view"];
				switch($view){
						case home:
							include("phpviews/home.php");
							break;
						case offer:
							include("phpviews/offer.php");
							break;
						case gallery:
							include("phpviews/gallery.php");
							break;
						case contact:
							include("phpviews/contact.php");
							break;
						default:
							include("phpviews/home.php");
							break;
					}
			?>  
            </div>
         
         <!-- FOOTER --> 
         <footer class="container">
         	<div class="row">
            	<div class="col-xs-12">
         			<p>Copyrights &copy;2017, designed by <a href="http://www.grzegorzbach.co.uk">Grzegorz Bach</a>.</p>
                </div>
            </div>
         </footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
