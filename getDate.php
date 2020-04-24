<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$IDphim=$_POST['IDphimPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT * FROM ngay_chieu WHERE IDphim='".$IDphim."' ";

	$result=mysqli_query($connect,$query);

	
	class date
	{
		function date($ID,$ngaychieuphim,$IDphim)
		{

			$this->Id=$ID;
			$this->ngaychieu=$ngaychieuphim;
			$this->Idphim=$IDphim;
			
		}
	}
			
	$mangNgayChieu=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangNgayChieu, new date($row['ID'],$row['ngaychieuphim'],$row['IDphim']));
			
	}
	
	echo json_encode($mangNgayChieu);
			
		
	

	
	
	
?>