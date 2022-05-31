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
if(isset($_GET["who"]))
{
    if ($result = mysqli_query($link, "SELECT * FROM bulletin where intro_title like '%".$_GET["who"]."%' ")) {
        while ($row = mysqli_fetch_row($result)) {
          $rows .= "<dl class='anno12'>
          <dd class='anno1'>
              <h5 class='anno-title'>
                  <a href='bulletin_intro.php?bul_no=".$row["0"]."'>".$row["1"]."</a>
              </h5>
          </dd>
          <dd class='anno2'>
              <a href='change_anno.php?bul_no=".$row["0"]."'>編輯公告&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <a href='deleteanno.php?bul_no=".$row["0"]."'>刪除</a>
          </dd>
      </dl>";
        }
        $num = mysqli_num_rows($result); //查詢結果筆數
        mysqli_free_result($result); // 釋放佔用的記憶體
      }
}
else
{
    if ($result = mysqli_query($link, "SELECT * FROM bulletin ")) {
        while ($row = mysqli_fetch_row($result)) {
          $rows .= "<dl class='anno12'>
          <dd class='anno1'>
              <h5 class='anno-title'>
                  <a href='bulletin_intro.php?bul_no=".$row["0"]."'>".$row["1"]."</a>
              </h5>
          </dd>
          <dd class='anno2'>
              <a href='change_anno.php?bul_no=".$row["0"]."'>編輯公告&nbsp;&nbsp;&nbsp;&nbsp;</a>
              <a href='deleteanno.php?bul_no=".$row["0"]."'>刪除</a>
          </dd>
      </dl>";
        }
        $num = mysqli_num_rows($result); //查詢結果筆數
        mysqli_free_result($result); // 釋放佔用的記憶體
      }
}
// // 資料庫查詢(送出查詢的SQL指令)


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
                <form name="form1" action="annolist.php" method="GET">
                    <button class="member_btn">管理中心</button>
                    <input type="text" placeholder="輸入公告名稱" name="who">
                    <button type="submit"><i class="fa fa-search"></i></button>
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
                            <li>
                                <a href="">退貨處理</a>
                            </li>


                        </ul>
                    </li>
                    <li id="li_anno" class="menu-nav">
                        <strong id="strong_anno">資訊</strong>
                        <ul id="anno">
                            <li class="navS">
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
                <div class="clearfix" id="Contentsell">
                    <ul class="nav " style="position:relative; display: flex;">
                        <li class="blank">&nbsp;</li>
                        <li class="">
                            <a href="">
                                <span>公告
                                </span>
                            </a>
                        </li>
                    </ul>
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