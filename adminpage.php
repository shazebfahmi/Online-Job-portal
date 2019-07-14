<?php
	require 'dbconfig/config.php';
	session_start();
	
		
				if(isset($_POST['log_out']))
				{
				session_destroy();
				header('location:adminloginpage.php');
				}
	
	
?>


<!DOCTYPE html>
<html>
<head>
<title>$uper Job Portal</title>
   <link rel="stylesheet" type="text/css" href="cssfiles/design.css" />
   <link rel="stylesheet" type="text/css" href="cssfiles/style.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

   <div class="navbar1" style="font-family:'Arial Rounded MT Bold'; ">
    <a>Helpline no:<i class="fa fa-fw fa-phone"></i> :+91 7892915411</a>
    <a>Like and subsribe to our channel on various Social media platforms</a>
          <a  target="_blank" href="https://twitter.com/jobsportal4/"><i class="fa fa-fw fa-twitter"></i></a>       <a  target="_blank" href=" https://www.instagram.com/accounts/signup/"><i class="fa fa-fw fa-instagram"></i></a>              <a target="_blank" href="https://www.youtube.com/channel/UCvPA500SDHuyzN3AaYDbCQw?disable_polymer=true" ><i class="fa fa-fw fa-youtube"></i></a>       <a  target="_blank" href="https://api.whatsapp.com/send?phone=917892919657&text=&source=&data="><i class="fa fa-fw fa-whatsapp"></i></a>  
       

  </div>
<div class="header" style="background-color:#e6f0ff;">
 <h1 style="font-family:'Algerian';" >$UPER JOBS PORTAL</h1>
  <p>#THE DEMOCRATIC JOB PORTAL</p>
</div>

<div class="navbar">
  <a href="home.php">HOME <i class="fa fa-home"></i></a>
<div class="dropdown">
  <button class="dropbtn">CARRIER INFO
  <i class="fa fa-paper-plane"></i>
</button>
  <div class="dropdown-content">
  <a href="jobsearchstratergy.php">Job Search Stratergy </a>
  <a href="interviewtips.php">Interview Tips </a>
  <a href="resumeletter.php">Resume and Cover Lover </a>
  <a href="salarynegotiation.php">Salary Negotiation </a>
  <a href="carriermanagement.php">Carrier Management  </a>
</div>
</div>

<a href="faq.php">FAQ's <i class="fa fa-language"></i></a>
<a href="jobs.php">JOBS <i class="fa fa-handshake-o"></i></a>
<a href="adminloginpage.php">LOG OUT <i class="fa fa-user"></i></a>
<!--  <a href="#" class="right">Login <i class="fa fa-user"></i></a> -->


<!--   <div class="dropdown">
    <button class="dropbtn">LOGIN
    <i class="fa fa-user"></i>
  </button>
   <div class="dropdown-content">
    <a href="adminloginpage.php">Admin Login <i class="fa fa-user-secret"></i></a>
    <a href="companyloginpage.php">Company Login   <i class="fa fa-building"></i></a>
    <a href="employeeloginpage.php">Employee Login   <i class="fa fa-users"></i></a>
  </div> -->
</div>

</div>

