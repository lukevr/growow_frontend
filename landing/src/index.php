<?php
    require_once "translations.php";
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>GroWOW - Live happy farming online</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-v6.css">
	<link rel="stylesheet" href="assets/css/footers/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/sliding-panel/style.css">
	<link rel="stylesheet" href="assets/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
	<link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
	<link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
</head>

<body class="header-fixed promo-padding-top sliding-panel-ini sliding-panel-flag-right">
	<div class="wrapper">
		<!--=== Header v6 ===-->
		<div class="header-v6 header-border-bottom header-dark-dropdown header-sticky">
			<!-- Navbar -->

			<!-- End Navbar -->
		</div>
		<!--=== End Header v6 ===-->

		<!-- Promo Block -->
		<div class="promo-bg-img-v2 fullheight promo-bg-fixed">
            <a href="?lang=eng" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Eng</a>
            <a href="?lang=ua" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Укр</a>
            <a href="?lang=ru" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Рус</a>
			<div class="container valign__middle text-center" data-start="opacity: 1;" data-500="opacity: 0;">

                <h2 class="promo-text-v5 color-light animated fadeInUp wow margin-bottom-35" data-wow-duration="1.5s" data-wow-delay="1.5s">GROWOW.ORG</h2>

				<div class="margin-bottom-20">
					<a class="promo-video-icon-wrap color-light rounded-x animated fadeInUp wow cbp-lightbox" data-wow-duration="2s" data-wow-delay=".5s" data-title="Video Presentation" href="https://www.youtube.com/watch?v=iyNqgtJ1nLU&autoplay=1">
						<i class="promo-video-icon icon-control-play"></i>
					</a>
					<div id="cbp-lightbox" class="dp-none"></div>
				</div>

				<span class="promo-text-v1 color-light margin-bottom-10 animated fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="1s"><?php getLoc("LIVE HAPPY FARMING FOR EVERYBODY");?>

				</span>
                <h2 class="promo-text-v2 color-light animated fadeInUp wow margin-bottom-20" data-wow-duration="1.5s" data-wow-delay="1.5s"><?php getLoc("GROW YOUR OWN FOOD ONLINE");?>	</h2>


				<div class="animated fadeInUp wow" data-wow-duration="1.2s" data-wow-delay="2s">
                    <a href="#content" class="btn-u btn-brd btn-brd-width-2 btn-brd-hover btn-u-light btn-u-block rounded-4x margin-right-10"><?php getLoc("Learn More");?></a><br/><br/>
                    <a href="reguser.php" class="btn-u btn-brd btn-brd-width-2 btn-brd-hover btn-u-light btn-u-block rounded-4x margin-right-10"><?php getLoc("Preregister user");?> </a>
                    <a href="regfarmer.php" class="btn-u btn-brd btn-brd-width-2 btn-brd-hover btn-u-light btn-u-block rounded-4x margin-right-10"><?php getLoc("Preregister farmer");?></a>
				</div>
			</div>
		</div>
		<!-- End Promo Block -->

        <!--=== Preregister Block v6 ===-->
