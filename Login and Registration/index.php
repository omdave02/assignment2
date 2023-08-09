<?php 
session_start();
include('db.php');
if(isset($_SESSION['user_name'])){
	header('Location:dashboard.php');
}
$information = '';
if(isset($_POST['Login'])){

$name = $_POST['name'];
$password = $_POST['password'];

$select = "SELECT * FROM users WHERE name='$name' AND password='$password'";
$query = mysqli_query($con,$select);
$count = mysqli_num_rows($query);

if($count == 1){
	$_SESSION['user_name'] = $name;
	header("Location:dashboard.php");
}else{
	$information = "Login failed";
}


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="form-container">
		<form action='' method="POST">
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-user"></span>
				</span>
				<input type="text" name="name" class="form-control" placeholder="Username">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input type="text" name="password" class="form-control" placeholder="Username">
			</div>
			<p><?php echo $information; ?></p>
			<button type='submit' name="Login" class="btn btn-info">Login</button>
			<a href='registeration.php'><button type='button' class="btn btn-info">Register</button></a>
		</form>
	</div>
</body>
</html>