<div class="row">
	<div class="side" style="font-family:'Bauhaus 93'; background-color:#A0AEF7; " >
		<h2>ABOUT US</h2>
    <h5 style="font-family:'Arial Rounded MT Bold';" ><i class="fa fa-angle-double-right"></i>We have initiated this platform to avoid the job seekers from being exploited while seeking job. The website even creates an end-to-end contact between employee and employers. Thus avoiding overhead for companies to find skilled skulls.</h5>
    <h5 style="font-family:'Arial Rounded MT Bold';" ><i class="fa fa-angle-double-right"></i>Currently we are holding $1.2 billion shares with funding from LinkedIn and Internshala. </h5>
      <h5 style="font-family:'Arial Rounded MT Bold';"  ><i class="fa fa-angle-double-right"></i>Currently we are in 14th place as a genuine Job platform. However we are looking to be in top 5 within 2021.</h5>
      <h2>OUR UPCOMING SERVICES</h2>
      <ul>
        <li>Technical tutorial website</li>
        <li>Video lectures for cracking Interviews</li>
        <li>Coding E-books </li>
        <li>Aptitude questions </li>
        <li>Each company's previous interview model question papers</li>
      </ul>

      <img src="images/jobs.jpg" height="200" width="332">
      <ul>
        <li><a href="ouradmin.php">Our Admins</a></li>
        <a href="designteam.php"><li>Our Design Team</li></a>
        <a href="privacy.php"><li>Privacy Policy</li></a>
        <a href="investors.php"><li>Investors </li></a>
      </ul>
	</div>

	<div class="main">
		<h3><div style="background-color:#aaaaff;margin:1cm; border:dashed 1px ;padding:4px;"> Welcome <?php echo $_SESSION['adminuname']; ?> you are logged in successfully.</div></h3>
		

		<form method="post" class="myform" action="adminpage.php" style="width:100%;">
			<br><br>
			<center><input type ="submit" name="company_approval" value="Companies awaiting for confirmation"  id ="signupbtn" style="width:80%;" /></center><br/><br/><br/><br/>

			<?php
				if(isset($_POST['company_approval']))
		{	
					$query1 = "select * from temp_comp";

					$res = mysqli_query($con,$query1);
					echo '<table id="table1" width="75%" border="1px" cellpadding="3px" cellspacing="10px" bgcolor="pink" style="border-radius:10px; margin: 0 auto;" >';

			echo "<tr>
					<th>Company Username </th>
					<th>Company Password</th>
					<th>Name</th>
					<th>Headquarter</th>
					<th>Type of company</th>
					<th>Email id</th>
					</tr>";

			while($row = mysqli_fetch_array($res))
			{


				echo "<tr>";
				echo "<td>" . $row['cuname'] . "</td>";
				echo "<td>" . $row['cpasswd']. "</td>";
				echo "<td>" . $row['cname'] . "</td>";
				echo "<td>" . $row['headquarter'] . "</td>";
				echo "<td>" . $row['ctype'] . "</td>";
				echo "<td>" . $row['emailid'] . "</td>";
				echo "</tr>";



			}

			echo "</table>";


		}

	?>

<br/><br/><br/>
		</form>
		<br><br>
		<form method="post" class="myform" action="adminpage.php"><center><br><br>
			<label><b>Enter the Company Username for confirmation: <br></b></label><br>
			<input name="comuname" type="text" class="inputvalues" placeholder="Type company username" required/><br><br>
			<input name="sub_btn" type="submit" id ="signupbtn" value="Register with the portal" style="width:60%;"  /><br><br>
		</center>
		</form>
		<?php
			if(isset($_POST['sub_btn']))
			{
				$comuname = $_POST['comuname'];
				$quer1 = "select * from temp_comp where cuname='$comuname'";

				$res2 = mysqli_query($con,$quer1);

				if(mysqli_num_rows($res2)>0)
				{
					echo '<script type="text/javascript"> alert("Company found, waiting to be confirmed.")</script>';

					$row2 = mysqli_fetch_array($res2);

					$var11=$row2['cuname'];
					$var21=$row2['cpasswd'];
					$var31=$row2['cname'];
					$var41=$row2['headquarter'];
					$var51=$row2['ctype'];
					$var61=$row2['emailid'];



					$insertquery = "insert into company values(NULL,'$var11','$var21','$var31','$var41','$var51','$var61')";
					$res3 = mysqli_query($con,$insertquery);
					if($res3)
					{
						$qu = "DELETE FROM temp_comp WHERE cuname ='$comuname'";
						$rs = mysqli_query($con,$qu);
						if($rs)
						{
							echo '<script type="text/javascript"> alert("The company is registered with the portal successfully")</script>';
						}
					}
					else
					{
						echo '<script type="text/javascript"> alert("Unsuccessfull insertion to company database")</script>';
					}


				}



			}
		?>

  </div>

</div>


<div class="footer" style="background-color:#000AA2; color:white; font-family:'Ariel';">
	<p>Posted by: Admin@$uperTeam </br>
 #77,7th block 3rd main road behind BDA COMPLEX,nagarabhavi bengaluru 560056 </br>
   Contact information: aliasing126@gmail.com <hr/>
  � Copyright 2019 www.Superjobsportal.com. All rights reserved. Developed by $uperTeam.
</p>

</div>

</body>
</html>