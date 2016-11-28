<?php 
session_start();
if(!isset($_SESSION["sess_user_a"])){
  header("Location:adminlogin.php");
}
else{

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="tablestyle.css">
</head>
<style>
		#myInput {
  width: 80%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
button{
  background-color:   #0000FF;
    border: none;
    color: white;
    padding: 1% 1%;
    text-decoration: none;
    margin: 2% 3%;
    cursor: pointer;
    border-radius: 4px;
    float:right;
}
</style>
<body>
<script>

function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<script>
window.onload=scroll;
  function scroll(){
  var m=document.getElementById('myTable');
  m.style.overflowX="scroll";
}
</script>
 
		<div id="header">
					<h1 style="text-align: center">Ajay Kumar Garg Institute of Management</h1><hr size="2">
					<!--<a href="logout.php" style="text-decoration:none;float: right; ">Logout</a>-->
          <button onclick="window.location.href='logout.php'">Logout</button>

			<h2 style="text-align: center;text-decoration: underline;">MBA Registration Form</h2>
			<h2 style="text-align: center;">Student Details</h2>

		</div>
		

<?php

		$server = "localhost"; 
		$user = "root";
 		$password = "";
 		$database = "regform"; 
 		$con=mysqli_connect($server,$user,$password,$database) or die ("Connection Fails"); 
 		$data = mysqli_query($con,"SELECT * FROM studentdetails"); 
?>

 		<div style="margin-left:10%;">
 		<?php
 		echo "<input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search by Student name..'>"; ?>
 		<div style="width: 100%" id="maintable">
   			<table id='myTable' class='tab1' border='1' style="display: block;overflow-x: scroll;" > 
   				<caption>Student Details</caption>
 			  		
 			  			<tr>
                            <th rowspan="2">Date </th>
		 			  		<th rowspan="2">SEE AKTU Roll No </th> 
		 			  		<th rowspan="2">General Rank </th> 
		 			  		<th rowspan="2">Category Rank </th> 
		  			  	<th rowspan="2">Exam (CAT/MAT/CMAT)</th> 
		            <th rowspan="2">Exam Percentile</th>
		 			  		<th rowspan="2">Any Other Exam(Name) </th>
		 		  	  	<th rowspan="2">Percentile </th>

		 		  	  		<th rowspan="2">Student Name</th>
		 		  	  		<th rowspan="2">Email Id</th>
		 		  	  		<th rowspan="2">Father's Name</th>
		 		  	  		<th rowspan="2">Date of Birth</th>
		 		  	  		<th rowspan="2">Nationality</th>
		 		  	  		<th rowspan="2">Category</th>
		 		  	  		<th rowspan="2">Gender</th>
		 		  	  		<th rowspan="2">State of Domicile</th>

		 		  	  		<th rowspan="2">Permanent Address</th>
		 		  	  		<th rowspan="2">Pincode</th>
		 		  	  		<th rowspan="2">Tel No</th>
		 		  	  		<th rowspan="2">Correspondence Address</th>
		 		  	  		<th rowspan="2">Pincode</th>
		 		  	  		<th rowspan="2">Tel No</th>
		 		  	  		<th rowspan="2">Local Address</th>
		 		  	  		<th rowspan="2">Pincode</th>
		 		  	  		<th rowspan="2">Tel No</th>


                  <th colspan="4" style="text-align: center;">10<sup>th</sup> Result</th>

                  <th colspan="4" style="text-align: center;">12<sup>th</sup> Result</th>

                  <th colspan="4" style="text-align: center;">Diploma</th>

                  <th colspan="4" style="text-align: center;">Graduation</th>

                  <th colspan="4" style="text-align: center;">Any Other</th>


		 		  	  		<th rowspan="2">Experience Duration</th>
		 		  	  		<th rowspan="2">Organisation Name</th>

		 		  	  		<th rowspan="2">Hostel Required</th>
		 		  	  		<th rowspan="2">Email Verified</th>

		 		  	  	</tr>
		 		  	    <tr>
                  <th>School Name</th>
                  <th>Board</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>

                  <th>School Name</th>
                  <th>Board</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>


                  <th>College Name</th>
                  <th>University</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>

                  <th>College Name</th>
                  <th>University</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>

                  <th>College Name</th>
                  <th>University</th>
                  <th>Passing Year</th>
                  <th>Percentage</th>
                  </tr>


		 		  	 
		 		  	 <?php
		 		  	 
		 		  	 while($r=mysqli_fetch_array($data))
		 		  	 	{
		 		  	 		?>

                        <tr>
                                <td><?php echo $r['Date']; ?></td>
                                <td><?php echo $r['see_rollno']; ?></td>
                                <td><?php echo $r['gen_rank']; ?></td>
                                <td><?php echo $r['category_rank']; ?></td>
                               	<td><?php echo $r['cat_mat_cmat']; ?></td>
                               	<td><?php echo $r['percentile']; ?></td>
                               	<td><?php echo $r['other_exam_name']; ?></td>
                               	<td><?php echo $r['other_exam_percentile']; ?></td>

                               	<td><?php echo $r['name']; ?></td>
                               	<td><?php echo $r['email']; ?></td>
                               	<td><?php echo $r['fname']; ?></td>
                               	<td><?php echo $r['dob']; ?></td>
                               	<td><?php echo $r['nationality']; ?></td>
                               	<td><?php echo $r['category']; ?></td>
                               	<td><?php echo $r['Gender']; ?></td>
                               	<td><?php echo $r['state_of_domicile']; ?></td>

                               	<td><?php echo $r['permanent_add']; ?></td>
                               	<td><?php echo $r['pincode_perm']; ?></td>
                               	<td><?php echo $r['telno_perm']; ?></td>
                               	<td><?php echo $r['correspondence_add']; ?></td>
                               	<td><?php echo $r['pincode_corr']; ?></td>
                               	<td><?php echo $r['telno_corr']; ?></td>
                               	<td><?php echo $r['local_add']; ?></td>
                               	<td><?php echo $r['pincode_loc']; ?></td>
                               	<td><?php echo $r['telno_loc']; ?></td>

                               	<td><?php echo $r['10_school_name']; ?></td>	
                               	<td><?php echo $r['10_board']; ?></td>
                               	<td><?php echo $r['10_passingyear']; ?></td>
                               	<td><?php echo $r['10_percentage']; ?></td>

                               	<td><?php echo $r['12_school_name']; ?></td>
                               	<td><?php echo $r['12_board']; ?></td>
                               	<td><?php echo $r['12_passingyear']; ?></td>
                               	<td><?php echo $r['12_percentage']; ?></td>

                               	<td><?php echo $r['diploma_college']; ?></td>
                               	<td><?php echo $r['diploma_university']; ?></td>
                               	<td><?php echo $r['diploma_passingyear']; ?></td>
                               	<td><?php echo $r['diploma_percentage']; ?></td>

                               	<td><?php echo $r['graduation_college']; ?></td>
                               	<td><?php echo $r['graduation_university']; ?></td>
                               	<td><?php echo $r['graduation_passingyear']; ?></td>
                               	<td><?php echo $r['graduation_percentage']; ?></td>

                               	<td><?php echo $r['other_college']; ?></td>
                               	<td><?php echo $r['other_university']; ?></td>
                               	<td><?php echo $r['other_passingyear']; ?></td>
                               	<td><?php echo $r['other_percentage']; ?></td>

                               	<td><?php echo $r['experience_duration']; ?></td>
                               	<td><?php echo $r['exp_organisation_name']; ?></td>
                               	<td><?php echo $r['hostel_req']; ?></td>
                               	<td><?php echo $r['verified']; ?></td>
                                
 		  	  			</tr>
 		  	  		
 		  	  	</div>
 		  	  			<?php
 		  	  		}
 		  	  		?>

 		  	  		</div>

</body>
</html>
<?php
}
?>