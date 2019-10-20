<div class="container">
<?php echo form_open("admin/createCoadmin", ['class' => 'form-horizontal']);?>
<?php if($msg = $this->session->flashdata('message'));?>
	<div class="row">
		<div class="col-md-6">
			<div class="alert alert-dismissible alert-success">
				<?php echo $msg;?></div>
		</div>
	</div>	
			<h3>ADD ADMIN/COADMIN</h3>
			<hr>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-3 control-label">Username</label>
						<div class="col-md-9">
							<input name='user_name' class='form-control' placeholder='Username'>
						</div>
						<div class="col-md-6">
							<?php echo form_error('user_name','<div class="text-danger">','</div>');?>
						</div>

						<label class="col-md-3 control-label">College Name</label>
							<select class="col-md-9" name="college_id">
								<option value="">Select</option>
								<?php if(count($colleges)):?>
									<?php foreach($colleges as $college):?>
								<option value=<?php echo $college->college_id?> ><?php echo $college->collegename?></option>
								<?php endforeach; ?>
							<?php endif; ?>
							</select>
							<div class="col-md-6">
							<?php echo form_error('college_id','<div class="text-danger">','</div>');?>
						</div>



						<div class="form-group">
							<label class="col-md-3 control-label">Email</label>
						<div class="col-md-9">
							<input name='email' class='form-control' placeholder='Email'>
						</div>
						<div class="col-md-6">
							<?php echo form_error('email','<div class="text-danger">','</div>');?>
						</div>

						
							<label class="col-md-3 control-label">Gender</label>
							<select class="col-md-9" name="gender">
								<option value="">Select</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
							<div class="col-md-6">
							<?php echo form_error('gender','<div class="text-danger">','</div>');?>
							</div>
						

						
						
							<label class="col-md-3 control-label">Role</label>
							<select class="col-md-9" name="role_id">
								<option value="">Select</option>
								<?php if(count($roles)):?>
									<?php foreach($roles as $role):?>
								<option value=<?php echo $role->role_id?> ><?php echo $role->role_name?></option>
								<?php endforeach; ?>
							<?php endif; ?>
							</select>
							<div class="col-md-6">
							<?php echo form_error('role_id','<div class="text-danger">','</div>');?>
						</div>



							<label class="col-md-3 control-label">Password</label>
							<div class="col-md-9">
								<input type="password" name="password" class="form-control" placeholder="Password" >
							</div>
							<div class="col-md-6">
							<?php echo form_error('password','<div class="text-danger">','</div>');?>
						</div>



							<label class="col-md-3 control-label">Password Again</label>
							<div class="col-md-9">
								<input type='password' name="confpwd" class='form-control' placeholder="password again" >
							</div>
							<div class="col-md-6">
							<?php echo form_error('confpwd','<div class="text-danger">','</div>');?>
						</div>
				


				<button type="submit" class="btn btn-primary">ADD</button>
			<?php echo anchor("admin/dashboard","BACK" , ['class'=>'btn btn-primary']);?>
	</div>
	</div>	
		
	</div>