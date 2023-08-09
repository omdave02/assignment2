<?php
session_start();
include('db.php');

if(!isset($_SESSION['user_name'])){
	header('Location:index.php');
}

$user_name = $_SESSION['user_name'];
$select  = "SELECT * FROM users WHERE name = '$user_name'";
$q = mysqli_query($con, $select);
$run = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="dashboard dashboard-left">
		<aside>
			<br>
			<img src="img/<?php
			if($run['image']==''){
				echo 'default.jpg';
			}else{

			 echo $run['image'];
			 } 
			 ?>"  class="img-circle" />
			<p><?php echo $run['name']; ?></p>
		</aside>
	</div>
	<div class="dashboard dashboard-right">
		<header>
			<p>Dashboard</p>
			<a href="logout.php">Logout</a>
		</header>
		<div class="user-detail">
			<p><span>Name </span><?php echo $run['name']; ?></p>
			<p><span>Age</span><?php echo $run['age']; ?></p>
			<p><span>Address</span><?php echo $run['address']; ?></p>
		</div>
	</div>
</body>
</html>