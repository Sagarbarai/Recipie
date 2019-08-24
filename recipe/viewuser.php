<?php

	require_once('author.php');
	include("db_connection.php"); 
	include("hi.php");

?>

<div id="mainpage" class="normalpage">
<div id="left" class="widepage">
<?php

	$query = "SELECT * FROM registration";
	$exe = mysqli_query($link, $query);
?>
<h2>Registured Member: </h2>
	<table border="1" style="width:100%;">
	<tr>
		<th>Full Name</th>
		<th>ID</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Country</th>
		<th>Action</th>
	</tr>

		<?php
			while($row = mysqli_fetch_array($exe)){
				
				echo "<tr>";
					echo "<td>".$row['fullname']."</td>";
					echo "<td>".$row['per_id']."</td>";
					echo "<td>".$row['phone']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['country']."</td>";
					echo "<td> <a href=\"deleteuser.php?id=".$row['id']."\" onClick=\"return confirm('Are you sure you want to delete?')\" >Delete</a></td>";
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

