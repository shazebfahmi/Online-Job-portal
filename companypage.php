<?php
  require 'dbconfig/config.php';
	session_start();
	
	if(isset($_POST['log_out']))
		{
			session_destroy();
		 header('location:companyloginpage.php');
		}
	
		
		
	if(isset($_POST['view2']))
	{
		$eeid = $_POST['comuname2'];
		$query111 = "select mobno from employee where eid = '$eeid'  ";
			
		$res1 = mysqli_query($con,$query111);
			
		if(mysqli_num_rows($res1))
		{
			$row1 = mysqli_fetch_array($res1);
			$temp = $row1['mobno'];
			
			$xyz=$_SESSION['comuname'];

				$query11 = "select cid from company where cuname='$xyz'";
				$res11 = mysqli_query($con,$query11);

				if($res11)
				{
					$row11 = mysqli_fetch_array($res11);
					$pqr =$row11['cid'];
				}


				$var1="SELECT eid from employee e where e.eid IN (select a.empid from applied a,job j where a.jobid=j.jid and j.compid='$pqr')";
				$res = mysqli_query($con,$var1);
				
				$flag = 0;
				while($row111 =  mysqli_fetch_array($res))
				{
					if($eeid == $row111['eid'] )
					{
						$flag =1 ;
						echo '<script>window.open("https://api.whatsapp.com/send?phone=91'.$temp.'&text=&source=&data=","_blank")</script>';
					}
					
				}
				if($flag == 0)
				{
					echo '<script> alert("Enter the Employee Id from the mention cantidates only.")</script>';
				}
	
			
		}
		else
		{
			echo '<script> alert("Enter the Employee Id from the mention cantidates only.")</script>';
		}
	
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

	<div class="main">
		<h2 "color:#0099ff">Welcome <?php echo $_SESSION['comname']; ?>, you are logged in successfully.</h2>
		<form method="post" class="myform" action="companypage.php">
			<center>
				<br/><br/>
				<a href="postjob.php"><input type="button"  id ="signupbtn2" value="post job" style="width:25%; font-weight:bold;  background-color:#105383; color:white;" /></a><br/><br/>
				<input type="submit" name="view"   id ="signupbtn2" value="View Applicants Lists" style=" font-weight:bold;  width:45%;color:white; background-color:#105383; " />
				<br/><br/><br/>
			
	
	
	</center>
		</form><br/><br/><br/>
				
			
		
		<?php

			if(isset($_POST['view']))
			{
				
				$xyz=$_SESSION['comuname'];

				$query11 = "select cid from company where cuname='$xyz'";
				$res11 = mysqli_query($con,$query11);

				if($res11)
				{
					$row11 = mysqli_fetch_array($res11);
					$pqr =$row11['cid'];
				}


				$var1="SELECT * from employee e where e.eid IN (select a.empid from applied a,job j where a.jobid=j.jid and j.compid='$pqr')";
				$res = mysqli_query($con,$var1);
				echo '<table id="signupbtn2" width="75%" border="1px" cellpadding="3px" cellspacing="10px" style="background-color:pink; margin:0 auto; " >';

				echo "<tr>
					<th><center>Employee Id </center></th>
					<th><center>employee name </center></th>
					<th><center>employee Dob</center></th>
					<th><center>Mail Id</center></th>
					<th><center>type</center></th>
					<th><center>sex</center></th>
					<th><center>Tenth marks</center></th>
					<th><center>Twelth marks</center></th>
					<th><center>CGPA</center></th>
					<th><center>Hobby</center></th>
					<th><center>employee skill</center></th>
					</tr>";

				while($row = mysqli_fetch_array($res))
				{
			
					echo "<tr>";
					echo "<td><center>".$row['eid']."</center></td>";
					echo "<td><center>".$row['ename']."</center></td>";
					echo "<td><center>".$row['edob']."</center></td>";
					echo "<td><center>".$row['eemailid']."</center></td>";
					echo "<td><center>".$row['etype']."</center></td>";
					echo "<td><center>".$row['esex']."</center></td>";
					echo "<td><center>".$row['eten']."</center></td>";
					echo "<td><center>".$row['etwelve']."</center></td>";
					echo "<td><center>".$row['ecgpa']."</center></td>";
					echo "<td><center>".$row['ehobby']."</center></td>";
					echo "<td><center>".$row['eskill']."</center></td>";
					echo "</tr>";
	
				}

				echo "</table>";
			}
    ?>
	<br><br><br><br>
	
	<form method="post" class="myform" action="companypage.php">
		<center>
		<label><b><br>Enter the Employee Id to call for an interview: <br></b></label><br>
		<input name="comuname2" type="text" class="inputvalues" placeholder="Type employee ID from above" required/><br><br>
		
	  <input type="submit" name="view2"   id ="signupbtn2" value="Contact the Applicant " style=" font-weight:bold;  width:45%;color:white; background-color:#105383; " />
		<br><br>
		</center>
    </form>
     
		
	
	
	
<br/><br/><br/><br/>
 

</div>

</div>

<div class="footer" style="background-color:#000AA2; color:white; font-family:'Ariel';"> </br>
 #77,7th block 3rd main road behind BDA COMPLEX,nagarabhavi bengaluru 560056 </br>
   Contact information: aliasing126@gmail.com <hr/>
  © Copyright 2019 www.Superjobsportal.com. All rights reserved. Developed by $uperTeam.
  <!-- echo "<a href=$link target='_blank'>CLICK HERE TO INVITE HIM FOR AN INTERVIEW</a>";-->
</p>
</div>

</body>
</html>
