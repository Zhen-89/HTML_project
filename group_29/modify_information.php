<?php
    session_start();
    $no=$_SESSION["no"];	

    //$account = trim($_POST['account']) ;
    $birth = trim($_POST['birth']) ; 
    $birth="N'".$birth."'";
    $name = trim($_POST['name']) ;
    $name="N'".$name."'";   
    $mobile = ($_POST['mobile']) ;
    $mobile="N'".$mobile."'";   
    $tel =  ($_POST['tel']) ;
    $tel="N'".$tel."'";   
    $Location = trim($_POST['Location']) ;
    $Location="N'".$Location."'";
    $link = mysqli_connect("localhost","root","root123456","group_29")// 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

   // $sql = "SELECT * FROM member where mem_no='$no' ";// 指定SQL查詢字串
    $sql = "update member set mem_birth = ".$birth." , mem_name =".$name." , mem_mobile = ".$mobile." , mem_phone = ".$tel." , mem_location = ".$Location."
    where mem_no =". $no." ";

    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link,"SET collation_connection = 'utf8_unicode_ci'");

    //echo $sql;
    mysqli_query($link, $sql);

    echo "<script> {window.alert('修改成功');history.go(-1)} </script>";//返回上頁

    mysqli_close($link); // 關閉資料庫連結
?>