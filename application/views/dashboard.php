<?php
defined('BASEPATH') OR exit('NO direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>College Management System</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>

<div class="container" style="background-image: url(C:\xampp\htdocs\college\assets\images\32610.jpg);">
<h3>ADMIN DASHBOARD</h3>
<?php $user_name = $this->session->userdata('user_name');?>
<h5>Welcome <?php echo $user_name?></h5>
<?php 
					 $role_id = $this->session->userdata('role_id');
				?>
				<?php if($role_id == '1'): ?>
<?php echo anchor("admin/addCollege" ,"ADD COLLEGE",['CLASS'=>"btn btn-primary"]); ?>
<?php echo anchor("admin/addCoadmin" ,"ADD ADMIN/COADMIN",['CLASS'=>"btn btn-primary"]); ?>
<?php echo anchor("admin/addStudent" ,"ADD STUDENT",['CLASS'=>"btn btn-primary"]); ?>
<?php endif; ?>
 <hr>
 <div class="row">
 	<table class="table table-hover">
 		<thead>
 			<tr>
 				<th scope="col">ID</th>
 				<th scope="col">College Name</th>
 				<th scope="col">Username</th>
 				<th scope="col">Email</th>
 				<th scope="col">Role</th>
 				<th scope="col">Gender</th>
 				<th scope="col">Branch</th>
 				<th scope="col">Action</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php if(count($users)):?>
 		<?php foreach($users as $user):?>
 		<tr class="table-active">
 			<td><?php echo $user->user_id?></td>
 			<td><?php echo $user->collegename?></td>
 			<td><?php echo $user->user_name?></td>
 			<td><?php echo $user->email?></td>
 			<td><?php echo $user->role_name?></td>
 			<td><?php echo $user->gender?></td>
 			<td><?php echo $user->branch?></td>
 			<td><?php echo anchor("admin/viewStudents/{$user->college_id}" ,"View Students",['CLASS'=>"btn btn-primary"]); ?>
 </td>
 		</tr>
 	<?php endforeach; ?>
 <?php else: ?>
 <tr>
 	<td>No Record Found!</td>
 </tr>
 <?php endif; ?>
 		</tbody>
 		
 	</table>
 </div>	
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <!-- Bootstrap JS links -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>