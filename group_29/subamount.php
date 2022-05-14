<?php
    session_start();
    $member_no=$_SESSION['no'];
    $goods_No=$_GET["product_no"];
    $amount=$_GET["amount"];
    if($amount=='1')
    {
        header('Location: shopping.php');
    }   
    else
    {
        $amount=(int)$amount-1;
        
    } 
    

    $link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");
						
	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

	$sql = "update shoppingcar set amount = ".$amount." where member_No =". $member_no." and goods_No = ".$goods_No."";
    // echo $sql ;
    // echo $amount ;
    $result = mysqli_query($link, $sql)	;
    header('Location: shopping.php');
	
?>