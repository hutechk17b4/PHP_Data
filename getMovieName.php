<?php 
	require "dbConBook.php";
	//$IDphim=$_POST['IDphim'];//'338762'; //$_POST['TenDangNhapKH'];
	$IDngaychieu=$_POST['IDngaychieu'];
	$query="SELECT a.IDphim FROM ngay_chieu a, lichtrinh b WHERE a.ID=b.IDngaychieu AND IDngaychieu='".$IDngaychieu."'   ";
	$data=mysqli_query($connect,$query);


	class IdPhim 
	{
		function IdPhim($IDphim)
		{
			$this->idphim=$IDphim;
		
		}
	}

	$mangIDPhim=array();


	while ($row=mysqli_fetch_assoc($data)) {
		array_push($mangIDPhim, new IdPhim($row['IDphim']));
	}


	echo  json_encode($mangIDPhim);

?>