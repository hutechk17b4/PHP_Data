<?php 
		require "dbConBook.php";

	$IDKhachHang=$_POST['IDKhachHangPost'];//filter_input(INPUT_POST, "IDSeatPost");//"2";//

	$TimeCreate=$_POST['TimeCreatePost'];

	$IDseat_no=$_POST['IDSeat_noPost'];
	$TenPhim=$_POST['TenPhimPost'];
	$IDLichTrinh=$_POST['IDLichTrinhPost'];
	


	$query="INSERT INTO booking VALUES(null,'$IDKhachHang','$TimeCreate',null,null,'$IDseat_no','$TenPhim','$IDLichTrinh')";

	//$query2="INSERT INTO phim(`IDphim`,`TenPhim`) SELECT * FROM(SELECT ?,?) as tmp WHERE NOT EXISTS(SELECT `IDphim`,`TenPhim` FROM phim WHERE IDphim = '?')LIMIT 1;";
	

	if(mysqli_query($connect,$query))
	{
		//thành công
		echo "success";
	}
?>