<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";


	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT IDlichtrinh,IDphim,IDrap,Start_time,End_time FROM lichtrinh WHERE IDphim='".$_POST['IDphimPost']."' ";

	$result=mysqli_query($connect,$query);

	
	class lichtrinh 
	{
		function lichtrinh($IDlichtrinh,$IDphim,$IDrap,$Start_time,$End_time)
		{
			$this->Idlichtrinh=$IDlichtrinh;
			$this->Idphim=$IDphim;
			$this->Idrap=$IDrap;
			$this->Starttime=$Start_time;
			$this->Endtime=$End_time;
		}
	}
			
	$mangLichTrinh=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangLichTrinh, new lichtrinh($row['IDlichtrinh'],$row['IDphim'],$row['IDrap'],$row['Start_time'],$row['End_time']));
			
	}
	
	echo json_encode($mangLichTrinh);
			
		
	

	
	
	
?>