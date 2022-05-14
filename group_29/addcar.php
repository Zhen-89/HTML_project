<?php 	
	session_start();
	$level=$_SESSION['level'];
	$member_no=$_SESSION['no'];
	$goods_No=$_GET["product_no"];
	
	if ($_SESSION['level'] =='2') {
		echo "<script> {window.alert('管理員還想買東西啊!');location.href='index.php'} </script>";//返回登入頁面
	}
	else if ($_SESSION['level'] !='1')
	{
		echo "<script> {window.alert('請先登入!');location.href='login.php'} </script>";//返回登入頁面
	}
	else
	{
		$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
		or die("無法開啟MySQL資料庫連結!<br>");
							
		// 送出編碼的MySQL指令
		mysqli_query($link, 'SET CHARACTER SET utf8');
		mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
		$sql = "insert into shoppingcar values ('" . $member_no . "','" . $goods_No . "','" . "1" . "','" ."0" . "')";	
		$result = mysqli_query($link, "SELECT * FROM shoppingcar s WHERE s.goods_No = '".$_GET["product_no"]."'  and s.member_No = $member_no");
		if ($num = mysqli_num_rows($result))	
		{		
			echo "<script> {window.alert('已經在購物車了');history.go(-1)} </script>";//返回上頁
			// echo "<script> {window.alert('已經在購物車了');location.href='pro_key.php'} </script>";
			// echo "<script> {window.alert($temp);location.href='pro_key.php'} </script>";//測試有沒有抓到member_no
		}
		else
		{
			// echo "<script> {window.alert('加入成功');location.href='pro_key.php'} </script>";
			
			
			echo "<script> {window.alert('加入成功');history.go(-1)} </script>";//返回上頁

			$result = mysqli_query($link, $sql)	;
		}

		
						
		mysqli_close($link); // 關閉資料庫連結
	}
	// echo "user = " .$level ;	

	
?>
<!-- <meta http-equiv="refresh" content="0;url=index.php"> -->
</meta>