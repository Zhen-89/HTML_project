<?php
session_start();
// echo $_GET["who"];
if ($_SESSION['level'] != '1') {
?>
<meta http-equiv="refresh" content="0;url=login.php">
</meta>
<?php
}
$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

// order_form
$sql="SELECT * FROM order_form f WHERE f.mem_No = '".$_GET["who"]."' ";
$times=0;
// // 資料庫查詢(送出查詢的SQL指令)
if ($result = mysqli_query($link, $sql)) {
    $num = mysqli_num_rows($result); 
    $title .="<h3 class='panel-title clearfix'>                                
    <span><b>"."共".$num."筆訂單"."</b></span>
    </h3> ";
  while ($row = mysqli_fetch_row($result)) {
    //order_detail
    $sql_d="SELECT * FROM order_detail d WHERE d.o_NO = '".$row["1"]."' and d.m_No = '".$_GET["who"]."' ";
   
    $i=0;
    if ($result_d = mysqli_query($link, $sql_d)){
        while ($row_d = mysqli_fetch_row($result_d)){
           
           /* $rows_d .="
            <td class='left'><a href=''>".$row_d["2"]."</a></td>
            <td>".$row_d["3"]."</td>";*/
            $product[$i] ="".$row_d["2"]."";
            $amount[$i] ="".$row_d["3"]."";
            $p_No[$i] ="".$row_d["4"]."";           
            $i=$i+1;
        }
    }
    //echo $product[1];
    $rows_d="";
    for($j=1;$j<$i;$j++)
    {
        $rows_d .="
        <tr>           
            <td class='left'><a href='Product-detail.php?product_no=".$p_No[$j] . "'>".$product[$j]."</a></td>
            <td>".$amount[$j]."</td>            
        </tr>";
    }   
    $times=$times+1;
    $rows .= "
    <div class='mod clearfix'>
        <table border='1' class='table-01'>
            <colgroup>
                <col width='4%'>
                <col width='8%'>     
                <col width='13%'>           
                <col width='12%'>
                <col width='8%'>
                <col width='31%'>
                <col width='5%'>
                <col width='18%'>
                <col width='10%'>
            </colgroup>
            <thead>
                <tr>
                    <th></th>
                    <th>訂單編號</th>
                    <th>取貨時間</th>                   
                    <th>付款方式</th>
                    <th>訂單金額</th>
                    <th>商品名稱</th>
                    <th>數量</th>
                    <th>處理狀態</th>
                    <th>退貨申請</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan=$i>$times</td>
                    <td rowspan=$i>".$row["1"]."</td>                    
                    <td rowspan=$i>".$row["2"]."</td>
                    <td rowspan=$i>".$row["3"]."</td>
                    <td rowspan=$i>".$row["4"]."</td>
                    <td class='left'><a href='Product-detail.php?product_no=".$p_No[0] . "'>".$product[0]."</a></td>
                    <td>".$amount[0]."</td>
                    <td rowspan=$i>".$row["5"]."</td>
                    <td rowspan=$i><button type='input' name='".$row["goods_No"] ."' class='btn' onclick='location.href=\"return.php?order_no=" .$row["1"] . "\"'>退貨</button></td>
                </tr>                
                ".$rows_d."
            </tbody>
            <br></br>
        </table>
    </div> 
    ";
  }
  $num = mysqli_num_rows($result); //查詢結果筆數
  mysqli_free_result($result); // 釋放佔用的記憶體
}

mysqli_close($link); // 關閉資料庫連結
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>我們都念costco</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- All CSS Files Here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- 柏克萊 -->
    <link href="https://jci.book.com.tw/css/books/member/css.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- /PRELOADER -->

    <!-- header start -->
    <?php include("_header.php") ;?>
    <!-- header end -->

    <!-- basic-breadcrumb start -->
    <div class="basic-breadcrumb-area gray-bg ptb-70">
        <div class="container">
            <div class="basic-breadcrumb text-center">
                <h3 class="">訂單查詢</h3>
                <!-- <ol class="breadcrumb text-xs">
						<li><a href="index.php">Home</a></li>
						<li class="active">Contact</li>
					</ol> -->
            </div>
        </div>
    </div>

    <div class="basic-contact-form ptb-50">
        <div class="container ">  
            <div class="container_12 clearfix">
                <div class="grid_12">
                    <!-- breadcrumb  -->
                    <div class="clearfix"></div>
                    <!-- breadcrumb end -->
                </div>
                <div class="clearfix">
                    
                    <div class="grid_12">
                        
                        <div class="mb-2 clearfix">                            
                            <?php echo $title; ?> 
                            <?php echo $rows; ?>                          
                            
                        </div>
                        <!--mod end-->
                    </div><!-- content end -->
                </div>
            </div>
        </div>

        <!-- All js plugins here -->
        <script data-cfasync="false" src="js/email-decode.min.js"></script>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/mail.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
</body>

</html>