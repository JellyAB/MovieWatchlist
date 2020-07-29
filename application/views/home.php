<?php include('header.php');?> 
<!--
-------------------------------------------------------------------------
 Header greeting
-------------------------------------------------------------------------
-->
<div class="jumbotron">
  <h1 class="display-4">Hello there, Movie maniac!🎬🎶</h1>
  <hr class="my-4">
  <p class="lead">Welcome to the world where you never forget a movie you wanna watch🤩</p>
</div>
	<div class="container">
		<br>
		<!--
		-------------------------------------------------------------------------
		Alert displaying after a movie record is deleted
		-------------------------------------------------------------------------
		-->
		<?php if($error = $this->session->flashdata('response2')):?>
			<div class="alert alert-dismissible alert-warning">
				<?php echo $error; ?>
			</div>
		<?php endif;?>
		<!--
		-------------------------------------------------------------------------
		Alert displaying after a movie is watched
		-------------------------------------------------------------------------
		-->
		<?php if($error = $this->session->flashdata('response1')):?>
			<div class="alert alert-dismissible alert-info">
				<?php echo $error; ?>
			</div>
		<?php endif;?>
		<!--
		-------------------------------------------------------------------------
		Alert displaying when a new movie added 
		-------------------------------------------------------------------------
		-->
		<?php if($error = $this->session->flashdata('response')):?>
			<div class="alert alert-dismissible alert-success">
				<?php echo $error; ?>
			</div>
		<?php endif;?>
		<div class="row">
		<!--
		-------------------------------------------------------------------------
		Two buttons - Add Movie & Monthly Report
		-------------------------------------------------------------------------
		-->
			<div class="col-lg-12">
				<?php echo anchor("createMovie",'Add Movie',['class'=>'btn btn-primary']);?>
				<?php echo anchor("viewReport",'Monthly Report',['class'=>'btn btn-outline-info']);?>
			</div>
		</div>
		<br>
		<!--
		-------------------------------------------------------------------------
		Table for displaying all movies in the database
		-------------------------------------------------------------------------
		-->
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
					/*
					---------------------------------------------------------------------------------------
					Two buttons for each row : Watched! (will update status) & Remove (will delete record)
					---------------------------------------------------------------------------------------
					*/
					echo "<td>".anchor("home/updateStatus?id=$row->ID",'Watched!',['class'=>'btn btn-success'])."</td>";
					echo "<td>".anchor("home/deleteMovie?id=$row->ID",'Remove',['class'=>'btn btn-danger'])."</td>";
				}
			?>
			</tr>
		</tbody>
		</table> 
	</div>
<?php include('footer.php');?> 