<!--        <a name="content"></a>-->
        <div class="container content-sm">
            <div class="headline-center margin-bottom-30">
                <h2 id="content"><?php getLoc("PREREGISTER TODAY");?></h2>
            </div>
            <div class="row service-block-v6">
                <div class="col-md-6 md-margin-bottom-50">
                    <i class="icon-custom rounded-x icon-color-u icon-line icon-magic-wand"></i>
                    <div class="service-desc">
                        <h2><?php getLoc("Preregistered users");?></h2>
                        <p><?php getLoc("On service launch choosen winners from preregistered users will receive 3 month subscriptions for the service.");?></p>
                        <a href="reguser.php"><?php getLoc("Preregister user");?></a>
                    </div>
                </div>
                <div class="col-md-6 md-margin-bottom-50">
                    <i class="icon-custom rounded-x icon-color-u icon-line icon-magic-wand"></i>
                    <div class="service-desc">
                        <h2><?php getLoc("Preregistered farmers");?></h2>
                        <p><?php getLoc("On service launch choosen winners from preregistered farmers will receive free hardware boxes to equip farm field.");?></p>
                        <a href="regfarmer.php"><?php getLoc("Preregister farmer");?></a>
                    </div>
                </div>
            </div><!--/end row-->
        </div>
        <!--=== Preregister Block v6 ===-->

		<!--=== Content Part ===-->
		<div class="content-md">
			<div class="container bg-color-light">
                <br><br><br>
				<!-- Service Box -->
				<div class="row text-center margin-bottom-60">
					<div class="col-md-4 md-margin-bottom-50">
						<img alt="" src="assets/img/icons/flat/02.png" class="image-md margin-bottom-20">
						<h1 class="title-v3-md margin-bottom-10"><?php getLoc("Unique technology");?></h1>
						<p><b>GroWOW</b> <?php getLoc("solution allows farmers to establish own cloud farm and find clients around it");?></p>
					</div>
					<div class="col-md-4 flat-service md-margin-bottom-50">
						<img alt="" src="assets/img/icons/flat/02.png" class="image-md margin-bottom-20">
						<h2 class="title-v3-md margin-bottom-10"><?php getLoc("Attractive experience");?></h2>
						<p><b>GroWOW</b> <?php getLoc("mobile applications provide extraordinary farming platform and gameplay for clients");?></p>
					</div>
					<div class="col-md-4 flat-service">
						<img alt="" src="assets/img/icons/flat/02.png" class="image-md margin-bottom-20">
						<h2 class="title-v3-md margin-bottom-10"><?php getLoc("Healthy harvest");?></h2>
						<p><b>GroWOW</b> <?php getLoc("brings a new value for veggies as a specially grown food for you and your family");?></p>
					</div>
				</div>
				<!-- End Service Box -->
			</div><!--/container -->

			<div class="container content-sm">
				<div class="headline-center margin-bottom-60">
					<h2>GroWOW <?php getLoc("Mobile Application Features");?></h2>
				<!--	<p>Integer odio ligula, tincidunt id volutpat et, imperdiet eget mi. Quisque laoreet porttitor turpis sed <a href="#">fermentum</a>. Nullam sodales blandit nisi, tristique tempor nunc hendrerit at. Sed posuere mollis orci</p> -->
				</div><!--/end Headline Center-->

				<!-- Portfolio Box -->
				<ul class="list-unstyled row portfolio-box">
					<li class="col-sm-4 md-margin-bottom-50">
						<a href="assets/img/main/scr1.png" title="Planting Field View" data-rel="gallery" class="thumbnail fancybox">
							<img alt="" src="assets/img/main/scr1.png" class="full-width img-responsive">
							<span class="rounded-x portfolio-box-in">
								<i class="icon-magnifier-add"></i>
							</span>
						</a>
						<div class="headline-left margin-bottom-10"><h3 class="headline-brd"><?php getLoc("Planting Field View");?></h3></div>
						<small class="project-tag"><i class="fa fa-tag"></i><a href="#"><?php getLoc("Technology");?></a>, <a href="#"><?php getLoc("Mobile Application");?></a></small>
					<!--	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet </p> -->
					</li>
					<li class="col-sm-4 md-margin-bottom-50">
						<a href="assets/img/main/scr2.png" title="Managing Field View" data-rel="gallery" class="thumbnail fancybox">
							<img alt="" src="assets/img/main/scr2.png" class="full-width img-responsive">
							<span class="rounded-x portfolio-box-in">
								<i class="icon-magnifier-add"></i>
							</span>
						</a>
						<div class="headline-left margin-bottom-10"><h3 class="headline-brd"><?php getLoc("Managing Field View");?></h3></div>
						<small class="project-tag"><i class="fa fa-tag"></i><a href="#"><?php getLoc("Technology");?></a>, <a href="#"><?php getLoc("Mobile Application");?></a></small>
					<!--	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet </p> -->
					</li>
					<li class="col-sm-4">
						<a href="assets/img/main/scr3.png" title="Live Stream Field View" data-rel="gallery" class="thumbnail fancybox">
							<img alt="" src="assets/img/main/scr3.png" class="full-width img-responsive">
							<span class="rounded-x portfolio-box-in">
								<i class="icon-magnifier-add"></i>
							</span>
						</a>
						<div class="headline-left margin-bottom-10"><h3 class="headline-brd"><?php getLoc("Live Stream Field View");?></h3></div>
						<small class="project-tag"><i class="fa fa-tag"></i><a href="#"><?php getLoc("Technology");?></a>, <a href="#"><?php getLoc("Mobile Application");?></a></small>
					<!--	<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet </p> -->
					</li>
				</ul>
				<!-- End Portfolio Box -->
			</div><!--/end container-->
            <!-- Video Blocks -->
            <div class="container content-sm">
                <div class="headline-center margin-bottom-60">
                    <h2>GroWOW <?php getLoc("Augmented Reality Playground");?></h2>
                    <p><?php getLoc("Yes, you will have to protect your harvest against beasts and creatures to get bonuses as additional veggies and delivery cost! ;)");?></p>
                </div><!--/end Headline Center-->


                <!-- Youtube Video -->
                <div class="col-md-12">
                    <div class="responsive-video">
                        <iframe width="100%" src="//www.youtube.com/embed/fYNyPNH-3OQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- End Youtube Video -->
            </div>
            <!-- End Video Blocks -->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
                                <?php getLoc("Contact");?>: <?php getLoc("Victor Radchenko CEO&Founder at GroWOW");?> <br>Email: <a href="mailto:info@anybiz.com" class="">victor.rko@growow.org</a><br><?php getLoc("Phone");?>: +38 068 991 09 25
							</p>
