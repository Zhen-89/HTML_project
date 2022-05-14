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
 $imgname = $_FILES['div_upload']['name'];
 $tmp = $_FILES['div_upload']['tmp_name'];
 $filepath = 'picture/';
 if(move_uploaded_file($tmp,$filepath.$imgname)){
   echo "接收成功";
 }else
   {
     echo "接收失敗";
   }


$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

// // 資料庫查詢(送出查詢的SQL指令)
if ($result = mysqli_query($link, "SELECT * FROM bulletin  ORDER BY bul_No DESC LIMIT 0 , 1 ")) {
  while ($row = mysqli_fetch_row($result)) {
    $rows .=  $row["0"];
}
  
  $num = mysqli_num_rows($result); //查詢結果筆數
  mysqli_free_result($result); // 釋放佔用的記憶體
}


//資料庫新增存檔
if (isset($_POST['sell-name'])) {
    $sql = "INSERT INTO bulletin VALUES ('" . $rows+1 ."','" . $_POST['sell-name'] . "','" . $_POST['sell-introduction'] . "','picture/" . $imgname . "')";

    if ($result = mysqli_query($link, $sql)) // 送出查詢的SQL指令
    {
        $msg = "<span style='color:#0000FF'>資料新增成功!</span>";
    } else {
        $msg = "<span style='color:#FF0000'>資料新增失敗！<br>錯誤代碼：" . mysqli_errno($link) . "<br>錯誤訊息：" . mysqli_error($link) . "</span>";
    }

}
mysqli_close($link); // 關閉資料庫連結


?>

<meta http-equiv="refresh" content="0;url=annolist.php">