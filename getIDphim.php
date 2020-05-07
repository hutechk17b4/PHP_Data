<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$TenPhim=$_POST['TenPhimPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT IDphim FROM phim WHERE TenPhim='".$TenPhim."' ";

	$result=mysqli_query($connect,$query);

	
	class IDphim
	{
		function IDphim($IDphim)
		{
			
			$this->idphim=$IDphim;
			
		}
	}
			
	$mangIDphim=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangIDphim, new IDphim($row['IDphim']));
			
	}
	
	echo json_encode($mangIDphim);
			
		
	

	
	
	
?>