<?php 
		require "dbConBook.php";

	$IDSeat=$_POST['IDSeatPost'];//filter_input(INPUT_POST, "IDSeatPost");//"2";//
	$IDLichTrinh=$_POST['IDLichTrinhPost'];//filter_input(INPUT_POST, "IDLichTrinhPost");//"1";//

	$query="INSERT INTO seat_no VALUES(null,'$IDSeat','$IDLichTrinh')";


	

	if(mysqli_query($connect,$query))
	{
		//thành công
		echo "success";
	}
?>