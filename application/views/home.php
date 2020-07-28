<?php include('header.php');?> 
	<div class="container">
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
					echo "<td>".anchor("home/updateStatus",'Watched!',['class'=>'btn btn-success'])."</td>";
					echo "<td>".anchor("home/deleteMovie",'Remove',['class'=>'btn btn-danger'])."</td>";
				}
			?>
			</tr>
		</tbody>
		</table> 
	</div>
<?php include('footer.php');?> 



