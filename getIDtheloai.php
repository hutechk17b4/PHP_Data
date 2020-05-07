<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$IDphim=$_POST['IDPhimPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT IDTheLoai FROM theloaiphim WHERE IDphim='".$IDphim."' ";

	$result=mysqli_query($connect,$query);

	
	class IDTheLoai
	{
		function IDTheLoai($IDTheLoai)
		{
			
			$this->idtheloai=$IDTheLoai;
			
		}
	}
			
	$mangIDTheLoai=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangIDTheLoai, new IDTheLoai($row['IDTheLoai']));
			
	}
	
	echo json_encode($mangIDTheLoai);
			
		

?>