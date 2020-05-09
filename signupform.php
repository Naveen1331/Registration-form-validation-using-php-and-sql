<?php
require 'dbconfig/config.php';

?>
<html>
<head>
<title>signup</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

#signup_btn{
	margin-top:10px;
	background-color:#3498db;
	padding:5px;
	color:white;
	width:63%;
	text-align:center;
	font-size:18px;
	font-weight:bold;
	margin-bottom:5px;
	margin-left:17px;
	border: none;
	border-radius:4px;
		
}
#main-wrapper{
	margin-top: 100px;
	width:40%;
	margin: 0 auto;
	background:white;
	padding:1px;
	padding-left: 200px;
	border-radius:10px;
	border:2px solid #95a5a6;
}
.inputvalues
{
	width:380px;
	margin:0 auto;
	padding:5px;
	margin-top:10px;
}
#birth{
	margin-top:10px;
}
#birthday{
	width:63%;
	padding:3px;
}
#pass{
	margin-left:5px;
}
#fname{
	margin-left:4px;
}
#gend{
	margin-left:6px;
}

h2{
	margin-left:150px;
}
body{
background:url("https://assets.website-files.com/5bfd1275cc56e15ce750b18e/5c289afb9a1575cb2f893a3b_15.%20Perfume.jpg");

}
#uploadPreview{
	margin-left: 125px;

}

</style>
</head>
<body>
<div id="main-wrapper">
	<h2>Sign up</h2>
	<img id="uploadPreview" width= "140px" src="imgs/register.png"class="avatar"/><br>
	<form class="myform" action="signupform.php" method="post" enctype="multipart/form-data" >
	<i class="fa fa-envelope" aria-hidden="true"></i>
	<input name="email" type="email" class="inputvalues" placeholder="Type email" required/><br>
	<i class="fa fa-unlock-alt" aria-hidden="true"></i>
	<input name="password" id = "pass" type="password" class="inputvalues" placeholder="Type New Password" required/><br>
	<i class="fa fa-user"></i>
	<input name="fullname" id= "fname" type="text" class="inputvalues" placeholder="Enter your Full name" required/><br>

	<div id = "birth">
	<i class="fa fa-calendar" aria-hidden="true"></i>
  	<input type="date" id="birthday" name="birthday">
  	</div>
  	<i class="fa fa-male" aria-hidden="true"></i>
  	<select name= "gender" id = "gend" class="inputvalues"><option>---select gender---</option><option value = "male">male</option><option value = "female">female</option><option value = "male">prefer not to say</option></select>
  	<br>
  	
	<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
    
	</form>
</div>
</body>



<?php
		if(isset($_POST['submit_btn']))
		{
			//echo '<script type="text/javascript"> alert("Signup button clicked")</script>';
			$email=$_POST['email'];
			$password=$_POST['password'];
			$name=$_POST['fullname'];
			$dob=$_POST['birthday'];
			$gender=$_POST['gender'];
			$time_now=time();
			$query="insert into user_signup values('$name','$email','$password','$dob','$gender','$time_now')";
					$query_run= mysqli_query($con,$query);
					if($query_run)
					{
						$message = "Successfully Signed up";
						echo "<script type='text/javascript'>alert('$message');</script>";
						header('location:welcomepage.php');
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!")</script>';
					}

		}
?>



</html>
