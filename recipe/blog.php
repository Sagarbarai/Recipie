<?php
  session_start();
  //require_once('author.php');
  
  include("db_connection.php"); 
 
  if(isset($_POST['submit'])){
    $nname = $_POST["nname"];
    $email = $_POST["email"];
    $datee = $_POST["datee"];
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    
    $query = "INSERT INTO blog_tbl (name, email, title, descrip, datee) VALUES ('{$nname}','{$email}','{$title}','{$desc}',{$datee})";


    // Perform queries 

    $per = mysqli_query($link, $query);
    if(!$per){
      mysqli_close($link);
      //echo $query;

       header("location: blog.php?status=INSERT_SUCCESSFULLY");
      die("\nInsert Failed"); 
    }else{
      mysqli_close($link);
      header("location: blog.php?status=INSERT_SUCCESSFULLY");
    }
  }

?>

<?php include("header.php"); ?>

<div id="mainpage" class="normalpage">
<div id="left">
  
<div class="post">
	<form action="" method="POST" >
		<div class="formstyle">
		<input type="text" name="datee" value="<?php echo date("m-d-Y");?>" readonly/>
		<label for="name">Name:</label>
		<input class="text_field" name="nname" id="name" type="text" autofocus required/>
		<label for="email">Email:</label>
    <input class="text_field" id="email" name="email" type="text" />
		<label for="title">Title:</label>
		<input class="text_field" name="title" id="title" type="text" required/>
		<label for="Comments">Descripton:</label>
		<textarea class="text_field" id="Comments" name="desc" cols="30" rows="8" required></textarea>
		
		<button type="submit" name="submit" class="submitbutton">Submit</button>
		</div>
	</form>
</div>

  
<?php
  $query = "SELECT * FROM blog_tbl ORDER BY id DESC";
  $exe = mysqli_query($link, $query);
?>

<?php
  while($row = mysqli_fetch_array($exe)){
        
?>
  <div class="post">
    <h2> <?= $row['title']; ?></h2>
    <p> <?= $row['descrip']; ?> </p>
   
    
  </div>

<?php 
     }
?>

  

  
  
  
<div class="pagenav">
<span class="alignleft"></span></div>

</div>

<div id="sidebar">
<h2>Sidebar Menu</h2>
<ul>
  <li><a href="#">a</a></li>
  <li><a href="#">b</a></li>
  <li><a href="#">c</a></li>
  <li><a href="#">d</a></li>
  <li><a href="#">e </a></li>
  <li><a href="#">f</a></li>
  <li><a href="#">g</a></li>
  <li><a href="#">h</a></li>
  
</ul>
</div>
<div class="clear"></div>
</div>

<?php include("footer.php");?>
