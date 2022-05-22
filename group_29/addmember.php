<?php
    $account=$_POST['account'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];          

    $link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
		or die("無法開啟MySQL資料庫連結!<br>");   
    //$total_records=mysqli_num_rows($result);查詢總共有幾筆資料   	
    // 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

    $sql = "SELECT * FROM member ORDER BY mem_no DESC";
    $result = mysqli_query($link, $sql);
    mysqli_data_seek($result, 0 );	 
    $row = mysqli_fetch_row($result);
    $temp=$row[9];//紀錄mem_no現在有多少個

	$sql = "insert into member (`mem_account`, `mem_code`, `mem_name`, `mem_email`,`mem_level`, `mem_no`) 
                        values ('" . $account . "','" . $pwd . "','" . $account . "','" .$email. "','" . 1 . "','" . $temp+1 . "')";
    //echo "<script> {window.alert('註冊成功');history.go(-1)} </script>";//返回上頁
    echo "<script> {window.alert('註冊成功');location.href='login.php'} </script>";//返回上頁
	$result = mysqli_query($link, $sql)	;
	// if ($num = mysqli_num_rows($result))	
	// {		
	// 	echo "<script> {window.alert('已經在購物車了');history.go(-1)} </script>";//返回上頁		
	// }
	// else
	// {		
	// 	echo "<script> {window.alert('加入成功');history.go(-1)} </script>";//返回上頁
	 	
	// }
				
		mysqli_close($link); // 關閉資料庫連結
?>
