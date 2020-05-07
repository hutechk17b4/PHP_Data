<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$ID=$_POST['IDngaychieuPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT ngaychieuphim FROM ngay_chieu WHERE ID='".$ID."' ";

	$result=mysqli_query($connect,$query);

	
	class Ngay
	{
		function Ngay($ngaychieuphim)
		{
			
			$this->ngaychieu=$ngaychieuphim;
			
		}
	}
			
	$mangngay=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangngay, new Ngay($row['ngaychieuphim']));
			
	}
	
	echo json_encode($mangngay);
			
		
	

	
	
	
?>