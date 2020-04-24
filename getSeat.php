<?php 
	require "dbConBook.php";
	
	
	$IDrap=$_POST['IDrapPost'];


	$query="SELECT b.id,collumn_seat,b.seatID,trangthai,IDrap,seat_row FROM seat a, seat_no b WHERE a.seatID=b.seatID AND  IDrap ='".$IDrap."' ";

	
	// if($IDrap=="1")
	// {
		
		
		
	// }


	// if($IDrap=="2")
	// {
	// 	$query="SELECT ID,Soghe,Hangghe FROM seat WHERE (Hangghe='B'OR Hangghe='A' OR Hangghe='C') AND IDrap ='".$IDrap."' ";
		
	// }


		$data=mysqli_query($connect,$query);

		class Seat 
		{
			function Seat($id,$collumn_seat,$seatID,$trangthai,$IDrap,$seat_row)
			{
				$this->Id=$id;
				$this->cot=$collumn_seat;
				$this->seatid=$seatID;
				$this->status=$trangthai;
				$this->idrap=$IDrap;
				$this->hang=$seat_row;
			}
		}

	//============================

		$mangSeat=array();

	//=======================
		while ($row=mysqli_fetch_assoc($data)) {
			array_push($mangSeat, new Seat($row['id'],$row['collumn_seat'],$row['seatID'],$row['trangthai'],$row['IDrap'],$row['seat_row']));
		}



		echo  json_encode($mangSeat);






	//===============================
	


	//======= tạo clas
?>