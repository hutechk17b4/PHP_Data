<?php 
	require "dbConBook.php";

	$IDphim=filter_input(INPUT_POST, "IDphimPost");//"338762";//////////////$_POST['IDphim'];//"338762";//$_POST['IDphim'];// //$_POST['TenDangNhapKH'];
	$query="SELECT IDphim FROM lichtrinh WHERE IDphim='".$IDphim."'";

	$result=mysqli_query($connect,$query);

	if($data=mysqli_fetch_array($result))
	{
		echo "success";
	}


?>