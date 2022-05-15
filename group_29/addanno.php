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

// // 資料庫查詢(送出查詢的SQL指令)
if ($result = mysqli_query($link, "SELECT * FROM product_list ")) {
  while ($row = mysqli_fetch_row($result)) {
    $rows .= "<option value='".$row["0"]."'>".$row["1"]."</option>";
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


    <!-- All CSS Files Here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    
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
    <!--<div class="basic-contact-form ptb-90" style="padding:0px;">
        <div class="container">
            <div id="top-menu">
                <div id="member_center" class="clearfix">
                    <button class="member_btn">管理中心</button>
                </div>
            </div>
            <div id="top-menu-2">
                <div id="sell-list" class="clearfix">

                </div>
            </div>
        </div>
    </div>-->
    <div class="basic-contact-form ptb-70" style="padding-top:0px;">
        <div class="container">
            <div id="leftMenu">
                <ul id="leftMenu_ul">
                    <div id="member_center" class="clearfix">
                        <button class="member_btn">管理中心</button>
                    </div>

                    <li id="userInfo" class="menu-nav">
                        <strong id="strong_userInfo">會員</strong>
                        <ul id="userInfo">
                            <li>
                                <a href="memberlist.php">會員總覽</a>
                            </li>

                        </ul>
                    </li>
                    <li id="li_buy" class="menu-nav">
                        <strong id="strong_buy">商品</strong>
                        <ul id="buy">
                            <li>
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
                            <li>
                                <a href="">退貨處理</a>
                            </li>


                        </ul>
                    </li>
                    <li id="li_anno" class="menu-nav">
                        <strong id="strong_anno">資訊</strong>
                        <ul id="anno">
                            <li>
                                <a href="annolist.php">公告列表</a>
                            </li>
                            <li class="navS">
                                <a href="addanno.php">新增公告</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-Content" id="rightContent">
                <div class="clearfix" id="Contentsell">
                    <form id="contact-form" action="addannolist.php" method="post" onSubmit="CheckForm();" enctype="multipart/form-data">
                        <table class="row" border="1">
                            <div class="col-12 col-md-6">
                                <label for="sell-name" class="content__subtitle ">公告名稱:</label>
                                <input id="sell-name" name="sell-name" type="sell-name" class="form-control"
                                    maxlength="10" value="" required="">
                                <label for="sell-name" class="error"></label>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <label for="sell_type[]" class="content__subtitle ">公告日期:</label>
                                <div class="form-group">
                                    <p>
                                    <div id="current_date"></div>
                                    </p>
                                    <script>
                                        date = new Date();
                                        year = date.getFullYear();
                                        month = date.getMonth() + 1;
                                        day = date.getDate();
                                        document.getElementById("current_date").innerHTML = year + "/" + month + "/" + day;
                                    </script>
                                    <!-- <select name="year" id="year" class="form-control" size="1">
                                        <option value="" >年</option>
                                        <option value="0" >101</option>
                                    </select>
                                    <select name="month" id="month" class="form-control" size="1">
                                        <option value="" >月</option>
                                        <option value="0" >7</option>
                                    </select>
                                    <select name="day" id="day" class="form-control" size="1">
                                        <option value="" >日</option>
                                        <option value="0" >1</option>
                                    </select> -->
                                </div>

                                <label for="sell_type[]" class="error"></label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="sell-topname" class="content__subtitle ">頂端公告:</label>
                                <input id="sell-topname" name="sell-topname" type="sell-topname" class="form-control"
                                    maxlength="10" value="" required="">
                                <label for="sell-topname" class="error"></label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="sell_type" class="content__subtitle">商品類型:</label>
                                <select name="sell_type" id="sell_type" class="form-control" required>
                                    <option value="">請選擇</option>
                                    <option value="discount">折扣</option>
                                    <option value="new">新品</option>
                                </select>
                                <label for="sell_type[]" class="error"></label>
                            </div>
                            <div class="col-12 col-md-6">
                                <label for="sell_pro" class="content__subtitle">商品:</label>
                                <select name="sell_pro" id="sell_pro" class="form-control" required>
                                    <option value="">請選擇</option>
                                    <?php echo $rows; ?>
                                </select>
                                <label for="sell_type[]" class="error"></label>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="sell-introduction" class="content__subtitle">公告內容</label>
                                    <textarea class="form-control" id="sell-introduction" name="sell-introduction"
                                        rows="5" style="height: 200px;" maxlength="4000" placeholder="" required></textarea>
                                    <label for="sell-introduction" class="error"></label>
                                </div>
                            </div>

                            
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="div_upload1" class="content__subtitle">附檔：</label>
                                    <div class="col-md-12">
                                        <div class="form-group" id="div_upload1">
                                            <div>
                                                <!-- <button type="button" class="btn btn-danger btn-xs"
                                                    data-placement="right" title="移除"><i class="fa fa-times"
                                                        aria-hidden="true"></i></button> -->
                                                <input type="file" name="div_upload1" style="display: inline-block" accept=".pdf,.jpg,.jpeg,.png,.webp" required>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="div_upload2" class="content__subtitle">附檔：</label>
                                    <div class="col-md-12">
                                        <div class="form-group" id="div_upload2">
                                            <div>
                                                <!-- <button type="button" class="btn btn-danger btn-xs"
                                                    data-placement="right" title="移除"><i class="fa fa-times"
                                                        aria-hidden="true"></i></button> -->
                                                <input type="file" name="div_upload2" style="display: inline-block" accept=".pdf,.jpg,.jpeg,.png,.webp" required>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <hr />
                            </div>
                            <!--BTns-->
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <div class="row justify-content-md-center">
                                    <!-- <button type="button" class="btn btn-success" name="btn_append" id="btn_append"><i
                                            class="fa fa-plus"></i> 新增附檔
                                    </button> -->
                                    <div class="col-3 col-lg-3"><button class="btn form__btn--reset"
                                            type="reset">重填</button>
                                    </div>
                                    <div class="col-3 col-lg-3"><button class="btn form__btn--submit" type="submit"
                                            id="submitBtn">送出</button>
                                    </div>
                                </div>
                            </div>





                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/addbutton.js"></script>
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