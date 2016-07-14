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
            <a href="?lang=en" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Eng</a>
            <a href="?lang=ua" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Укр</a>
            <a href="?lang=ru" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Рус</a>
			<div class="container valign__middle text-center" data-start="opacity: 1;" data-500="opacity: 0;">

                <h2 class="promo-text-v5 color-light animated fadeInUp wow margin-bottom-35" data-wow-duration="1.5s" data-wow-delay="1.5s">GROWOW <?php getLoc("AS A SERVICE - VIDEO PRESENTATION");?></h2>

				<div class="margin-bottom-20">
					<a class="promo-video-icon-wrap color-light rounded-x animated fadeInUp wow cbp-lightbox" data-wow-duration="2s" data-wow-delay=".5s" data-title="Video Presentation" href="<?php getLoc("https://www.youtube.com/watch?v=iyNqgtJ1nLU&autoplay=1&rel=0");?>">
						<i class="promo-video-icon icon-control-play"></i>
					</a>
					<div id="cbp-lightbox" class="dp-none"></div>
				</div>

				<span class="promo-text-v1 color-light margin-bottom-10 animated fadeInUp wow" data-wow-duration="1.5s" data-wow-delay="1s"><?php getLoc("LIVE HAPPY FARMING FOR EVERYBODY");?>

				</span>
                <h2 class="promo-text-v2 color-light animated fadeInUp wow margin-bottom-20" data-wow-duration="1.5s" data-wow-delay="1.5s"><?php getLoc("GROW YOUR OWN FOOD ONLINE");?>	</h2>


				<div class="animated fadeInUp wow" data-wow-duration="1.2s" data-wow-delay="2s">
                    <a href="#content" class="btn-u btn-brd btn-brd-width-2 btn-brd-hover btn-u-light btn-u-block rounded-4x margin-right-10"><?php getLoc("Learn More");?></a>
                    <a href="#register" class="btn-u btn-brd btn-brd-width-2 btn-brd-hover btn-u-light btn-u-block rounded-4x margin-right-10"><?php getLoc("Bonus For Preregistration!");?> </a>
                <!--    <a href="#register" class="btn-u btn-brd btn-brd-width-2 btn-brd-hover btn-u-light btn-u-block rounded-4x margin-right-10"><?php getLoc("Preregister farmer");?>	</a>	 -->
				</div>
			</div>
		</div>
		<!-- End Promo Block -->


		<!--=== Content Part ===-->
		<div id="content" class="content-md">
            <!-- Questions and Answers block-->
            <div class="container content">
                <!--Striped and Hover Rows-->

                <div class="headline-center margin-bottom-60">
                    <h2><?php getLoc("block.Q&A.Title");?></h2>
                    <!--	<p>Integer odio ligula, tincidunt id volutpat et, imperdiet eget mi. Quisque laoreet porttitor turpis sed <a href="#">fermentum</a>. Nullam sodales blandit nisi, tristique tempor nunc hendrerit at. Sed posuere mollis orci</p> -->
                </div><!--/end Headline Center-->
                <div class="row">
                    <!--Striped Rows-->
                    <div class="col-md-6">
                        <div class="panel panel-sea margin-bottom-40">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-edit"></i> Answers for Clients</h3>
                            </div>

                            <!--		    <div class="headline"><h2>General Questions</h2></div> -->
                            <div class="panel-group acc-v1 margin-bottom-40" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                1. <?php getLoc("CQ1");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <?php getLoc("CA1");?>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                2. <?php getLoc("CQ2");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php getLoc("CA2");?>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                3. <?php getLoc("CQ3");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                <?php getLoc("CA3");?>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                4. <?php getLoc("CQ4");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php getLoc("CA4");?>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                5. <?php getLoc("CQ5");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php getLoc("CA5");?>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                                6. <?php getLoc("CQ6");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php getLoc("CA6");?>
                                        </div>
                                    </div>
                                </div>
                                <!--
			<div class="panel panel-default">
			    <div class="panel-heading">
				<h4 class="panel-title">
				    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
					7. <?php getLoc("CQ7");?>
				    </a>
				</h4>
			    </div>
			    <div id="collapseSeven" class="panel-collapse collapse">
				<div class="panel-body">
				    <?php getLoc("CA7");?>
				</div>
			    </div>
			</div>
