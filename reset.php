<!DOCTYPE html>
<html>
<head>
  <title></title>
<style>
  input[type=submit]{ background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;}

    #block{
      align-content: center;
      text-align: center;
    width: 60%;
    border: 5px solid black;
    padding: 3%;
    margin: 4% 5% 0% 17%;
}
#ff{
  font-family: verdana;
  font-size: 0.9em;
}

p{
  font-family: verdana;
  font-size: 0.9em;
  text-align: justify;
}
</style>


</head>
<body>
<h1 style="text-align: center">Ajay Kumar Garg Institute of Management</h1></p>
  <h2 style="text-align: center;color:blue;text-decoration: underline;">MBA Registration Form Email Verification</h2>
</body>
</html>



<?php

if($_GET['key'])
{

  $email=$_GET['key'];
  $con=mysqli_connect('localhost','root','','regform');
  $select=mysqli_query($con,"SELECT email,name from studentdetails where md5(email)='".$email."'");
  if(mysqli_num_rows($select)==1)
  {
    ?>


    <div id="block">
    <form method="POST" action="updatestatus.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">


	    <?php
      while($r=mysqli_fetch_array($select))
      {
        echo "Dear Student, ".$r['email'];
      }
      
       ?>
    <p><b>Declaration </b>: I confirm that the information provided by me in this application form is accurate and correct. I understand that in the event of my admission, if any information provided here by me is found incorrect, my admission could be cancelled without notice.</p>
    <p>I further decalare that I have never been debarred from any examination or rusticated by any Institution/University. I also declare that I have not been convicted by any Court of Law in India or abroad at any time for any criminal offence and sentenced to imprisonment as well as no proceedings are pending against me.</p>
    <p>I further confirm and undertake to abide by the Rules and Regulations as framed from time to time by  Dr. APJ Abdul Kalam Technical University, LUCKNOW (U.P.) as well as by the college.</p>
    <p>I am aware that as per honourable Supreme Court order Ragging is totally prohibited.</p><br>

      <input type="checkbox" name="confirm" value="confirm">Check here to confirm<br><br>
      <input type="submit" value="Submit" name="submit_confirm">
    </form>
    </div>
   <?php
}
else{
  ?>

  <?php
  echo "Link expired";}
}
?>



