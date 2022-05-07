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
                    <input type="text" placeholder="輸入商品名稱" name="search">
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
                        <ul id="userInfo" >
                            <li>
                                <a href="memberlist.php">會員總覽</a>
                            </li>

                        </ul>
                    </li>
                    <li id="li_buy" class="menu-nav">
                        <strong id="strong_buy">商品</strong>
                        <ul id="buy">
                            <li class="navS">
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
                                <span>商品</span>
                            </a>
                        </li>
                    </ul>
                    <?php echo '<dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/project1.jpg" title="無印良品 小杯杯"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_bowl.php">無印良品 小杯杯</a>
                            </h5>
                            <div class="pro_text">
                                $ 150 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>'?>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/m-project1.jpg" title="日本原裝進口 不鏽鋼鑰匙圈"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_key.php">日本原裝進口 不鏽鋼鑰匙圈</a>
                            </h5>
                            <div class="pro_text">
                                $10000 NT 
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/Product/stick.webp" title="無印良品 小筷筷"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_stick.php">無印良品 小筷筷</a>
                            </h5>
                            <div class="pro_text">
                                $ 130 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/Product/sweater_white.webp" title="【男女適用】休閒衫"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_sweater_white.php">【男女適用】休閒衫</a>
                            </h5>
                            <div class="pro_text">
                                $ 1600 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/Product/coat_gray.jpg" title="【男女適用】 連帽外套"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_coat_gray.php">【男女適用】 連帽外套</a>
                            </h5>
                            <div class="pro_text">
                                $ 899 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/Product/shoe_white.jpg" title="有機棉舒適休閒鞋柔白"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_shoe_white.php">有機棉舒適休閒鞋柔白</a>
                            </h5>
                            <div class="pro_text">
                                $ 899 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/Product/shoe_black.webp" title="有機棉舒適休閒鞋"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_shoe_black.php">有機棉舒適休閒鞋</a>
                            </h5>
                            <div class="pro_text">
                                $ 699 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/Product/show_white_1_.jpg" title="有機棉舒適基本便鞋"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_shoe_white_1.php">有機棉舒適基本便鞋</a>
                            </h5>
                            <div class="pro_text">
                                $ 699 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/Product/bag.webp" title="棉束口袋/文字 原色NONE"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_bag.php">棉束口袋/文字 原色NONE</a>
                            </h5>
                            <div class="pro_text">
                                $ 69 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
                    <dl class="sell13 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <dd class="sell1">
                            <a href=""><img src="picture/Product/cushion.webp" title="不易變形坐墊/方形/混淺棕"></a>
                        </dd>
                        <dd class="sell2">
                            <h5 class="sell-title">
                                <a href="pro_cushion.php">不易變形坐墊/方形/混淺棕</a>
                            </h5>
                            <div class="pro_text">
                                $ 540 NT
                            </div>
                        </dd>
                        <dd class="sell3">
                            <a href="addsell.php">編輯商品&nbsp;&nbsp;&nbsp;&nbsp;</a>
                            <a href="">下架商品</a>
                        </dd>
                    </dl>
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