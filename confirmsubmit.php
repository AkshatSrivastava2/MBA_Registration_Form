<!doctype html>
<html>
<head>
	<title>Registration Form</title>
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
	
</head>
<body>
<style>
input[type=text] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
}

input[type=submit]{ background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}

</style>

<div id="header">
	
	
	<p id="layoutdims"><h1 style="text-align: center">Ajay Kumar Garg Institute of Management</h1></p>
	<h2 style="text-align: center;color:blue;text-decoration: underline;">MBA Registration Form Email Verification</h2>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<br><br><br>
				<h3 style="text-align: center;color:blue;"> Kindly provide your email id here, an auto-generated link will be sent to the given email, kindly click on the link for confirming registration form submission</h3><br><br><br>

				<form style="text-align:center;" action="" method="POST" >
						<input type="text" name="email"  placeholder="Enter your email id">
						<input type="submit" name="submit" value="Submit" ><br><br>
				</form>

<?php
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$con=mysqli_connect('localhost','root','','regform') or die(mysqli_error());
	
	$query=mysqli_query($con,"SELECT email FROM studentdetails WHERE email='".$email."'");
	
if(mysqli_num_rows($query)==1)
  {
    while($row=mysqli_fetch_array($query))
    {
      $email1=md5($row['email']);
	  $email=$row['email'];
    }
    $link="<a href='localhost/MBA/reset.php?key=".$email1."'>Click here to verify your email and confirm form submission</a>";
    
    
    require 'PHPmail/PHPMailerAutoload.php';
		require 'PHPmail/class.phpmailer.php'; // path to the PHPMailer class
		require 'PHPmail/class.smtp.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;    

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'Smtp.gmail.com;Smtp.live.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'mayur.pathak52@gmail.com';                 // SMTP username
		$mail->Password = 'may_ur123gmail#';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;               
		$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) );                     // TCP port to connect to

		$mail->setFrom('mayur.pathak52@gmail.com', 'mayur');    // Add a recipient
		$mail->addAddress($email);  
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'AKGIM (MBA Registration Form Email Verification)';
		$mail->Body    = 'Click On This Link to verify your email address '.$link.'';
		$mail->AltBody = 'Form Submission Verification Link';

		if(!$mail->send())
			{
			 echo "<div class='alert2' style='text-align:center;'>
  <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span>  Please enter the valid email.$mail->ErrorInfo</div>";
    }
			else 
			{

				echo "<div class='alert' style='text-align:center;'>
  <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span> 
  <strong> A verification email has been sent, kindly login to your account and click on the link for verification </strong> 
</div>";
			
			
			}
			}

			else{

				echo "<div class='alert2' style='text-align:center;'>
  <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span>  Please enter the valid email which you provided during form submission </div>";
				
			}

}
?>
	
				<br><br><br><br><br><br>
				<!-- Column 1 end -->
			</div>
			
	


</body>
</html>
