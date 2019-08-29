<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Login :: w3layouts</title>
<base href="<?php echo base_url(); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="public/vendors/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="public/vendors/css/style.css" rel='stylesheet' type='text/css' />
<link href="public/vendors/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="public/vendors/css/font.css" type="text/css"/>
<link href="public/vendors/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="public/vendors/js/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2>Sign In Now</h2>
		<span class="error-input invalid-login" style="color:red"><?php echo $this->session->userdata('INVALID_LOGIN_ATTEMPT'); ?></span>
		<form action="<?php echo base_url(); ?>store/home/index" method="post">
			
			<input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
			<span class="error-input" style="color:red"><?php echo form_error('email'); ?></span>
			
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<span class="error-input" style="color:red"><?php echo form_error('password'); ?></span>

					<div class="form-group">
		<label for="sel1">Select user type:</label>
		<select name="type" class="form-control" id="sel1" required="true">
		<option value="company">company</option>
						<option value="store">store</option>
						<option value="koisk">koisk</option>
		</select>
		</div>

		
			<span class="error-input" style="color:red"><?php echo form_error('type'); ?></span>


			<span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
		<p>Don't Have an Account ?<a href="registration.html">Create an account</a></p>
</div>
</div>
<script src="public/vendors/js/bootstrap.js"></script>
<script src="public/vendors/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="public/vendors/js/scripts.js"></script>
<script src="public/vendors/js/jquery.slimscroll.js"></script>
<script src="public/vendors/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="public/vendors/js/jquery.scrollTo.js"></script>
</body>
</html>
