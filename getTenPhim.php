<?php 
	require "dbConBook.php";
	//$IDphim=$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT TenPhim FROM phim WHERE IDphim='".$_POST['IDphimPost']."' ";
	$data=mysqli_query($connect,$query);


	class TenPhim 
	{
		function TenPhim($TenPhim)
		{
			$this->tenphim=$TenPhim;
		
		}
	}

	$mangTenPhim=array();


	while ($row=mysqli_fetch_assoc($data)) {
		array_push($mangTenPhim, new TenPhim($row['TenPhim']));
	}


	echo  json_encode($mangTenPhim);

?>