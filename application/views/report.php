<?php include('header.php');?> 
<div class="jumbotron">
  <h1 class="display-4">Let's talk progress!🎉</h1>
  <hr class="my-4">
  <p class="lead">Here goes the list of movies you managed to watch this month😉👏</p>
</div>
	<div class="container">
		<br>
		
		<table class="table table-hover">
		<thead>
			<tr class="table-info">
				<th scope="col">Movie</th>
				<th scope="col">Genre</th>
                <th scope="col">Status</th>
                <th scope="col">Added Timestamp</th>
				<th scope="col">Watched Timestamp</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($data as $row){
					echo "<tr>";
					echo "<td>".$row->TITLE."</td>";
					echo "<td>".$row->GENRE."</td>";
					echo "<td>".$row->STATUS."</td>";
					echo "<td>".$row->ADDED_DATE."</td>";
					echo "<td>".$row->WATCHED_DATE."</td>";
				}
			?>
			</tr>
		</tbody>
		</table> 
	</div>
<?php include('footer.php');?> 
