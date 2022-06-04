<?php
session_start();

if ($_SESSION['level'] != '2') {
?>

  <meta http-equiv="refresh" content="0;url=login.php">
  </meta>
<?php
}
?>
<?php
   
    $com=$_GET["change_comment"];
    $pro=$_GET["product_no"];
    $link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");
						
	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
	$sql = "update  comment set content = '".$_POST["sell-introduction"]."' where com_No = ".$com."  ";
        // echo $sql ;
    // echo $amount ;
    $result = mysqli_query($link, $sql)	;

    
    mysqli_close($link); // 關閉資料庫連結
    header('Location: product_intro.php?product_no='.$pro.'');
	
?>