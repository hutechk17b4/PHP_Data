<?php 

	require "dbConBook.php";

	$TenDangNhap=filter_input(INPUT_POST, "TenDangNhapKH");
	$MatKhau=filter_input(INPUT_POST, "MatKhauKH");


	$query="SELECT IDKhachHang,TenDangNhap,Email FROM khachhang WHERE TenDangNhap='".$TenDangNhap."' AND MatKhau='".$MatKhau."'";

	$result=mysqli_query($connect,$query);

	class KhachHang
	{
		function KhachHang($IDKhachHang,$TenDangNhap,$Email)
		{
			$this->IdKH=$IDKhachHang;
			$this->TenDN=$TenDangNhap;
			$this->Mail=$Email;
			
		}
	}

	$mangKH=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangKH, new KhachHang($row['IDKhachHang'],$row['TenDangNhap'],$row['Email']));
			
	}
	
	echo json_encode($mangKH);
			
	

?>