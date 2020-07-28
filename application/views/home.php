<?php include('header.php');?> 
	<div class="container">
		<br>
		<?php if($error = $this->session->flashdata('response2')):?>
			<div class="alert alert-dismissible alert-warning">
				<?php echo $error; ?>
			</div>
		<?php endif;?>
		<?php if($error = $this->session->flashdata('response1')):?>
			<div class="alert alert-dismissible alert-info">
				<?php echo $error; ?>
			</div>
		<?php endif;?>
		<?php if($error = $this->session->flashdata('response')):?>
			<div class="alert alert-dismissible alert-success">
				<?php echo $error; ?>
			</div>
		<?php endif;?>
		<div class="row">
			<div class="col-lg-12">
				<?php echo anchor("home/createMovie",'Add',['class'=>'btn btn-primary']);?>
			</div>
		</div>
		<br>
		<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">Movie</th>
				<th scope="col">Genre</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($data as $row){
					echo "<tr>";
					echo "<td>".$row->TITLE."</td>";
					echo "<td>".$row->GENRE."</td>";
					echo "<td>".$row->STATUS."</td>";
					echo "<td>".anchor("home/updateStatus?id=$row->ID",'Watched!',['class'=>'btn btn-success'])."</td>";
					echo "<td>".anchor("home/deleteMovie?id=$row->ID",'Remove',['class'=>'btn btn-danger'])."</td>";
				}
			?>
			</tr>
		</tbody>
		</table> 
	</div>
<?php include('footer.php');?> 



