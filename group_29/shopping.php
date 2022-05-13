<?php
    if(array_key_exists($tmep, $_POST)) {
        add();
    }
    function subtract()
    {
        echo'測試文字';           
    }
     function add()
    {
        echo'測試文字2';        
    }
?>

<?php
session_start();
// echo "user = " . $_SESSION['no'] ;
?>

<?php

$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

// // 資料庫查詢(送出查詢的SQL指令)
$no=$_SESSION['no'];
if ($result = mysqli_query($link, "SELECT * FROM shoppingcar s, product_list p, member m WHERE s.goods_No = p.goods_No and s.member_No = $no and s.member_No = m.no")) {
    while ($row = mysqli_fetch_assoc($result)) {  
        $total = (int)$row["price"]* (int)$row["amount"];
        // $amount = (int)$row["amount"];
        // $tmep=$row["goods_No"];
        $rows .= "<tr>
        <td> <img src='".$row["picture"]."' alt='...' width='100px;'> </td>
        <td>" . $row["goods_name"] . "</td>
        <td>$" .$row["price"] . "</td>
        <td><button type='button' name='".$row["goods_No"] ."' value='1' onclick='subtract()' >-</button>" .' '.$row["amount"] .' '. "<button type='button'>+</button></td>
        <td>$" . $total. "</td>
        <td><button type='input' class='btn'>移除</button></td>
    </tr>";
        // $rows .= "<tr><td>" . $row["goods_No"] .  "</td><td>" . $row["amount"] . "</td></tr>";
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
    <link rel="stylesheet" href="css/shopping.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
   
</head>

<body>
     <!--購物車+-數量 -->
  
     
       

  
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
                <h3 class="">購物車</h3>
            </div>
        </div>
    </div>



    <!---Pay-Page-->
    <hr>
    <div class="container mt-5">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div id="collapseOne" class="collapse show " aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th width="100"></th> <!-- 放圖片用的 -->
                                <th>商品名稱</th>
                                <th>單價</th>
                                <th>數量</th>
                                <th>小計</th>
                                <th width="20"></th> <!-- 放刪除的符號 -->
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 商品資訊 -->
                            <tr >                               
                                <td class="align-middle">                                   
                                        <img src="image\123.jpg" alt="..." width=100px height="100px;">                                    
                                </td>
                                <td >一級偽裝帽</td>
                                <td class="align-items-center" >$999</td>
                                <td >                                                                    
                                    <button  onclick="subtract()">-</button>
                                    1
                                    <button type="button" onclick="add()" name="temp">+</button>                                    
                                </td>
                                <td class="align-middle">$999</td>                                
                                <td><button type="input" class="btn btn-xs btn-round btn-dark">移除</button></td>                                 

                            </tr>
                            <?php echo $rows; ?>
                            <tr class="text-right">
                                <td colspan="4"><strong>運費</strong></td>
                                <td><strong>$ 60</strong></td>
                            </tr>
                            <tr class="text-right">
                                <td colspan="4"><strong>合計</strong></td>
                                <td><strong>$ 1059</strong></td>
                            </tr>

                            
                        </tbody>



                    </table>


                </div>
            </div>
        </div>
    </div>



    <!---Finish-Page-->
    <hr>
    <div class="container mt-5">
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary px-5">結帳</a>
        </div>
    </div>

    <!-- All js plugins here -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>