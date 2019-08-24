
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Recipes Blog</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrap">
<div id="top">

<h1 id="sitename">Blog <em>Of</em> Recipes</h1>


</div>
<div id="menu">
<ul>
<li class="active"><a href="hi.php"><span>Welcome</span></a></li>
<li><a href="viewuser.php"><span>View User</span></a></li>
<li><a href="viewpost.php"><span>View Post</span></a></li>
<li><a href="addadmin.php"><span>Add Admin</span></a></li>

<?php
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')){
?>
<li><a href="admin.php"><span>Login</span></a></li>
<?php }  else { ?>
<li><a href="logout.php"><span>logout</span></a></li>

<?php } ?>

</ul>
</div>
<div id="contentwrap">

<div id="header">


</div>