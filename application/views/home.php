<!--<?php //include("header.php");?>-->
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container" style="background-image: url(assets/32610.jpg);">
		<div class="jumbotron">
			<h2 class="display-3" style"text-align: center;">ADMIN & CO ADMIN LOGIN</h2>
			<hr>
			<div class="my-4">
				<div class="row">
			<!--	<?php// if(count($chkAdminExist)):?>-->
			<?php if($chkAdminExist):?>
					<?php echo anchor("home_c/adminRegister", 'ADMIN REGISTER' , ['class'=> "btn btn-primary"]);?>
				<?php else:?>
					<div class="col-lg-4">
						<?php echo anchor("home_c/adminRegister", 'ADMIN REGISTER' , ['class'=> "btn btn-primary"]);?>

					</div>

				<?php endif;?>
					<div class="col-lg-4">
						<a href= "home_c/login" class="btn btn-primary">ADMIN LOGIN</a>
					</div>

				</div>
			</div>

		</div>
		
	</div>
</body>
</html>

	

