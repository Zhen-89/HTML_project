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

    if(isset($_POST['div_upload']))
    {
        $imgname = $_FILES['div_upload']['name'];
        $tmp = $_FILES['div_upload']['tmp_name'];
        $filepath = 'picture/Product/';
            if(move_uploaded_file($tmp,$filepath.$imgname)){
            echo "接收成功";
            }else
        {
            echo "接收失敗";
        }
    }
    $goods_Noo=$_GET["product_no"];
    $link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");
						
    
	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
    if(isset($_POST['div_upload']))
	    $sql = "update product_list set goods_name = '".$_POST["sell-name"]."' , type = '". $_POST['sell_type'] ."' , describee = '". $_POST['sell-introduction'] ."' , specification = '".$_POST['sell-sepcify']."' , price = '".$_POST['sell-price']."' , picture = 'picture/Product/" . $imgname . "' where goods_No =". $goods_Noo." ";
    else
        $sql = "update product_list set goods_name = '".$_POST["sell-name"]."' , type = '". $_POST['sell_type'] ."' , describee = '". $_POST['sell-introduction'] ."' , specification = '".$_POST['sell-sepcify']."' , price = '".$_POST['sell-price']."' where goods_No =". $goods_Noo." ";
        // echo $sql ;
    // echo $amount ;
    $result = mysqli_query($link, $sql)	;

    header('Location: selllist.php');
    mysqli_close($link); // 關閉資料庫連結
     
	
?>