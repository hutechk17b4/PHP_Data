<?php 
	require "dbConBook.php";
	$query="SELECT ID,Soghe,Hangghe FROM seat WHERE Hangghe='B'";

	$data=mysqli_query($connect,$query);


	//======= tạo class

	
	class Seat 
	{
		function Seat($ID,$Soghe,$Hangghe)
		{
			$this->Id=$ID;
			$this->SoGhe=$Soghe;
			$this->HangGhe=$Hangghe;
		}
	}

	//============================

	$mangSeat=array();

	//=======================
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($mangSeat, new Seat($row['ID'],$row['Soghe'],$row['Hangghe']));
	}

	//===============================
	echo  json_encode($mangSeat);
?>