<?php
$account = trim($_POST['account']) ;
$link = mysqli_connect("localhost","root","root123456","group_29")// 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

$sql = "SELECT * FROM member where mem_account='$account' ";// 指定SQL查詢字串

mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

// 送出查詢的SQL指令
if ( $result = mysqli_query($link, $sql) ) {
    if( $row = mysqli_fetch_assoc($result) ) echo "此帳號已存在!";
    mysqli_free_result($result); // 釋放佔用的記憶體
}
mysqli_close($link); // 關閉資料庫連結
?>