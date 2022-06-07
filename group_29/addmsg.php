<?php 	
	session_start();
	if ($_SESSION['level'] == '0') {
		echo "<script> {window.alert('請先登入');} </script>";
	?>
		<meta http-equiv="refresh" content="0;url=login.php">
		</meta>
	<?php
	}
	$level=$_SESSION['level'];
	$member_no=$_SESSION['no'];
	$goods_No=$_GET["product_no"];
    $content =$_POST['content'] ;
    $time    =date('Y-m-d') ;
	
	
	$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");
							
	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
		
	$result = mysqli_query($link, "SELECT * FROM comment");
	$num = mysqli_num_rows($result); //查詢結果筆數
    //mysqli_free_result($result); // 釋放佔用的記憶體
    $result1 = mysqli_query($link, "SELECT * FROM member where mem_no='".$member_no."'");
    while ($row = mysqli_fetch_assoc($result1)) {$acc .=  $row["mem_account"];}
    mysqli_free_result($result1); // 釋放佔用的記憶體 
    // INSERT INTO `comment`(`com_No`, `goods_No`, `user_acc`, `rating`, `content`, `creat_at`) VALUES ('3','014','member','5','好可愛的時鐘!!超愛的，拿來當禮物也不錯!!','2022-5-20')
    $result1 = mysqli_query($link, "SELECT * FROM comment ");
    while ($row = mysqli_fetch_assoc($result1)) {$num =  $row["com_No"];}

	$sql = "insert into comment values ('" . ($num+1) . "','" . $_GET["product_no"] . "','" . $acc . "','" .$_POST["rating"] . "','".$content."','".$time."')";
    $result2 = mysqli_query($link, $sql)	;
	//echo  ;
    echo "<script> {history.go(-1)} </script>";					
	mysqli_close($link); // 關閉資料庫連結
?>