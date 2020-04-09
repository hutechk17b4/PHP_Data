<?php 
	require "dbConBook.php";

	$TenDangNhap=$_POST['TenDangNhapKH'];//filter_input(INPUT_POST, "TenDangNhap");//"nguyen"
	$MatKhau=$_POST['MatKhauKH'];//filter_input(INPUT_POST, "MatKhau");
	$Email=$_POST['EmailKH'];//filter_input(INPUT_POST, "Email");


	$query="SELECT * FROM khachhang";
	
	$result=mysqli_query($connect,$query);


//$mangTenDN= array(); 
//3 thêm phần tử vào mảng
	while ($row=mysqli_fetch_assoc($result)) {
		//print $row['TenDangNhap'];
		if($row['TenDangNhap'] == $TenDangNhap || $row['Email'] == $Email)
		{
			echo '1';
		}

	}



		



//	echo  json_encode($mangTenDN);
?>