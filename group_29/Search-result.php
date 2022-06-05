<?php
	session_start();
	if(!isset($_SESSION['level'])) {
		$_SESSION['level'] = '0';
	}
	$no=$_SESSION["no"];	
// 搜尋關鍵字
	if(isset($_POST["search"])){
		setcookie("search", $_POST["search"] , time()+10);
		$rsh = $_POST["search"] ;
	}
	else if(isset($_COOKIE["search"])){
		$rsh = $_COOKIE["search"] ;
	}
	else	
		$rsh = "" ;
	$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");

	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

	// // 資料庫查詢(送出查詢的SQL指令)
	if ($result = mysqli_query($link, "SELECT * FROM product_list where goods_name like '%".$rsh."%'")) {
		while ($row = mysqli_fetch_assoc($result)) {
			$result_rows .= "<div class='portfolio-item branding " . $row["type"] . "'>
			<div class='portfolio-wrapper'>
			<div class='portfolio-thumb'>
			<img src='" . $row["picture"] . "' alt=''></div>
			<div class='portfolio-caption text-left'>
			<h4><a href='Product-detail.php?product_no=".$row["goods_No"] . "'>" . $row["goods_name"] . "</a></h4></div></div></div>" ;
		}
		$num = mysqli_num_rows($result); //查詢結果筆數
		mysqli_free_result($result); // 釋放佔用的記憶體
		if($num==0){
            $result_rows="<div class='area-title text-center' ><h2 >查無結果</h2></div>";	
        }
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
		<?php
		
		?>
		<header id="sticky-header">
			<div class="header-area">
				<div class="container sm-100">
					<div class="row">
						<div class="col-md-2 col-sm-2">
							<div class="logo text-upper">
								<h4><a href="index.php">costco</a></h4>
							</div>
						</div>
						<div class="col-lg-5 col-md-3 col-sm-3 ">
							<form name="form1" action="Search-result.php" method="POST">
								<div class="search logo ">
									<input type="text" placeholder="輸入商品名稱" name="search" value="<?=$rsh?>">
									<button type="submit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
						<div class="col-lg-5 col-md-7 col-sm-7">
							<div class="menu-area hidden-xs">
								<nav>
									<ul class="basic-menu clearfix">
										<?php
										if($_SESSION['level']=='1'){	
										?>
											<li> <a href="logout.php">登出</a></li>
											<li>
												<a><?php echo $_SESSION['name']?> </a>
												<ul>										
													<!-- <li><a href="memberlist.php"><?php echo $no ?></a></li> -->
													<!-- <li><a href="personal information.php">個人資料</a></li> -->
													<!-- $rows .= "<h5 class='anno-title'><a href='adminmem.php?who=".$_SESSION["no"]."' >會員帳號ID:" . $row["0"] . "&emsp;姓名:" . $row["3"] . "</a></h5>"; -->
													<li><a href='personal information.php?who=<?php echo $_SESSION["no"]?>' >個人資料</a></li>
													<li><a href="Order_summary.php">訂單查詢</a></li>

												</ul>
											</li>
										<?php
										}
										else if($_SESSION['level']=='2'){	
										?>
											<li> <a href="logout.php">登出</a></li>
											<li>
												<a><?php echo $_SESSION['name']?> </a>
												<ul>
													<li><a href="memberlist.php">管理員</a></li>
												</ul>
											</li>
										<?php
										}
										else
										{
										?>
										<li><a href="login.php">登入/註冊</a></li>
										<li>
												<a>會員中心</a>
												<ul>
													<!-- <li><a href="memberlist.php">管理員</a></li> -->
													<li><a href="personal information.php">個人資料</a></li>
													<li><a href="Order_summary.php">訂單查詢</a></li>
												</ul>
											</li>
										<?php
										}
										?>
										

										<li>
											<a href="question.php">常見問題</a>
										</li>

										<li>
											<a href="shopping.php">購物車</a>
										</li>
										<!-- END BLOG -->
										<li>
											<a>聯絡我們</a>
											<ul>
												<li><a href="cooperate.php">廠商合作</a></li>
												<li><a href="report.php">問題回報</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
							<!-- basic-mobile-menu -->
							<div class="basic-mobile-menu visible-xs">
								<nav id="mobile-nav">
									<ul>
									<?php
										if($_SESSION['level']=='1'){	
										?>
											<li> <a href="logout.php">登出</a></li>
											<li>
												<a><?php echo $_SESSION['name']?> </a>
												<ul>
													<!-- <li><a href="memberlist.php">管理員</a></li> -->
													<li><a href="personal information.php">個人資料</a></li>
													<li><a href="Order_summary.php">訂單查詢</a></li>
												</ul>
											</li>
										<?php
										}
										else if($_SESSION['level']=='2'){	
										?>
											<li> <a href="logout.php">登出</a></li>
											<li>
												<a><?php echo $_SESSION['name']?> </a>
												<ul>
													<li><a href="memberlist.php">管理員</a></li>
												</ul>
											</li>
										<?php
										}
										else
										{
										?>
										<li><a href="login.php">登入/註冊</a></li>
										<li>
												<a>會員中心</a>
												<ul>
													<!-- <li><a href="memberlist.php">管理員</a></li> -->
													<li><a href="personal information.php">個人資料</a></li>
													<li><a href="Order_summary.php">訂單查詢</a></li>
												</ul>
											</li>
										<?php
										}
										?>

										<li>
											<a href="question.php">常見問題</a>
										</li>

										<li>
											<a href="shopping.php">購物車</a>
										</li>
										<!-- END BLOG -->
										<li><a>聯絡我們</a>
											<ul>
												<li><a href="cooperate.php">廠商合作</a></li>
												<li><a href="report.php">問題回報</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- basic-slider start -->
		<?php include("_slider.php") ;?>
		<!-- basic-slider end   -->
		
		<!-- basic-portfolio-area start -->
		<div class="basic-portfolio-area ptb-90">
			<div class="container">
				<div class="area-title text-center">
					<h2>根據您的搜尋結果</h2>
				</div>
				<div id="portfolio-grid" class="row-portfolio portfolio-style-2">
					<?php echo $result_rows; ?>
				</div>
				

				<!--<div class="view-more mt-20 text-center">
					<a class="btn btn-large" href="Search-result.php">上一頁</a>
					<a class="btn btn-large" href="Search-result.php">...</a>
					<a class="btn btn-large" href="Search-result.php">下一頁</a>
				</div>-->
			</div>
		</div>
		<!-- basic-portfolio-area end -->
		<!-- basic-blog-area -->
		<div class="basic-blo-area gray-bg pt-90 pb-50">
			<div class="container">
				<div class="area-title text-center">
					<h2>專業服務</h2>
					<p>In this place, we provide the profession service for all of our customer.</p>
				</div>
				<div class="con_flex gray-bg">
                    <div class="it_flex">
                        <a href="login.php">
                            <img src="image/icon/icon1.svg">
                            登陸/註冊
                        </a>
                    </div>
                    <div class="it_flex">
                        <a href="Bulletin_Board.php">
                            <img src="image/icon/icon2_1.svg">
                            優惠折扣
                        </a>
                    </div>
                    <div class="it_flex">
                        <a href="personal information.php">
                            <img src="image/icon/icon3.svg">
                            個人資料
                        </a>
                    </div>
                    <!--<div class="it_flex">
                        <img src="image/icon/icon4_2.svg">
                        
                    </div>-->
                    <div class="it_flex2">
                        <div class="it_flex3">
                            <a href="shopping.php">
                                <img src="image/icon/icon5_1.svg">
                                購物車
                            </a>
                        </div>
                        <div class="it_flex3">
                            <a href="question.php">
                                <img src="image/icon/icon5_2.svg">
                            常見問題
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
		</div>
			</div>
		</div>
		<!-- basic-blog-area end -->
		<!-- footer start -->
		
		<!-- footer end -->


		<!-- All js plugins here -->
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
