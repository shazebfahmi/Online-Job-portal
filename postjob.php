<?php
	require 'dbconfig/config.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Posting new Job</title>
   <link rel="stylesheet" type="text/css" href="cssfiles/design.css" />
   <link rel="stylesheet" type="text/css" href="cssfiles/style.css">
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
  <a href="#">Job Search Stratergy </a>
  <a href="#">Interview Tips </a>
  <a href="#">Resume and Cover Lover </a>
  <a href="#">Salary Negotiation </a>
  <a href="#">Carrier Management  </a>
</div>
</div>

<a href="faq.html">FAQ's <i class="fa fa-language"></i></a>
<a href="jobs.php">JOBS <i class="fa fa-handshake-o"></i></a>
<a href="companyloginpage.php">LOG OUT <i class="fa fa-user"></i></a>

<!--  <a href="#" class="right">Login <i class="fa fa-user"></i></a> -->


  

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

	<div class="main" id="main-wrapper">
		<center>
			<h2>Job posting  </h2>
			<img src="images/women.png" class="imageppt"/>
		</center>

		<form class="myform" action ="postjob.php" method ="post"><center>


			<label><b><br><br>Skill required: <br></b></label><br>
			<select name="sktype" id="signupbtn2">
				<option value="BackEnd Engineer">BackEnd Engineer</option>
				<option value="Data Scientist">Data Scientist</option>
                <option value="Full Stack Developer">Full Stack Developer</option>
                <option value="FrontEnd Engineer">FrontEnd Engineer</option>
                <option value="HR Manager">HR Manager</option>
				<option value="Q/A TEST Engineer">Q/A TEST Engineer</option>
                <option value="Software  Engineer">Software  Engineer</option>
                <option value="Team Lead">Team Lead</option>
            </select><br><br>

			<label><b>Location: <br></b></label><br>
			<select name="loc"  id="signupbtn2" >
                <option value="Bengaluru">Bengaluru</option>
                <option value="Chennai">Chennai</option>
                <option value="Noida">Noida</option>
                <option value="Pune">Pune</option>
                <option value="Ghuwati">Ghuwati</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Cochin">Cochin</option>
                <option value="Ahmadabad">Ahmadabad</option>
			</select><br><br>

			<label><b>CTC(Cost To Company): <br></b></label><br>
			<input name="ctc" type="text" class="inputvalues" placeholder="Enter '4.5' for a salary of 4.5 LPA" required/><br><br>

			<label><b>Min Years Of Experience: <br></b></label><br>
			<input name="yoe" type="text" class="inputvalues" placeholder="Enter '2' for 2 years of experience" required/><br><br>

			<br><br><input name="postjob" type="submit" id ="signupbtn" value="Post Job" style="width:40%;	" /><br><br>
			<a href="companypage.php"><input type="button" id ="signupbtn" value="Back" style="width:40%; background-color:#0093FF; "  /></a><br><br><br>
			
		</center>
		</form>
		

		<?php

		if(isset($_POST['postjob']))
		{

			$sktype=$_POST['sktype'];
			$loc=$_POST['loc'];
			$ctc=$_POST['ctc'];
			$yoe=$_POST['yoe'];
			$ccuname=$_SESSION['comuname'];


			$query1 = "select cid from company where cuname='$ccuname'";


			$res1 = mysqli_query($con,$query1);
			if($res1)
			{
				$row1 = mysqli_fetch_array($res1);
				$comid = $row1['cid'];

				$query = "insert into job values(NULL,'$comid','$sktype','$loc','$ctc','$yoe')";

				$res = mysqli_query($con,$query);

				if($res)
				{
					echo '<script type="text/javascript"> alert("Job added to the database successfully");</script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error occured while adding the job to the database");</script>';
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Error occured, while fetching cid from company name");</script>';
			}
		}



		?>


	</div>
</div>

<div class="footer" style="background-color:#000AA2; color:white; font-family:'Ariel';"> </br>
 #77,7th block 3rd main road behind BDA COMPLEX,nagarabhavi bengaluru 560056 </br>
   Contact information: aliasing126@gmail.com <hr/>
  © Copyright 2019 www.Superjobsportal.com. All rights reserved. Developed by $uperTeam.
</p>
</div>

</body>
</html>
