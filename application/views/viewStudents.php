<div class="container">
<h3>VIEW STUDENTS</h3>

 <hr>
 <!--<a href="admin/dashboard" class="btn btn-primary">BACK</a>-->
 <?php echo anchor("admin/dashboard","BACK" , ['class'=>'btn btn-primary']);?>
 <div class="row">
 	<table class="table table-hover">
 		<thead>
 			<tr>
 				
 				<th scope="col">Student Name</th>
 				<th scope="col">College Name</th>
 				<th scope="col">Subject</th>
 				<th scope="col">Email</th>
 				<th scope="col">Gender</th>
 				<th scope="col">Action</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php if(count($students)):?>
 		<?php foreach($students as $student):?>
 		<tr class="table-active">
 			<td><?php echo $student->studentname?></td>
 			<td><?php echo $student->collegename?></td>
 			<td><?php echo $student->subject?></td>
 			<td><?php echo $student->email?></td>
 			<td><?php echo $student->gender?></td>
 			
 			<td><?php echo anchor("admin/editStudent/{$student->id}" ,"Edit",['CLASS'=>"btn btn-primary"]); ?>
 				<td><?php echo anchor("admin/deleteStudent/{$student->id}" ,"Delete",['CLASS'=>"btn btn-primary"]); ?>
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