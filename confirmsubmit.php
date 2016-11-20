<!doctype html>
<html>

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <div id="header">


        <h3 class="center">Ajay Kumar Garg Institute of Management</h3>
        <div class="row"></div>
        <h5 class="center">MBA Registration Form Email Verification</h5>
    </div>
    <div class="row"></div>
    <div>
        <h6 class="grey-text center"> Kindly provide your email id here, an auto-generated link will be sent to the given email, kindly click on the link for confirming registration form submission</h6><br><br><br>


        
            <div class="row">
                <form class="form" action="" method="POST">
                <div class="col s3" style="margin-left:4%;"></div>
                    <div class="col s4">
                        <div class="input-field">
                    <input type="email" name="email" id="email">
                    <label for="email">Email Address</label>
                        </div>
                </div>
                <div style="padding-top:0.7777%;" class="col s2 input-field">
                    <button class="btn blue white-text" type="submit" name="submit" value="Send">Send
                        <i class="material-icons right">send</i></button>
                </div>
                <div class="col s2"></div>
                    </form>
                </div>
        
        <?php
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$con=mysqli_connect('localhost','root','','regform') or die(mysqli_error());
	
	$query=mysqli_query($con,"SELECT email FROM studentdetails WHERE email='".$email."'");
	
if(mysqli_num_rows($query)>=1)
  {
    while($row=mysqli_fetch_array($query))
    {
      $email1=md5($row['email']);
	  $email=$row['email'];
    }
    $link="<a href='localhost/Latest%20MBA11/MBA/reset.php?key=".$email1."'>Click here to verify your email and confirm form submission</a>";
    
    
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
  <strong> A verification link has been sent to your email id,kindly click on that link for verification </strong> 
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
