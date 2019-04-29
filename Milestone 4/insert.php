<?php
include 'conn.php';
//require_once('conn.php');

if(isset($_POST['done'])){
$username=$_POST['username'];
$password=$_POST['password'];
$q="INSERT INTO crudtable (username,password) VALUES('$username','$password')";
mysqli_query($con,$q);
}

?>


<!DOCTYPE html>
<html>
<head>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/css/mdb.min.css" rel="stylesheet">
	
<!-- JQuery -->
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.7/js/mdb.min.js"></script>


	<title></title>


</head>
<body>
<div class="col-md-4 m-auto"> 
<form method="post">
	<br><br><div class="card">
		<div class="card-header bg-dark">
		<h2 class="text-white text-center"> Insert Operation </h2>
		</div>
		<br>
		<label>UserName</label>
<input type="text" name="username" placeholder="username"  class="form-control"><br>
			<label>Password</label>
<input type="text" name="password" placeholder="Password " class="form-control"><br>


<button class="btn btn-success " type="submit" name="done">Submit</button>
	</div>
</form>
 </div>
</body>
</html>