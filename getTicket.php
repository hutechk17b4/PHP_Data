<?php 

	require "dbConBook.php";

	
	
	$seatID=$_POST['seatIDPost'];
	$IDrap=$_POST['IDrapPost'];

	$query="SELECT * FROM ticket WHERE IDrap='".$IDrap."' AND seatID='".$seatID."'  ";

	$result=mysqli_query($connect,$query);

	class Ticket
	{
		function Ticket($IDTicket,$GiaVe,$Loai)
		{
			$this->IDticket=$IDTicket;
			$this->gia=$GiaVe;
			$this->loai=$Loai;

		
			
		}
	}

	$mangTicket=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangTicket, new Ticket($row['IDTicket'],$row['GiaVe'],$row['Loai']));
			
	}
	
	echo json_encode($mangTicket);
			
	

?>