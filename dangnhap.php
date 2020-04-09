<?php
	require "dbConBook.php";

	$TenDangNhap=filter_input(INPUT_POST, "TenDangNhap");
	$MatKhau=filter_input(INPUT_POST, "MatKhau");
	

	$query="SELECT * FROM khachhang WHERE TenDangNhap='".$TenDangNhap."' AND MatKhau='".$MatKhau."'";

	$result=mysqli_query($connect,$query);

	if($data=mysqli_fetch_array($result))
	{
		echo 'success';
	}
	
?>
