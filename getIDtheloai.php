<?php 
	require "dbConBook.php";
	//require "checkLichTrinh.php";

	$IDphim=$_POST['IDPhimPost'];
	//$IDphim='338762';//////////$_POST['IDphim'];//////'338762';////$_POST['IDphim'];//'338762';//$_GET['IDphim'];//'338762';//$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$query="SELECT IDTheLoai,Rate FROM theloaiphim a,phim b WHERE a.IDphim='".$IDphim."' AND a.IDphim=b.IDphim  ";

	$result=mysqli_query($connect,$query);

	
	class IDTheLoai
	{
		function IDTheLoai($IDTheLoai,$Rate)
		{
			
			$this->idtheloai=$IDTheLoai;
			$this->rate=$Rate;
			
		}
	}
			
	$mangIDTheLoai=array();
					

	while ($row=mysqli_fetch_assoc($result)) {
		array_push($mangIDTheLoai, new IDTheLoai($row['IDTheLoai'],$row['Rate']));
			
	}
	
	echo json_encode($mangIDTheLoai);
			
		

?>