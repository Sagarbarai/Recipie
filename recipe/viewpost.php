<?php

	require_once('author.php');
	include("db_connection.php"); 
	include("hi.php");

?>

<div id="mainpage" class="normalpage">
<div id="left" class="widepage">
<?php
	$query = "SELECT * FROM blog_tbl";
	$exe = mysqli_query($link, $query);
?>
<h2>Blog List: </h2>
	<table border="1" style="width:100%;">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Title</th>
		<th>Description</th>
		<th>Date</th>
		<th>Action</th>
	</tr>

		<?php
			while($row = mysqli_fetch_array($exe)){
				
				echo "<tr>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['title']."</td>";
					echo "<td>".$row['descrip']."</td>";
					echo "<td>".$row['datee']."</td>";
					echo "<td> <a href=\"deleteblog.php?id=".$row['id']."\" onClick=\"return confirm('Are you sure you want to delete?')\" >Delete</a></td>";
				echo "</tr>";
			}

		?>
	</table>
</div>
<div class="clear"></div>
</div>
<br/>
<br/>
<br/>
