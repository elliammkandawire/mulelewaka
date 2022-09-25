<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url() ?>assets/media/logo.png">
	<title>Mulelewaka Foundation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		.login-form {
			width: 340px;
			margin: 50px auto;
		}
		.login-form section {
			margin-bottom: 15px;
			background: #f7f7f7;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			padding: 30px;
		}
		.login-form h2 {
			margin: 0 0 15px;
		}
		.form-control, .btn {
			min-height: 38px;
			border-radius: 2px;
		}
		.btn {
			font-size: 15px;
			font-weight: bold;
		}
		body {
			background: url(img/bg2.jpg) no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style>
</head>
<body>
<div class="login-form">
	<section>
		<h1 class="page-header text-center">
			<img class="img-avatar img-avatar48 img-avatar-thumb" src="<?php echo base_url() ?>images/logo.png" alt="" style="object-fit: cover; height: 50px;">
		</h1>
		<?php  echo form_open('user/login', array('role'=>'form')); ?>
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Username" name="email" required="required" id="username">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" name="password" required="required" id="password">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block" onclick="login()">Log in</button>
			</div>
			<div class="clearfix">
				<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
				<a href="#" class="pull-right">Forgot Password?</a>
			</div>
		<?php echo form_close(); ?>
		<?php
		if($this->session->flashdata('error')){
			?>
			<div class="alert alert-danger text-center" style="margin-top:20px;">
				<?php echo $this->session->flashdata('error'); ?>
			</div>
			<?php
		}
		?>
	</section>
	<p class="text-center"><a href="#">&copy; Mulelewaka Foundation <?php echo date("Y"); ?></a></p>
</div>
</body>
</html>
