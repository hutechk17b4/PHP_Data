<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$IDLichTrinh=$_POST['IDLichTrinhPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT Start_time,End_time FROM lichtrinh WHERE IDLichTrinh='".$IDLichTrinh."' ";

	$result=mysqli_query($connect,$query);

	
	class lichtrinh 
	{
		function lichtrinh($Start_time,$End_time)
		{
			
			$this->Starttime=$Start_time;
			$this->Endtime=$End_time;
			
		}
	}
			
	$mangLichTrinh=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangLichTrinh, new lichtrinh($row['Start_time'],$row['End_time']));
			
	}
	
	echo json_encode($mangLichTrinh);
			
		
	

	
	
	
?>