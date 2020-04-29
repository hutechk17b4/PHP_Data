<?php 

	require "dbConBook.php";

	$TenDangNhap=filter_input(INPUT_POST, "TenDangNhapKH");
//	$MatKhau=filter_input(INPUT_POST, "MatKhauKH");


	$query="SELECT IDKhachHang FROM khachhang WHERE TenDangNhap='".$TenDangNhap."'";

	$result=mysqli_query($connect,$query);

	class KhachHang
	{
		function KhachHang($IDKhachHang)
		{
			$this->IdKH=$IDKhachHang;
		
			
		}
	}

	$mangKH=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangKH, new KhachHang($row['IDKhachHang']));
			
	}
	
	echo json_encode($mangKH);
			
	

?>