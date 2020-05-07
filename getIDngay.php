<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$IDLichTrinh=$_POST['IDLichTrinhPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT IDngaychieu FROM lichtrinh WHERE IDLichTrinh='".$IDLichTrinh."' ";

	$result=mysqli_query($connect,$query);

	
	class IDNgay
	{
		function IDNgay($IDngaychieu)
		{
			
			$this->idngaychieu=$IDngaychieu;
			
		}
	}
			
	$mangIDngay=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangIDngay, new IDNgay($row['IDngaychieu']));
			
	}
	
	echo json_encode($mangIDngay);
			
		
	

	
	
	
?>