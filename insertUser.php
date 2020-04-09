<?php
	require "dbConBook.php";

	$TenDangNhap=$_POST['TenDangNhapKH'];//"someone";//			
	$MatKhau=$_POST['MatKhauKH'];//"8676";//			
	$Email=$_POST['EmailKH'];	//"someone@gmail.com";//		

	$query="INSERT INTO khachhang VALUES(null,'$TenDangNhap','$MatKhau',null,'$Email',null,null)";

	if(mysqli_query($connect,$query))
	{
		//thành công
		echo "success";
	}
	else {
		# code...
		echo "erro";
	}
?>