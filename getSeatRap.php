<?php 
	require "dbConBook.php";
	
	
	$IDrap=$_POST['IDrapPost'];

	
	if($IDrap=="1")
	{
		$query="SELECT ID,Soghe,Hangghe FROM seat WHERE (Hangghe='B'OR Hangghe='A') AND IDrap ='".$IDrap."' ";
		
		
	}


	if($IDrap=="2")
	{
		$query="SELECT ID,Soghe,Hangghe FROM seat WHERE (Hangghe='B'OR Hangghe='A' OR Hangghe='C') AND IDrap ='".$IDrap."' ";
		
	}


		$data=mysqli_query($connect,$query);

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



		echo  json_encode($mangSeat);






	//===============================
	


	//======= tạo clas
?>