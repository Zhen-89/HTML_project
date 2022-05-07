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
                    <button class="member_btn">管理中心</button>
                    <input type="text" placeholder="輸入會員名稱" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
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
                        <ul id="userInfo">
                            <li class="navS">
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
                            <li>
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
                                <span>成員</span>
                            </a>
                        </li>
                    </ul>
                    <?php echo '<dl class="anno12"><dd class="anno1"><h5 class="anno-title"><a href="adminmem.php">會員帳號ID:test 姓名:石宇辰</a></h5></dd></dl>'?>

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