-->
                            </div><!--/acc-v1-->
                            <!-- End General Questions -->



                        </div>
                    </div>
                    <!--End Striped Rows-->

                    <!--Hover Rows-->
                    <div class="col-md-6">
                        <div class="panel panel-yellow margin-bottom-40">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-gear"></i> Answers for Farmers</h3>
                            </div>

                            <!--		    <div class="headline"><h2>General Questions</h2></div> -->
                            <div class="panel-group acc-v1 margin-bottom-40" id="accordion1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                                1. <?php getLoc("FQ1");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <?php getLoc("FA1");?>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                                2. <?php getLoc("FQ2");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php getLoc("FA2");?>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                                3. <?php getLoc("FQ3");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                <?php getLoc("FA3");?>
                                            </p>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                                4. <?php getLoc("FQ4");?>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <?php getLoc("FA4");?>
                                        </div>
                                    </div>
                                </div>
                                <!--
			<div class="panel panel-default">
			    <div class="panel-heading">
				<h4 class="panel-title">
				    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
					5. <?php getLoc("FQ5");?>
				    </a>
				</h4>
			    </div>
			    <div id="collapseFive1" class="panel-collapse collapse">
				<div class="panel-body">
				    <?php getLoc("FA5");?>
				</div>
			    </div>
			</div>

			<div class="panel panel-default">
			    <div class="panel-heading">
				<h4 class="panel-title">
				    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSix1">
					6. <?php getLoc("FQ6");?>
				    </a>
				</h4>
			    </div>
			    <div id="collapseSix1" class="panel-collapse collapse">
				<div class="panel-body">
				    <?php getLoc("FA6");?>
				</div>
			    </div>
			</div>

			<div class="panel panel-default">
			    <div class="panel-heading">
				<h4 class="panel-title">
				    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven1">
					7. <?php getLoc("FQ7");?>
				    </a>
				</h4>
			    </div>
			    <div id="collapseSeven1" class="panel-collapse collapse">
				<div class="panel-body">
				    <?php getLoc("FA7");?>
				</div>
			    </div>
			</div>
-->
                            </div><!--/acc-v1-->
                            <!-- End General Questions -->


                        </div>
                    </div>
                    <!--End Hover Rows-->
                </div>
                <!--End Striped and Hover Rows-->

            </div>

            <!-- End of Questions and Answers block-->

			<div class="container bg-color-light">
                <br />
				<!-- Service Box -->
				<div class="headline-center margin-bottom-60">
					<h2>GroWOW <?php getLoc("Vision and Goals");?></h2>
				<!--	<p>Integer odio ligula, tincidunt id volutpat et, imperdiet eget mi. Quisque laoreet porttitor turpis sed <a href="#">fermentum</a>. Nullam sodales blandit nisi, tristique tempor nunc hendrerit at. Sed posuere mollis orci</p> -->
				</div><!--/end Headline Center-->

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

			<div class="container content">
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
            <div class="container content">
                <div class="headline-center margin-bottom-60">
                    <h2>GroWOW <?php getLoc("Time Lapse");?></h2>
                    <p><?php getLoc("Watch and share your farm time lapse!");?></p>
                </div><!--/end Headline Center-->


                <!-- Youtube Video -->
                <div class="col-md-12">
                    <div class="responsive-video">
                        <iframe width="100%" src="//www.youtube.com/embed/b5SsCAcl3Xk?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- End Youtube Video -->
            </div>
            <!-- End Video Blocks -->


            <!-- Video Blocks -->
            <div class="container content">
                <div class="headline-center margin-bottom-60">
                    <h2>GroWOW <?php getLoc("Augmented Reality Playground");?></h2>
                    <p><?php getLoc("Yes, you will have to protect your harvest against beasts and creatures to get bonuses as additional veggies and delivery cost! ;)");?></p>
                </div><!--/end Headline Center-->


                <!-- Youtube Video -->
                <div class="col-md-12">
                    <div class="responsive-video">
                        <iframe width="100%" src="//www.youtube.com/embed/fYNyPNH-3OQ?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- End Youtube Video -->
            </div>
            <!-- End Video Blocks -->
<br />
<br />
        <!--=== Preregister Block v6 ===-->
