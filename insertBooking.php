<?php 
		require "dbConBook.php";

	$IDKhachHang=$_POST['IDKhachHangPost'];//filter_input(INPUT_POST, "IDSeatPost");//"2";//

	$TimeCreate=$_POST['TimeCreatePost'];
	


	$query="INSERT INTO booking VALUES(null,'$IDKhachHang','$TimeCreate',null)";

	//$query2="INSERT INTO phim(`IDphim`,`TenPhim`) SELECT * FROM(SELECT ?,?) as tmp WHERE NOT EXISTS(SELECT `IDphim`,`TenPhim` FROM phim WHERE IDphim = '?')LIMIT 1;";
	

	if(mysqli_query($connect,$query))
	{
		//thành công
		echo "success";
	}
?>