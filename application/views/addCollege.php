<div class="container">
<?php echo form_open("admin/createCollege", ['class' => 'form-horizontal']);?>
<?php if($msg = $this->session->flashdata('message'));?>
	<div class="row">
		<div class="col-md-6">
			<div class="alert alert-dismissible alert-danger">
				<?php echo $msg;?></div>
		</div>
	</div>	
			<h3>ADD COLLEGE</h3>
			<hr>
				<div class="row">
						<div class="form-group">
							<label class="col-md-3 control-label">College Name</label>
						<div class="col-md-9">
							<input name='collegename' class='form-control' placeholder='College Name'>
						</div>
						<div class="col-md-6">
							<?php echo form_error('collegename','<div class="text-danger">','</div>');?>
						</div>

							<label class="col-md-3 control-label">Branch</label>
							<div class="col-md-9">
								<input  name="branch" class="form-control" placeholder="Branch" >
							</div>
							<div class="col-md-6">
							<?php echo form_error('branch','<div class="text-danger">','</div>');?>
						</div>
				


				<button type="submit" class="btn btn-primary">ADD</button>
			<a href="dashboard" class="btn btn-primary">BACK</a>
	</div>
	</div>	
		
	</div>