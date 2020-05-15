<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	// $IDphim=$_POST['IDPhimPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT IDKhachHang,IDTheLoai,Rate FROM data_ai ";

	$result=mysqli_query($connect,$query);

	
	class AI
	{
		function AI($IDKhachHang,$IDTheLoai,$Rate)
		{
			
			$this->idkhachhang=$IDKhachHang;
			$this->idtheloai=$IDTheLoai;
			$this->rate=$Rate;
			
		}
	}
			
	$mangAI=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangAI, new AI($row['IDKhachHang'],$row['IDTheLoai'],$row['Rate']));
			
	}
	
	echo json_encode($mangAI);
			
		

?>