<!--        <a name="register"></a>-->
        <div class="container bg-color-growow content">
            <div class="headline-center margin-bottom-30">
                <h2 id="register"><?php getLoc("REGISTER TODAY AND GET BONUS!");?></h2>
            </div>
            <div class="row service-block-v6">
                <div class="col-md-6 md-margin-bottom-50">
                    <i class="icon-custom rounded-x icon-color-u icon-line icon-magic-wand"></i>
                    <div class="service-desc">
                        <h2><?php getLoc("Early clients");?></h2>
                        <p><?php getLoc("On service launch choosen winners from preregistered users will receive 3 month subscriptions for the service.");?></p>
                        <a href="reguser.php"><?php getLoc("Register client");?></a>
                    </div>
                </div>
                <div class="col-md-6 md-margin-bottom-50">
                    <i class="icon-custom rounded-x icon-color-u icon-line icon-magic-wand"></i>
                    <div class="service-desc">
                        <h2><?php getLoc("Early farmers");?></h2>
                        <p><?php getLoc("On service launch choosen winners from preregistered farmers will receive free hardware boxes to equip farm field.");?></p>
                        <a href="regfarmer.php"><?php getLoc("Register farmer");?></a>
                    </div>
                </div>
            </div><!--/end row-->
        </div>
        <!--=== Preregister Block v6 ===-->
        <br />
        <!--=== Footer Version 1 ===-->
        <div class="footer-v1">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-9 md-margin-bottom-40">
                            <div class="headline">
                                <h2 class="headline"><?php getLoc("About Us");?></h2>
                            </div>
                            <!--	    <a href="index.php"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>  -->
                            <p><?php getLoc("Agriculture startup aiming to bring an new way of producing healthy food for every city resident and populate agriculture farms services worldwide.");?></p>
                            <!-- Team cards Wrap -->
                            <div class="testimonials-v6">
                                <div class="row margin-bottom-10">
                                    <div class="col-md-5 md-margin-bottom-10">
                                        <div class="testimonials-info bg-color-light">
                                            <img class="rounded-x" src="img/victor_sq.jpg" alt="">
                                            <div class="testimonials-desc bg-color-light">
                                                <span class="team-v7-name"><strong><?php getLoc("persons.Victor.Name");?></strong></span>
                                                <span class="team-v7-position"><?php getLoc("persons.Victor.Position");?></span>
                                                <a class="social-icons-v1" href="https://ua.linkedin.com/in/victorradchenko"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="testimonials-info bg-color-light"">
                                            <img class="rounded-x" src="/img/slava_sq.jpg" alt="">
                                            <div class="testimonials-desc bg-color-light"">
                                                <span class="team-v7-name"><strong><?php getLoc("persons.Slava.Name");?></strong></span>
                                                <span class="team-v7-position"><?php getLoc("persons.Slava.Position");?></span>
                                                <a class="social-icons-v1" href="https://ua.linkedin.com/in/zhelobkov"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/end row-->
                            </div>
                            <!-- End Team cards -->
                        </div><!--/col-md-3-->
                        <!-- End About -->

                        <!-- Address -->
                        <div class="col-md-3 map-img md-margin-bottom-40">
                            <div class="headline"><h2><?php getLoc("Contact Us");?></h2></div>
                            <address class="md-margin-bottom-40">
                                <?php getLoc("persons.Victor.Name"); print(" - "); getLoc("persons.Victor.Position");?> <br />
                                <?php getLoc("Kyiv, Ukraine");?> <br />
                                <?php getLoc("Phone");?>: +38 068 991 09 25 <br />
                                <?php getLoc("Email");?>: <a href="mailto:victor.rko@growow.org" class="">victor.rko@growow.org</a>
                            </address>
                        </div><!--/col-md-3-->
                        <!-- End Address -->
                    </div>
                </div><!--/footer-->

                <div class="copyright">
                    <div class="container row">
                        <div class="col-md-6">
                            <p>
                                2016 &copy; GroWOW <?php getLoc("All Rights Reserved");?>.
                                <!--	<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a> -->
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-6">
                            <ul class="footer-socials list-inline">
                                <li>
                                    <a href="https://www.facebook.com/growow/" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <!--	<li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                                </a>
                                </li>
                                -->
                                <li>
                                    <a href="https://ua.linkedin.com/in/victorradchenko" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social Links -->
                    </div>
                </div><!--/copyright-->
        </div>
        </div>
        <!--=== End Footer Version 1 ===-->
    </div>
    <!-- End Content Part -->


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
<!--
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
-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80240059-1', 'auto');
  ga('send', 'pageview');

</script>
	</body>
	</html>
