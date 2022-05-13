<?php 
   	
	$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");
						
	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
	$sql = "insert into shoppingcar values ('" . "1" . "','" . "001" . "','" . "1" . "','" ."0" . "')";	
									
	$result = mysqli_query($link, $sql)	;
					
	mysqli_close($link); // 關閉資料庫連結
?>	
<meta http-equiv="refresh" content="0;url=index.php"></meta>