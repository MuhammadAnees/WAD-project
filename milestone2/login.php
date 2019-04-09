




<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	


body{
background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("BL12_Banking.jpg");
height:100vh;
	background-position: center;
	background-size: cover;
	background-repeat: no-repeat;
}

#login-name{
	font-size: 30px;
font-style: italic;
	color: white;
	font-weight: lighter;
}

#login{

	background-color: #0d0d0d;
	min-height: 400px;
	opacity: 0.70;
	padding: 30px 50px 30px 50px;
	box-shadow: -3px -3px 3px #33cc33;
}

.user{
font-style: italic;
	font-size: 14px;
	color: white;
	font-weight: lighter;

}

#iconn{
background-color: #5cb85c;
border-color:#4cae4c;
color: white;

}


.close {
  position: absolute;
  right: 25px;
  top: 0;
  color:white;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color:white;
  cursor: pointer;
}

#closebar{

	color:white;
	opacity: 1;
}
</style>










<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	



</head>
<body>





<div class="container">
	<br/><br/>

<div class="row">
    <div class="col-md-3 col-md-offset-5" id="login">
		
       <form  method="post" action="welcome.php" >
	       <div class="form-group">
               <button  id="closebar" onclick="document.getElementById('login')window.location.replace("http://www.w3schools.com");" class="close" title="Close">&times;</button>
                      <b id="login-name">Login</b>
<br/><br/>

              
<label class="user">Email</label>
		<div class="input-group">
			<span class="input-group-addon"  id="iconn"> 
				<i class="glyphicon glyphicon-envelope"></i></span>

				<input type="email"  class="form-control" name="email"  required="required" placeholder="email">
				
		
		</div>


<label class="user">Password</label>
		<div class="input-group">
			<span class="input-group-addon"  id="iconn"> 
				<i class="glyphicon glyphicon-lock"></i></span>

				<input type="Password"  id="pass"  required="required" class="form-control pwd" name="password"  placeholder="password"> 
				 <span class="input-group-btn">
            <button class="btn btn-success reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
          </span> 
		</div>





		



		<div class="input-group">
<br/>
				<input type="submit"  class="form-control" name="register_btn" value="Login">
		

        </div>


		

</div>
</form>
</div>
</div>
</center>





<script>
$(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});

	
	
	
<?php

$con=mysqli_connect("localhost","root","","authentication");

if(isset($_POST['register_btn'])){
$email=$_POST['email'];
$password=$_POST['password'];

	$query="select * from users where email= '$email' && password='$password'";
	$result=mysqli_query($con,$query);
	if(mysqli_fetch_assoc($result)){
	header("location:home.php");
	}
	else{
		echo "not a valid user";
		header("location:register.php");
	}


}



?>
	
	
	

$(".reveal2").on('click',function() {
    var $pwd2 = $(".pwd2");
    if ($pwd2.attr('type') === 'password') {
        $pwd2.attr('type', 'text');
    } else {
        $pwd2.attr('type', 'password');
    }
});


// auto popup signup box



</script>
</body>
</html>
