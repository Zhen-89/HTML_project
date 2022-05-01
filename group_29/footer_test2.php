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
            .con_flex{
                display:flex ;
                flex-direction: row;
                align-items: stretch;
                flex-wrap: wrap ;
                justify-content: center;
                padding:5%;
            }
            .it_flex{
                flex: 0 0 15% ;
                color: #333;
                /*background-color: rgb(255, 255, 255);*/
                margin: 5px;
                background: #fff none repeat scroll 0 0;
                text-align: center;
	            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
            }
            .it_flex2{
                flex: 0 0 30% ;
                color: #333;
                /*background-color: rgb(255, 255, 255);*/
                margin: 5px;
                background: #fff none repeat scroll 0 0;
                box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
                text-align:left;
                display:flex;
                flex-direction:column;
                justify-content: space-between;
            }
            .it_flex3{
                flex: 0 0 48% ;
                color: #333;
                /*background-color: rgb(255, 255, 255);
                margin: 5px;*/
                background: #fff none repeat scroll 0 0;
                height: 50%;
	            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
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
		<div class="slider-section">
			<div class="slider-active owl-carousel ">
				<div class="single-slider" style="background-image: url(./picture/Product/show_white_1_2.jpg); ">
					<div class="container">
						<div class="slider-content">
							<h2>週日搶下殺 <br> 最高折 $500
							</h2>
							<a class="btn" href="Bulletin_Board.php">看特價</a>
						</div>
					</div>
				</div>
				<div class="single-slider" style="background-image: url(./picture/Product/coat_gray3.webp);">
					<div class="container">
						<div class="slider-content">
							<h2>新品上市 <br> 柔軟舒適
							</h2>
							<a class="btn" href="Bulletin_Board.php">看更多</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- basic-slider end -->
		<!-- basic-portfolio-area start -->
		<div class="basic-portfolio-area ptb-90">
			<div class="container">
				<div class="area-title text-center">
					<h2>根據您的搜尋結果</h2>
				</div>
				<div id="portfolio-grid" class="row-portfolio portfolio-style-2">
					<div class="portfolio-item branding video">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/Product/cushion.webp" alt="">
							</div>
							<div class="portfolio-caption text-left">
								<h4>
									<a href="pro_cushion.php">不易變形坐墊/方形/混淺棕</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item branding design">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/Product/show_white_1_.jpg" alt="">
							</div>
							<div class="portfolio-caption text-left">
								<div class="work-tag">
									<p>讚讚</p>
								</div>
								<h4>
									<a href="pro_shoe_white_1.php">有機棉舒適基本便鞋</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item design">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/Product/bag.webp" alt="">
							</div>
							<div class="portfolio-caption text-left">
								<h4>
									<a href="pro_bag.php">棉束口袋/文字 原色NONE</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="view-more mt-20 text-center">
					<a class="btn btn-large" href="Search-result.php">上一頁</a>
					<a class="btn btn-large" href="Search-result.php">...</a>
					<a class="btn btn-large" href="Search-result.php">下一頁</a>
				</div>
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
