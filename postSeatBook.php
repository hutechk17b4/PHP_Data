<?php 
		require "dbConBook.php";

	$seat_collumn=$_POST['seat_collumnPost'];//filter_input(INPUT_POST, "IDSeatPost");//"2";//
	$IDLichTrinh=$_POST['IDLichTrinhPost'];//filter_input(INPUT_POST, "IDLichTrinhPost");//"1";//
	$seat_row=$_POST['seat_rowPost'];
	$IDseat_no=$_POST['IDseat_noPost'];
	$SeatID=$_POST['SeatIDPost'];
	$IDrap=$_POST['IDrapPost'];



	$query="INSERT INTO seat_booked VALUES(null,'$seat_collumn','$seat_row','$IDLichTrinh',null,'$IDseat_no','$SeatID','$IDrap')";

	//$query2="INSERT INTO phim(`IDphim`,`TenPhim`) SELECT * FROM(SELECT ?,?) as tmp WHERE NOT EXISTS(SELECT `IDphim`,`TenPhim` FROM phim WHERE IDphim = '?')LIMIT 1;";
	

	if(mysqli_query($connect,$query))
	{
		//thành công
		echo "success";
	}
?>