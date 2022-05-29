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
 if(isset($_POST['div_upload1']))
 {
    $imgname1 = $_FILES['div_upload1']['name'];
    $tmp1 = $_FILES['div_upload1']['tmp_name'];
    $filepath1 = 'picture/';
    if(move_uploaded_file($tmp1,$filepath1.$imgname1)){
      echo "接收成功";
    }else
      {
        echo "接收失敗";
      }
 }
 if(isset($_POST['div_upload2']))
{
    $imgname2 = $_FILES['div_upload2']['name'];
    $tmp2 = $_FILES['div_upload2']['tmp_name'];
    $filepath2 = 'picture/';
    if(move_uploaded_file($tmp2,$filepath2.$imgname2)){
      echo "接收成功";
    }else
      {
        echo "接收失敗";
      }
}

$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");
  $bul_Noo=$_GET["bul_no"];
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

// // 資料庫查詢(送出查詢的SQL指令)
    if(isset($_POST['div_upload1'])&&isset($_POST['div_upload2']))
	    $sql = "update bulletin set intro_title = '".$_POST["sell-name"]."' ,  intro_content = '". $_POST['sell-introduction'] ."' , intro_picture = 'picture/" . $imgname1 . "' , type = '".$_POST['sell_type']."' , slider_title = '".$_POST['sell-topname']."'  , slider_picture = 'picture/" . $imgname2 . "' where bul_No =". $bul_Noo." ";
    else if(isset($_POST['div_upload1']))
        $sql = "update bulletin set intro_title = '".$_POST["sell-name"]."' ,  intro_content = '". $_POST['sell-introduction'] ."' , intro_picture = 'picture/" . $imgname1 . "' , type = '".$_POST['sell_type']."' , slider_title = '".$_POST['sell-topname']."'  where bul_No =". $bul_Noo."";
    else if(isset($_POST['div_upload2']))
        $sql = "update bulletin set intro_title = '".$_POST["sell-name"]."' ,  intro_content = '". $_POST['sell-introduction'] ."' , type = '".$_POST['sell_type']."' , slider_title = '".$_POST['sell-topname']."'  , slider_picture = 'picture/" . $imgname2 . "' where bul_No =". $bul_Noo."";
    else
        $sql = "update bulletin set intro_title = '".$_POST["sell-name"]."' ,  intro_content = '". $_POST['sell-introduction'] ."' ,  type = '".$_POST['sell_type']."' , slider_title = '".$_POST['sell-topname']."' where bul_No =". $bul_Noo." ";
    
        // echo $sql ;
    // echo $amount ;
    $result = mysqli_query($link, $sql)	;
     

mysqli_close($link); // 關閉資料庫連結

header('Location: annolist.php');
?>
