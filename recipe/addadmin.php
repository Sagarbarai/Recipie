<?php
	session_start();
	//require_once('author.php');

	include("db_connection.php"); 

	if(isset($_POST['btnsubmit'])){
		$email = $_POST["email"];
		$fname= $_POST["fname"];
		$password = $_POST["password"];
		
		
		//$term = $_POST["terms"];
		
		$query = "INSERT INTO login (email, fname, password) VALUES ('{$email}','{$fname}','{$password}')";


		// Perform queries 

		$per = mysqli_query($link, $query);
		if(!$per){
			mysqli_close($link);
			echo $query;
			die("\nInsert Failed");	
		}else{
			mysqli_close($link);
			echo ("Insert Successfully.");
			header("location: hi.php");
		}
	}

?>

<?php include("hi.php"); ?>

<div id="mainpage" class="normalpage">
<div id="left" class="widepage">
<div class="post">


	<form class="form-horizontal" role="form" method="POST" action="" >
	<div class="formstyle">
		<h2>ADD ADMIN</h2>
		
		
		<div class="form-group">
			<label for="email" class="col-sm-3 control-label">Email</label>
			<div class="col-sm-9">
				<input type="email" id="email" name="email" placeholder="Email" class="form-control text_field" required>
			</div>
		</div>
		<div class="form-group">
			<label for="fname" class="col-sm-3 control-label">Fname</label>
			<div class="col-sm-9">
				<input type="text" id="fname" name="fname" placeholder="Fname" class="form-control text_field">
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-sm-3 control-label">Password</label>
			<div class="col-sm-9">
				<input type="password" name="password" id="password" placeholder="Password" class="form-control text_field" required>
			</div>
		</div>
		
		 
		<div class="form-group">
			<div class="col-sm-9 col-sm-offset-3">
				<button type="submit" name="btnsubmit" class="submitbutton btn btn-primary btn-block">Register</button>
			</div>
		</div>
		</div>
	</form> <!-- /form -->

</div>
<div class="clear"></div>
</div>

