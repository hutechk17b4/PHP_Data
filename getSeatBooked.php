<?php 

	require "dbConBook.php";

	
	$seat_collumn=$_POST['seat_collumnPost'];//filter_input(INPUT_POST, "IDSeatPost");//"2";//
	$IDLichTrinh=$_POST['IDLichTrinhPost'];//filter_input(INPUT_POST, "IDLichTrinhPost");//"1";//
	$seat_row=$_POST['seat_rowPost'];
	$IDseat_no=$_POST['IDseat_noPost'];
	$SeatID=$_POST['SeatIDPost'];
	$IDrap=$_POST['IDrapPost'];

	$query="SELECT seat_collumn,IDLichTrinh,seat_row,IDseat_no,SeatID,Status,IDrap FROM seat_booked WHERE IDLichTrinh='".$IDLichTrinh."' AND seat_collumn='".$seat_collumn."'  AND seat_row='".$seat_row."' AND IDseat_no='".$IDseat_no."' AND SeatID='".$SeatID."' AND IDrap='".$IDrap."' ";

	$result=mysqli_query($connect,$query);

	// if($data=mysqli_fetch_array($result))
	// {
	// 	echo "success";
	// }
			

	class seatbooked
	{
		function seatbooked($seat_collumn,$seat_row,$IDLichTrinh,$IDseat_no,$SeatID,$IDrap,$Status)
		{
			
			$this->cot=$seat_collumn;
			$this->hang=$seat_row;
			$this->Idlichtrinh=$IDLichTrinh;
			$this->Idseat_no=$IDseat_no;
			$this->seatID=$SeatID;
			$this->IDrap=$IDrap;
			$this->trangthai=$Status;
			

			
		}
	}

	$mangseatbooked=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangseatbooked, new seatbooked($row['seat_collumn'],$row['seat_row'],$row['IDLichTrinh'],$row['IDseat_no'],$row['SeatID'],$row['IDrap'],$row['Status']));
			
	}
	
	echo json_encode($mangseatbooked);
			
	

?>