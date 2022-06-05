<?php
session_start();

if ($_SESSION['level'] != '2') {
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
$sql="SELECT * FROM order_form where state_code = 1 order by order_No";
$times=0;
// // 資料庫查詢(送出查詢的SQL指令)
if ($result = mysqli_query($link, $sql)) {
    $num = mysqli_num_rows($result); 
    $title .="<h3 class='panel-title clearfix'>                                
    <span><b>"."共".$num."筆訂單"."</b></span>
    </h3> ";
    while ($row = mysqli_fetch_row($result)) {
        //order_detail
        $sql_d="SELECT * FROM order_detail d  WHERE d.o_NO = '".$row["1"]."' and d.m_No = '".$row["0"]."'  ";
   
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
                    <td rowspan=$i><button type='input' name='".$row["goods_No"] ."' class='btn' onclick='location.href=\"adminreturn.php?order_no=" .$row["1"] . "\"'>接受</button></td>
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
<html lang="">

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
    <link rel="stylesheet" href="css/admin.css">



</head>

<body>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    
    <!-- header start -->
		<?php include("_header.php") ;?>
	<!-- header end -->
    
    <div class="basic-breadcrumb-area gray-bg ptb-70">
        <div class="container">
            <div class="basic-breadcrumb text-center">
                <h3 class="">管理者</h3>
            </div>
        </div>
    </div>
    <div class="basic-contact-form ptb-90" style="padding:0px;">
        <div class="container">
            <div id="top-menu">
                <div id="member_center" class="clearfix">
                <form name="form1" action="selllist.php" method="GET">
                    <button class="member_btn">管理中心</button>
                    <!-- <input type="text" placeholder="輸入商品名稱" name="who">
                    <button type="submit"><i class="fa fa-search"></i></button> -->
                </form>
                </div>
            </div>
        </div>
    </div>
    <div class="basic-contact-form ptb-70" style="padding-top:0px;">
        <div class="container">
            <div id="leftMenu">
                <ul id="leftMenu_ul">
                    <li id="userInfo" class="menu-nav">
                        <strong id="strong_userInfo">會員</strong>
                        <ul id="userInfo" >
                            <li>
                                <a href="memberlist.php">會員總覽</a>
                            </li>

                        </ul>
                    </li>
                    <li id="li_buy" class="menu-nav">
                        <strong id="strong_buy">商品</strong>
                        <ul id="buy">
                            <li >
                                <a href="selllist.php">商品列表</a>
                            </li>
                            <li>
                                <a href="addsell.php">新增商品</a>
                            </li>
                            <li>
                                <a href=""></a>
                            </li>

                        </ul>
                    </li>
                    <li id="li_Order" class="menu-nav">
                        <strong id="strong_Order">訂單</strong>
                        <ul id="Order">
                            <li class="navS">
                                <a href="adminorder.php">退貨處理</a>
                            </li>

                        </ul>
                    </li>
                    <li id="li_anno" class="menu-nav">
                        <strong id="strong_anno">資訊</strong>
                        <ul id="anno">
                            <li>
                                <a href="annolist.php">公告列表</a>
                            </li>
                            <li >
                                <a href="addanno.php">新增公告</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-Content" id="rightContent">
                <div class="clearfix " id="Contentsell">
                    <ul class="nav " style="position:relative; display: flex;">
                        <li class="blank">&nbsp;</li>
                        <li class="">
                            <a href="">
                                <span>訂單
                                </span>
                            </a>
                        </li>
                    </ul>
                    <?php echo $title; ?>
                    <?php echo $rows; ?>
                </div>
                
            
            </div>
        </div>
    </div>
    </div>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>