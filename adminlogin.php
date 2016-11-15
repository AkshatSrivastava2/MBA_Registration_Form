<?php 
session_start();
if(isset($_SESSION["sess_user_a"])){
  header("Location:admin.php");
}
else{

?>




<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
		<link rel="stylesheet" type="text/css" href="styleform1.css">

</head>

<style>

.alert {
    padding: 20px;
    background-color: #4CAF50;
    color: white;
}
.alert2 {
    padding: 20px;
    background-color: red;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
<body>

<div id="header">
	
	
	<h1 style="text-align: center"><b>Ajay Kumar Garg Institute of Management</b></h1>
	<h2 style="text-align: center;text-decoration: underline;">MBA Registration Form</h2>
</div>

<div class="login-page">
  <div class="form">
    
	<h2 style="text-align: center; color: #369;"> ADMIN LOGIN</h2>
		<form name="form1" class="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table style="width: 300; border:0; align:center;">
		
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="adusername" class="textInput" placeholder="User Name"></td>
			</tr>

			<tr>
				<td>Password :</td>
				<td><input type="password" name="adpassword" class="textInput" placeholder="Password"></td>
			</tr>

			<tr>
				
				<td id="btnsubmit"><br><input type="submit" name="Submit" value="Login" id="btn"></td>
				
			</tr>
		</table>

    
<?php 

	if(isset($_POST["Submit"])){

			if(!empty($_POST['adusername']) && !empty($_POST['adpassword'])) {
				$user=$_POST['adusername'];
				$pass=md5($_POST['adpassword']);

				$con=mysqli_connect("localhost","root","","regform");
				$query=mysqli_query($con,"SELECT * FROM admin WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysqli_fetch_assoc($query))
			{
					$dbusername=$row['username'];
					$dbpassword=$row['password'];
					$Name="admin";
			}

	if($user == $dbusername && $pass == $dbpassword)
		{
			session_start();
			$_SESSION['sess_user_a']=$Name;


			/* Redirect browser */
			header("Location: admin.php");
		}
	} else {
				echo "<div class='alert2' style='text-align:center;'>
 					 <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span> Invalid username or password!</div>";
	}

} else {
				echo  "<div class='alert2' style='text-align:center;'>
  				<span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span> All fields are required!</div>";
		}
}
?>
	
</form>
</div>
</div>
</div>
<?php
}
?>