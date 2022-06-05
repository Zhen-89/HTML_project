<?php
    session_start();    
    $m_no=$_SESSION["no"];
    $o_no = $_GET["order_no"];
    echo $o_no;

    $link = mysqli_connect("localhost","root","root123456","group_29")// 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

    // $sql = "SELECT * FROM member where mem_no='$no' ";// 指定SQL查詢字串
    $result = mysqli_query($link, "SELECT * FROM order_form WHERE state_code = '"."1"."' and order_No=".$o_no."");
    if ($num = mysqli_num_rows($result))	
    {
        echo "<script> {window.alert('已經申請了');history.go(-1)} </script>";//返回上頁
    }
    else
    {
        echo "<script> {window.alert('申請成功');history.go(-1)} </script>";//返回上頁
    }

    $sql = "update order_form set state = "."N'退貨申請中'"." , state_code ="."1"." WHERE order_No=".$o_no." ";

    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

    //echo $sql;
    mysqli_query($link, $sql);
    
    
    mysqli_close($link); // 關閉資料庫連結
        

?>