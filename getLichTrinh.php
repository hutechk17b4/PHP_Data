<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$IDngaychieu=$_POST['IDngaychieuPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT IDlichtrinh,IDrap,Start_time,End_time,IDngaychieu FROM lichtrinh WHERE IDngaychieu='".$IDngaychieu."' ";

	$result=mysqli_query($connect,$query);

	
	class lichtrinh 
	{
		function lichtrinh($IDlichtrinh,$IDrap,$Start_time,$End_time,$IDngaychieu)
		{
			$this->Idlichtrinh=$IDlichtrinh;
			$this->Idrap=$IDrap;
			$this->Starttime=$Start_time;
			$this->Endtime=$End_time;
			$this->Ngay=$IDngaychieu;
		}
	}
			
	$mangLichTrinh=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangLichTrinh, new lichtrinh($row['IDlichtrinh'],$row['IDrap'],$row['Start_time'],$row['End_time'],$row['IDngaychieu']));
			
	}
	
	echo json_encode($mangLichTrinh);
			
		
	

	
	
	
?>