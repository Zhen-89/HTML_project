<?php
    session_start();
    if(isset($_SESSION["no"]))
    {
        $no=$_SESSION["no"];	
    }   
    
    if( $_POST['takemode']=="0")
    {
        $takemode="超商取貨(7-11)";
    }
    else
    {
        $takemode="宅配";        
    } 
    if( $_POST['takemode']=="0")
    {
        $paymode="信用卡";
    }
    else
    {
        $paymode="貨到付款";        
    } 
    $address=$_POST['address1'];    
    $link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
    or die("無法開啟MySQL資料庫連結!<br>");

    $sql = "SELECT * FROM order_form ORDER BY order_No DESC";
    $result = mysqli_query($link, $sql);
    mysqli_data_seek($result, 0 );	 
    $row = mysqli_fetch_row($result);
    $temp=$row[1];//紀錄mem_no現在有多少個

    $sql="SELECT * FROM shoppingcar s, product_list p  WHERE s.goods_No = p.goods_No and s.member_No = $no ";     
    if ($result = mysqli_query($link, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {  
            $total = (int)$row["price"]* (int)$row["amount"];        
            $sum = $sum+$total;  
            $sql1 = "insert into order_detail values ('" . $no . "','" . ($temp+1) . "','" . $row["goods_name"] .  "','" . $row["amount"] . "','" . $row["goods_No"] . "')";	//訂單細節          
            mysqli_query($link, $sql1);
        }       
    }

    $sql="DELETE  FROM shoppingcar  WHERE  member_No = $no ";//刪除購物車
    $result = mysqli_query($link, $sql);

    

    $sql = "insert into order_form values ('" . $no . "','" . ($temp+1) . "','" . $takemode .  "','" . $paymode ."','" . ($sum+60) .  "','" . "出貨處理中" ."','" . "0"."')";	//加入訂單
    $result = mysqli_query($link, $sql);

    

    mysqli_close($link);    
    echo "<script> {window.alert('訂單完成');location.href='index.php'} </script>";//返回上頁
?>