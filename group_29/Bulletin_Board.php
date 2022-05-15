<?php

	$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");

	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

	// // 資料庫查詢(送出查詢的SQL指令)
	if ($result = mysqli_query($link, "SELECT * FROM bulletin b, product_list p WHERE b.goods_No=p.goods_No and b.type = 'discount'")) {
		while ($row = mysqli_fetch_assoc($result)) {
			$rows .= "<div style='padding: 6px 0;'>
            <a href='product-detail.php?product_name=" . $row["name"] . "'>
                <div class='banner_size1 ' style='background-image: url(" . $row["intro_picture"] . ");' >
                    <div class='container '>
                        <div class='banner_title'>
                            " . $row["intro_title"] . "
                        </div>
                        <div class='banner_text'>
                            " . $row["intro_content"] . "
                        </div>
                    </div>
                </div>
            </a>
        </div>" ;
		}
		$num = mysqli_num_rows($result); //查詢結果筆數
		mysqli_free_result($result); // 釋放佔用的記憶體
	}

    if ($result = mysqli_query($link, "SELECT * FROM bulletin b, product_list p WHERE b.goods_No=p.goods_No and b.type = 'new'")) {
		while ($row = mysqli_fetch_assoc($result)) {
			$rows1 .= "<div style='padding: 6px 0;'>
            <a href='product-detail.php?product_name=" . $row["name"] . "'>
                <div class='banner_size1 ' style='background-image: url(" . $row["intro_picture"] . ");' >
                    <div class='container '>
                        <div class='banner_title'>
                            " . $row["intro_title"] . "
                        </div>
                        <div class='banner_text'>
                            " . $row["intro_content"] . "
                        </div>
                    </div>
                </div>
            </a>
        </div>" ;
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
        <title>我都念 costco</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- All CSS Files Here -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/et-line-fonts.css">
        <link rel="stylesheet" href="./css/ionicons.min.css">
        <link rel="stylesheet" href="./css/magnific-popup.css">
        <link rel="stylesheet" href="./css/meanmenu.css">
        <link rel="stylesheet" href="./css/global.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/responsive.css">
        <script src="./js/modernizr-2.8.3.min.js"></script>

        <style>
            .banner_size1 {
                background: rgba(0, 0, 0, 0) none repeat scroll center center / cover ;
                padding: 25px 0;
                /*width:70% ;*/
             }
            .banner_text {
                font-size: 25px;
                color: #333;
                display: block;
                line-height:1.6;
                font-weight: bold;
            }
            .banner_title {
                font-size: 45px;
                font-weight: bolder;
            }
        </style>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
 		<!-- PRELOADER -->
		<div class="page-loader">
			<div class="loader">Loading...</div>
		</div>
		<!-- /PRELOADER -->
		
		<!-- header start -->
		<?php include("_header.php") ;?>
		<!-- header end -->

		<!-- basic-slider start -->
		<?php include("_slider.php") ;?>
		<!-- basic-slider end   -->

		<!-- basic-portfolio-area start -->
		<div class=" ptb-90">
			<div class="container">
                <div class="area-title text-center">
                    <h2>優惠活動</h2>
                </div>
                <?php echo $rows; ?>
			</div>
        </div>
        <div class=" ptb-90">
            <div class="container">
                <div class="area-title text-center">
                    <h2>新品首發</h2>
                </div>
                <?php echo $rows1 ; ?>
			</div>
		</div>
		<!-- basic-portfolio-area end -->

		<!-- footer start -->
		<footer>
			<div class="basic-footer text-center ptb-90">
				<div class="container">
					<div class="footer-logo mb-30">
						<h3><a href="index.php">我都念 costco</a></h3>
					</div>
					<div class="social-icon">
						<a href="#"><i class="ion-social-facebook"></i></a>
						<a href="#"><i class="ion-social-googleplus"></i></a>
						<a href="#"><i class="ion-social-instagram"></i></a>
						<a href="#"><i class="ion-social-dribbble"></i></a>
					</div>
					<div class="footer-menu mt-30">
						<nav>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer end -->


		<!-- All js plugins here -->
        <script src="./js/jquery-1.12.0.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="./js/isotope.pkgd.min.js"></script>
        <script src="./js/imagesloaded.pkgd.min.js"></script>
        <script src="./js/jquery.magnific-popup.min.js"></script>
        <script src="./js/jquery.meanmenu.js"></script>
        <script src="./js/plugins.js"></script>
        <script src="./js/main.js"></script>
    </body>
</html>