<br>
<p>
2016 &copy; <?php getLoc("All Rights Reserved");?>
</p>
						</div>

					</div>
				</div>
			</div><!--/copyright-->
	</div><!--/wrapper-->
    <!-- End Content Part -->

	<!-- Sliding Panel -->
	<div class="sliding-panel bg-color-darker">
		<div class="sliding-panel-inner sliding-panel-scrollable fullscreen">
			<ul class="sliding-navigation">
				<li><a href="index.html">Home</a></li>
				<li><a href="page_about3.html">Abour Us</a></li>
				<li><a href="page_services.html">Services</a></li>
				<li><a href="page_profile.html">Profile</a></li>
				<li><a href="blog_large_right_sidebar1.html">Blog</a></li>
				<li><a href="portfolio_3_columns_grid_text.html">Our Work</a></li>
				<li><a href="page_contact1.html">Contact Us</a></li>
			</ul>

			<h4>Contacts</h4>
			<address>
				58, Lorem Lis Street, Central Ave<br>
				New York, US<br><br>
				Phone: 938 334 6049<br>
				Fax: 938 334 6050<br><br>
				Email: <a href="mailto:#">info@htmlstream.com</a><br>
			</address>

			<ul class="list-inline social-icons-v1 social-icons-v1--dark">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>
		</div>

		<a href="javascript:void(0);" class="sliding-panel__close">Close</a>
	</div>
	<!-- End Sliding Panel -->

	<!-- JS Global Compulsory -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script src="assets/plugins/back-to-top.js"></script>
	<script src="assets/plugins/smoothScroll.js"></script>
	<script src="assets/plugins/backstretch/backstretch-ini.js"></script>
	<script src="assets/plugins/wow-animations/js/wow.min.js"></script>
	<script src="assets/plugins/skrollr/skrollr-ini.js"></script>
	<script src="assets/plugins/sliding-panel/jquery.sliding-panel.js"></script>
	<script src="assets/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="assets/plugins/jquery.parallax.js"></script>
	<script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<!-- JS Customization -->
	<script src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/plugins/fancy-box.js"></script>
	<script src="assets/js/plugins/owl-carousel.js"></script>
	<script src="assets/js/plugins/style-switcher.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			new WOW().init();
			App.initParallaxBg();
			FancyBox.initFancybox();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			$('#cbp-lightbox').cubeportfolio({});
		});
	</script>
<!--[if lt IE 9]>
		<script src="assets/plugins/respond.js"></script>
		<script src="assets/plugins/html5shiv.js"></script>
		<script src="assets/plugins/placeholder-IE-fixes.js"></script>
		<![endif]-->

        <!-- Smooth scrolling-->
        <script>
            $(function() {
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });
        </script>
	</body>
	</html>
