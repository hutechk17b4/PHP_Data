<?php 
		require "dbConBook.php";

	$IDKhachHang=$_POST['IDKhachHangPost'];//filter_input(INPUT_POST, "IDSeatPost");//"2";//

	$IDTheLoai=$_POST['IDTheLoaiPost'];

	
	


	$query="INSERT INTO data_ai VALUES(null,'$IDTheLoai','$IDKhachHang')";

	//$query2="INSERT INTO phim(`IDphim`,`TenPhim`) SELECT * FROM(SELECT ?,?) as tmp WHERE NOT EXISTS(SELECT `IDphim`,`TenPhim` FROM phim WHERE IDphim = '?')LIMIT 1;";
	

	if(mysqli_query($connect,$query))
	{
		//thành công
		echo "success";
	}
?>