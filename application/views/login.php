<div class="container">
<?php echo form_open("home_c/signin", ['class' => 'form-horizontal']);?>
<?php if($msg = $this->session->flashdata('message'));?>
	<div class="row">
		<div class="col-md-6">
			<div class="alert alert-dismissible alert-danger">
				<?php echo $msg;?></div>
		</div>
	</div>	
			<h3>ADMIN REGISTER</h3>
			<hr>
				<div class="row">
						<div class="form-group">
							<label class="col-md-3 control-label">Email</label>
						<div class="col-md-9">
							<input name='email' class='form-control' placeholder='Email'>
						</div>
						<div class="col-md-6">
							<?php echo form_error('email','<div class="text-danger">','</div>');?>
						</div>

							<label class="col-md-3 control-label">Password</label>
							<div class="col-md-9">
								<input type="password" name="password" class="form-control" placeholder="Password" >
							</div>
							<div class="col-md-6">
							<?php echo form_error('password','<div class="text-danger">','</div>');?>
						</div>
				


				<button type="submit" class="btn btn-primary">LOGIN</button>
			<?php echo anchor("home_c","BACK" , ['class'=>'btn btn-primary']);?>
	</div>
	</div>	
		
	</div>