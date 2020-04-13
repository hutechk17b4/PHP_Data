<?php 
	require "dbConBook.php";

	$IDphim=$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT IDphim,IDrap,Start_time FROM lichtrinh WHERE IDphim='".$IDphim."'";

	$result=mysqli_query($connect,$query);

	if($data=mysqli_fetch_array($result))
	{
		echo 'success';
	}
?>