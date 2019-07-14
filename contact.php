 <?php
	
	require 'dbconfig/config.php';

	$eeid = $_POST['comuname2'];
		
	if(isset($_POST['view']))
		{

			$query111 = "select mobno from employee where eid = '$eeid'  ";
			
			$res1 = mysqli_query($con,$query111);
			
			$row1 = mysqli_fetch_array('$res1');
			$temp = row1['mobno'];
			
		}
		
	$link='https://api.whatsapp.com/send?phone=91'.$temp.'&text=&source=&data=';
	
	header('location:$link');

?>