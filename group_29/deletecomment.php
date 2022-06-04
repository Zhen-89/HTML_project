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
$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");

  $pro=$_GET["product_no"];
// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

$sql = "DELETE FROM comment WHERE com_No='".$_GET["change_comment"]."'";

if ($result = mysqli_query($link, $sql)) // 送出查詢的SQL指令
{
    $msg = "<span style='color:#0000FF'>資料刪除成功!</span>";
} else {
    $msg = "<span style='color:#FF0000'>資料刪除失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" . mysqli_error($link) . "</span>";
}

mysqli_close($link); // 關閉資料庫連結

header('Location: product_intro.php?product_no='.$pro.'');
?>
