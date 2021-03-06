<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?php base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php base_url();?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?php base_url();?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?php base_url();?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?php base_url();?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php base_url();?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php base_url();?>assets/img/favicon.png">
	<script type="text/javascript" src="<?php base_url();?>assets/vendor/jquery/js/jquery.js"></script>
	<script type="text/javascript" src="<?php base_url();?>assets/vendor/bootstrap/js/bootstrap.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" action="<?php echo base_url();?>index.php/Login/proses" method="POST">
								<?php if ($this->session->flashdata('result_login')!=null): ?>
			                        <div class="alert alert-warning"><?= $this->session->flashdata('result_login');?></div>
			                    <?php endif ?>

								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" name="username_user" placeholder="Username" autofocus required>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" name="password_user" placeholder="Password" required>
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="<?php base_url();?>#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
