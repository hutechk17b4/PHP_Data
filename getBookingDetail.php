<?php 

	require "dbConBook.php";

	
	//$IDBooking=$_POST['idbookingpost'];//filter_input(INPUT_POST, "IDSeatPost");//"2";//
	$IDKhachHang=$_POST['idkhachhangpost'];//filter_input(INPUT_POST, "IDLichTrinhPost");//"1";//
	

	$query="SELECT IDBooking,IDKhachHang,TimeCreate,IDseat_no,TenPhim,IDLichTrinh FROM booking WHERE IDKhachHang='".$IDKhachHang."' ";

	$result=mysqli_query($connect,$query);

	// if($data=mysqli_fetch_array($result))
	// {
	// 	echo "success";
	// }
			

	class detailBook
	{
		function detailBook($IDBooking,$IDKhachHang,$TimeCreate,$IDseat_no,$TenPhim,$IDLichTrinh)
		{
			
			$this->idbooking=$IDBooking;
			$this->idkhachhang=$IDKhachHang;
			$this->timecreate=$TimeCreate;
			$this->Idseat_no=$IDseat_no;
			$this->tenphim=$TenPhim;
			$this->idlichtrinh=$IDLichTrinh;
			

			
		}
	}

	$mangbookdetail=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangbookdetail, new detailBook($row['IDBooking'],$row['IDKhachHang'],$row['TimeCreate'],$row['IDseat_no'],$row['TenPhim'],$row['IDLichTrinh']));
			
	}
	
	echo json_encode($mangbookdetail);
			
	

?>