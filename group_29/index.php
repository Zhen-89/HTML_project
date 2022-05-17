<?php

	$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");

	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

	// // 資料庫查詢(送出查詢的SQL指令)
	if ($result = mysqli_query($link, "SELECT * FROM product_list")) {
		while ($row = mysqli_fetch_assoc($result)) {
			$rows .= "<div class='portfolio-item branding " . $row["type"] . "'>
			<div class='portfolio-wrapper'>
			<div class='portfolio-thumb'>
			<img src='" . $row["picture"] . "' alt=''></div>
			<div class='portfolio-caption text-left'>
			<h4><a href='Product-detail.php?product_no=".$row["goods_No"] . "'>" . $row["goods_name"] . "</a></h4></div></div></div>" ;
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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/et-line-fonts.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <script src="./js/modernizr-2.8.3.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
 		<!-- PRELOADER-->
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
		<div class="basic-portfolio-area ptb-90" id="first-page">
			<div class="container">
				<div class="area-title text-center">
					<h2>熱賣商品</h2>
				</div>
				<div class="filter-menu text-center mb-40">
					<button class="active" data-filter="*">ALL</button>
					<button data-filter=".appliance">家電 </button>
					<button data-filter=".cloth">衣飾</button>
					<button data-filter=".game">遊戲 </button>
					<button data-filter=".other">其他</button>
				</div>
				<div id="portfolio-grid" class="row-portfolio portfolio-style-2">
					<div><!--first page-->

                    <?php echo $rows; ?>

					</div>
				</div>
				
			</div>
		</div>
		
		<!-- basic-portfolio-area end -->
		<!-- basic-??????-area -->
		<div class="basic-blo-area  pt-90 pb-50" id="second-page">
			<div class="container">
				<div class="area-title text-center">
					<h2>限時特價</h2>
				</div><!--portfolio-grid 要改掉-->
				<div id="portfolio-grid" class="row-portfolio portfolio-style-2">
					<form name="form0" action="product_intro.php" method="GET">
						<div class="portfolio-item branding video">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/project1.jpg" alt="">
									
								</div>
								<div class="portfolio-caption text-left">
									<input type="submit" class="pro_btn" name="product_name" value="product name" onclick=check()>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<input type="button" value="熱" id="scrollHotsell"  onclick="location.href='#first-page'" title="看看熱賣商品吧">
		<input type="button" value="特" id="scrollDiscount" onclick="location.href='#second-page'" title="只有現在有特價喔">
		<!-- basic-??????-area end -->
		<!-- footer start -->
		<?php include("_footer.php"); ?>
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
