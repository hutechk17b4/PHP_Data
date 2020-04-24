<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$IDphim=$_POST['IDphimPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT ID,ngaychieuphim FROM ngay_chieu WHERE IDphim='".$IDphim."' ";

	
	$result=mysqli_query($connect,$query);

	if($data=mysqli_fetch_array($result))
	{
		echo "success";
	}
			
		
	

	
	
	
?>