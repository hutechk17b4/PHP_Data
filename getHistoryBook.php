<?php 

	require "dbConBook.php";

	$IDKhachHang=$_POST['IDKhachHangPost'];
	


	$query="SELECT IDBooking,TimeCreate FROM booking WHERE IDKhachHang='".$IDKhachHang."'";

	$result=mysqli_query($connect,$query);

	class KhachHang
	{
		function KhachHang($TimeCreate,$IDBooking)
		{
			$this->IDbooking=$IDBooking;
			$this->Timecreate=$TimeCreate;

		
			
		}
	}

	$mangKH=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangKH, new KhachHang($row['TimeCreate'],$row['IDBooking']));
			
	}
	
	echo json_encode($mangKH);
			
	

?>