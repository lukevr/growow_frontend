<?php
    require_once "translations.php";
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
	<title>Preliminar registration</title>

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

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/page_log_reg_v2.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">

    <!-- Sky forms initialisation-->
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/sky-forms/css/sky-forms.css">
    <link rel="stylesheet" href="assets/plugins/sky-forms-pro/sky-forms/custom/custom-sky-forms.css">
</head>

<body>
	<!--=== Content Part ===-->
	<div class="container">
        <a href="?lang=ru" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Рус</a>
        <a href="?lang=ua" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Укр</a>
        <a href="?lang=eng" class="btn-u btn-brd btn-brd-width-1 btn-brd-hover btn-u-light btn-u-block rounded-2x margin-right-2">Eng</a>
		<!--Reg Block-->
		<div class="reg-block">
			<div class="reg-block-header">
				<h2><?php getLoc('User preregistration');?></h2>
                <p><?php getLoc('All fields are required');?></p>
                <p><?php getLoc('No data will be shared to 3rd party');?></p>
			</div>
            <form class="cmxform" id="regform" method="post" action="sendform.php">
                <!--<div class="margin-bottom-5">-->
                    <!--<div class="input-group form-group form-control">-->
                        <!--<label>I want to register as:</label>-->
                            <!--<p><label><input type="checkbox"> User. I want to grow my vegetables</label></p>-->
                            <!--<label><input type="checkbox"> Farmer. I have farm.</label>-->
                    <!--</div>-->
                <!--</div>-->
                <input hidden type="text" name="usertype" value="USER">
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input type="text" name="username" id="username" class="form-control" placeholder="<?php getLoc('Name');?>" required>
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="<?php getLoc('Email');?>" required>
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="<?php getLoc('Phone');?>">
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                    <input type="text" name="country" id="country" class="form-control" placeholder="<?php getLoc('Country');?>" required>
                </div>
                <div class="input-group margin-bottom-20">
                    <span class="input-group-addon"><i class="fa fa-home"></i></span>
                    <input name="city" id="city" type="text" class="form-control" placeholder="<?php getLoc('City, village');?> " required>
                </div>
                <hr>

<!--                <div class="checkbox">-->
<!--                    <label>-->
<!--                        <input type="checkbox" id="agree" name="agree" required>-->
<!--                        I read <a target="_blank" href="terms.html">Terms and Conditions</a>-->
<!--                    </label>-->
<!--                </div>-->

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <button type="submit" class="btn-u btn-block"><?php getLoc("Register");?></button>
                    </div>
                </div>
            </form>
            <script>$("#regform").validate()</script>
		</div>
		<!--End Reg Block-->
	</div><!--/container-->
	<!--=== End Content Part ===-->

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
	<script type="text/javascript" src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
    <!--SkyForms-->
    <script src="assets/plugins/sky-forms-pro/sky-forms/js/jquery.maskedinput.min.js"></script>
    <script src="assets/plugins/sky-forms-pro/sky-forms/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/sky-forms-pro/sky-forms/js/jquery.validate.min.js"></script>
    <!--[if lt IE 9]>
    <script src="assets/plugins/sky-forms-pro/sky-forms/js/sky-forms-ie8.js"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="assets/plugins/sky-forms-pro/sky-forms/js/jquery.placeholder.min.js"></script>
    <![endif]-->

    <!-- JS Customization -->
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
            Validation.initValidation();
        });
	</script>
	<script type="text/javascript">
		$.backstretch([
			"assets/img/bg/19.jpg",
			"assets/img/bg/18.jpg",
			], {
				fade: 1000,
				duration: 7000
			});
	</script>

    <!--SkyForms-->
    <!-- For Masking -->
    <script src="assets/js/plugins/masking.js"></script>
    <!-- For Datepicker -->
    <script src="assets/js/plugins/datepicker.js"></script>
    <!-- For Validation -->
    <script src="assets/js/plugins/validation.js"></script>

<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->

</body>
</html>
