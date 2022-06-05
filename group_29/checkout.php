<?php
session_start();

if ($_SESSION['level'] != '1' && $_SESSION['level'] != '2') {
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

// // 資料庫查詢(送出查詢的SQL指令)
$no=$_SESSION['no'];
$url="removecar.php";

$sum=60;

if ($result = mysqli_query($link, "SELECT * FROM shoppingcar s, product_list p, member m WHERE s.goods_No = p.goods_No and s.member_No = $no and s.member_No = m.mem_no")) {
    while ($row = mysqli_fetch_assoc($result)) {  
        $sum = $sum+$total;        
    }
    $num = mysqli_num_rows($result); //查詢結果筆數
    mysqli_free_result($result); // 釋放佔用的記憶體
}

mysqli_close($link); // 關閉資料庫連結

if($num == 0)
{
    ?>
  <script> 
alert('目前購物車沒東西~');
window.location.href = "index.php";
</script>
<?php
}
?>


<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>我們都念costco</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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


    <script>
    $(function() {
        $('[name="takemode"][value="0"]').on("change", function() {
            $("#address").hide();
            $("#address1").val(" ");           
        })
        $('[name="takemode"][value="1"]').on("change", function() {
            $("#address").show();
        })
        $('[name="paymode"][value="0"]').on("change", function() {
            $("#card").show();
        })
        $('[name="paymode"][value="1"]').on("change", function() {
            $("#card").hide();
            $("#card1").val(" ");
            $("#card2").val(" ");
            $("#card3").val(" ");
        })
    });
    </script>

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
                <h3 class="">結帳</h3>
            </div>
        </div>
    </div>


    <!-- <input type="text" id="address2" name="address2" class="form-control" placeholder="宅配地址" value=""> -->
    <!---Pay-Page-->
    <div class="basic-contact-form ptb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <form id="form" action="send.php" method="post" onSubmit="CheckForm();">
                        <table class="row" border="1">
                            <div class="col-12 col-lg-12 ">
                                <label for="companyRegistrationID">取貨方式:</label><br>
                                <input type="radio" name="takemode" id="mart-radio" value="0">超商取貨(7-11)&nbsp;&nbsp;
                                <input type="radio" name="takemode" id="home-radio" value="1">宅配
                            </div>
                            <!-- style="display:none;" -->

                            <div class="col-12 col-lg-8 " style="display:none" id="address" name="address">
                                <br><label for="address">宅配地址:</label>
                                <input type="text" id="address1" name="address1" class="form-control" placeholder="宅配地址"
                                    required  value="">

                            </div>
                            <div class="col-12 col-lg-12 ">
                                <br><label for="companyRegistrationID">付款方式:</label><br>
                                <input type="radio" name="paymode" value="0">信用卡
                                <input type="radio" name="paymode" value="1">貨到付款
                            </div>
                            <div class="col-12 col-lg-12" style="display:none" id="card" name="card">
                                <div class="form-group">
                                    <br><label>信用卡:</label>
                                    <div class="form-inline">
                                        <input class="form-control " placeholder="安全碼" maxlength="10" value=""
                                            required="" id="card1" name="card1">
                                        <input class="form-control col-12 col-lg-3"
                                            placeholder="卡號"  value="" required="" id="card2" name="card2">
                                        <input class="form-control col-12 col-lg-3"
                                            placeholder="到期日" value="" required="" id="card3" name="card3">

                                        <label for="state" class="error-check"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12 ">
                                <div class="text-center mt-4">
                                    <button class="btn btn-primary px-5" type="submit">送出</button>
                                </div>
                            </div>
                </div>
                </table>
                </form>
            </div>
        </div>
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