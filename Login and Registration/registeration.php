<?php 
include('db.php');
$information = '';
if(isset($_POST['Registration'])){

$name = $_POST['name'];
$password = $_POST['password'];
$age = $_POST['age'];
$address = $_POST['address'];
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$select = "SELECT * FROM users WHERE name='$name'";
$query = mysqli_query($con,$select);
$count = mysqli_num_rows($query);
if($count == 0){
	$q = "INSERT INTO users(id,name,password,age,image,address) VALUES ('','$name','$password','$age','$img','$address')";
	$run = mysqli_query($con,$q);
	if($run){
		move_uploaded_file($tmp, "img/".$img);
		$information = 'Registration success please login to access your dashboard';
	}else{
		$information =  "Failed";
	}
}else{
	$information =  'user already availabel';
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
		<form method="POST" enctype="multipart/form-data">
			<div class="input-group">
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-user"></span>
				</span>
				<input required type="text" name="name" class="form-control" placeholder="Username">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input required type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="input-group">
				<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input required type="password" name="conform password" class="form-control" placeholder="conform Password">
			</div>

			<div class="input-group">
				<span class="input-group-addon">
						<span class="glyphicon glyphicon-time"></span>
				</span>
				<input required type="text" name="age" class="form-control" placeholder="Age">
			</div>

			<div class="form-group">
			<textarea required placeholder="Address" name='address' class="form-control" rows="3"></textarea>
			</div>
             <p><?php echo $information; ?></p>
			<a href='index.php'><button type="button" class="btn btn-info">Login</button></a>
			<button type="submit" name="Registration" class="btn btn-info">Register</button>
		</form>
	</div>
</body>
</html>