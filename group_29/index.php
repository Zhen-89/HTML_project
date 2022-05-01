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
		<script>
			$(function (){
				$("#btn_show").on("click", function(){
					//console.log("click") ;
					$("#btn_show").hide() ;
					// $("#block_hidden").show() ;
					if("#block_hidden".style.display == "none")
					{
						document.getElementById("block_hidden").style.display = "block"
					}
					else
					{
						document.getElementById("block_hidden").style.display = "none"
					}

					//$("#btn_hide").show() ;
				})/**/
			});
		</script>
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
		<div class="slider-section">
			<div class="slider-active owl-carousel ">
				<div class="single-slider" style="background-image: url(./picture/Product/show_white_1_2.jpg); ">
					<div class="container">
						<div class="slider-content">
							<h2>週日搶下殺 <br> 最高折 $500
							</h2>
							<a class="btn" href="Bulletin_Board.html">看特價</a>
						</div>
					</div>
				</div>
				<div class="single-slider" style="background-image: url(./picture/Product/coat_gray3.webp);">
					<div class="container">
						<div class="slider-content">
							<h2>新品上市 <br> 柔軟舒適
							</h2>
							<a class="btn" href="Bulletin_Board.html">看更多</a>
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
					<h2>熱賣商品</h2>
				</div>
				<div class="filter-menu text-center mb-40">
					<button class="active" data-filter="*">ALL</button>
					<button data-filter=".branding">家電 </button>
					<button data-filter=".graphic">衣飾</button>
					<button data-filter=".design">遊戲 </button>
					<button data-filter=".video">其他</button>
				</div>
				<div id="portfolio-grid" class="row-portfolio portfolio-style-2">
					<div id="first-page"><!--first page-->
					<div class="portfolio-item branding video">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/project1.jpg" alt="">
								
							</div>
							<div class="portfolio-caption text-left">
								<div class="work-tag">
									<p>買吧</p>
								</div>
								<h4>
									<a href="pro_bowl.html">無印良品 小杯杯</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item graphic">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/m-project1.jpg" alt="">
								<div class="view-icon">
									<a class="popup-video" href="https://youtu.be/dQw4w9WgXcQ">
										<i class="ion-ios-play"></i>
									</a>
								</div>
							</div>
							<div class="portfolio-caption text-left">
								<div class="work-tag">
									<p>讚喔</p>
								</div>
								<h4>
									<a href="pro_key.html">日本原裝進口 不鏽鋼鑰匙圈</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item video">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/Product/stick.webp" alt="">
							</div>
							<div class="portfolio-caption text-left">
								<h4>
									<a href="pro_stick.html">無印良品 小筷筷</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item graphic">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/Product/sweater_white.webp" alt="">
								<div class="view-icon">
									<a class="popup-link" href="picture/Product/sweater_white2.webp">
										<i class="ion-android-search"></i>
									</a>
								</div>
							</div>
							<div class="portfolio-caption text-left">
								<h4>
									<a href="pro_sweater_white.html">【男女適用】休閒衫</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item branding design">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/Product/coat_gray.jpg" alt="">
								<div class="view-icon">
									<a class="popup-video" href="javascript:;">
										<i class="ion-ios-play"></i>
									</a>
								</div>
							</div>
							<div class="portfolio-caption text-left">
								
								<h4>
									<a href="pro_coat_gray.html">【男女適用】 連帽外套</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item graphic video">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/Product/shoe_white.jpg" alt="">
							</div>
							<div class="portfolio-caption text-left">
								<h4>
									<a href="pro_shoe_white.html">有機棉舒適休閒鞋柔白</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/project4.jpg" alt="">
								<div class="view-icon">
									<a class="popup-link" href="picture/Product/shoe_black.webp">
										<i class="ion-android-search"></i>
									</a>
								</div>
							</div>
							<div class="portfolio-caption text-left">
								<h4>
									<a href="pro_shoe_black.html">有機棉舒適休閒鞋</a>
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
									<a href="pro_shoe_white_1.html">有機棉舒適基本便鞋</a>
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
									<a href="pro_bag.html">棉束口袋/文字 原色NONE</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="portfolio-item branding video">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/Product/cushion.webp" alt="">
							</div>
							<div class="portfolio-caption text-left">
								<h4>
									<a href="pro_cushion.html">不易變形坐墊/方形/混淺棕</a>
								</h4>
							</div>
						</div>
					</div>
					
					
					</div>
					<!-- second page expand but due to some bug it will show directly... -->
					<!---->
					<!-- <div id="block_hidden" style="display: none">
						
						<div class="portfolio-item graphic">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/m-project1.jpg" alt="">
									<div class="view-icon">
										<a class="popup-video" href="javascript:;">
											<i class="ion-ios-play"></i>
										</a>
									</div>
								</div>
								<div class="portfolio-caption text-left">
									<div class="work-tag">
										<p>Web Design</p>
									</div>
									<h4>
										<a href="portfolio-single.html">Brand Redesign Works</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="portfolio-item video">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/project2.jpg" alt="">
									<div class="view-icon">
										<a href="portfolio-single.html">
											<i class="ion-arrow-right-c"></i>
										</a>
									</div>
								</div>
								<div class="portfolio-caption text-left">
									<div class="work-tag">
										<p>Web Design</p>
									</div>
									<h4>
										<a href="portfolio-single.html">Brand Redesign Works</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="portfolio-item graphic">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/m-project2.jpg" alt="">
									<div class="view-icon">
										<a class="popup-link" href="picture/m-project2.jpg">
											<i class="ion-android-search"></i>
										</a>
									</div>
								</div>
								<div class="portfolio-caption text-left">
									<div class="work-tag">
										<p>Web Design</p>
									</div>
									<h4>
										<a href="portfolio-single.html">Brand Redesign Works</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="portfolio-item branding design">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/m-project3.jpg" alt="">
									<div class="view-icon">
										<a class="popup-video" href="javascript:;">
											<i class="ion-ios-play"></i>
										</a>
									</div>
								</div>
								<div class="portfolio-caption text-left">
									<div class="work-tag">
										<p>Web Design</p>
									</div>
									<h4>
										<a href="portfolio-single.html">Brand Redesign Works</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="portfolio-item graphic video">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/project2.jpg" alt="">
									<div class="view-icon">
										<a class="popup-link" href="picture/project2.jpg">
											<i class="ion-android-search"></i>
										</a>
									</div>
								</div>
								<div class="portfolio-caption text-left">
									<div class="work-tag">
										<p>Web Design</p>
									</div>
									<h4>
										<a href="portfolio-single.html">Brand Redesign Works</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="portfolio-item">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/project4.jpg" alt="">
									<div class="view-icon">
										<a class="popup-link" href="picture/project4.jpg">
											<i class="ion-android-search"></i>
										</a>
									</div>
								</div>
								<div class="portfolio-caption text-left">
									<div class="work-tag">
										<p>Web Design</p>
									</div>
									<h4>
										<a href="portfolio-single.html">Brand Redesign Works</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="portfolio-item branding design">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/project3.jpg" alt="">
									<div class="view-icon">
										<a href="portfolio-single.html">
											<i class="ion-arrow-right-c"></i>
										</a>
									</div>
								</div>
								<div class="portfolio-caption text-left">
									<div class="work-tag">
										<p>Web Design</p>
									</div>
									<h4>
										<a href="portfolio-single.html">Brand Redesign Works</a>
									</h4>
								</div>
							</div>
						</div>
						<div class="portfolio-item design">
							<div class="portfolio-wrapper">
								<div class="portfolio-thumb">
									<img src="picture/project5.jpg" alt="">
									<div class="view-icon">
										<a class="popup-link" href="picture/project5.jpg">
											<i class="ion-android-search"></i>
										</a>
									</div>
								</div>
								<div class="portfolio-caption text-left">
									<div class="work-tag">
										<p>Web Design</p>
									</div>
									<h4>
										<a href="portfolio-single.html">Brand Redesign Works</a>
									</h4>
								</div>
							</div>
						</div>
					</div>										second page end -->
				</div>
				<!-- <div class="view-more mt-20 text-center">
					<button type="button" id="btn_show" name="btn_show" class="btn btn-large">View More</button>
					<button type="button" id="btn_hide" name="btn_hide" class="btn btn-large" style="display:none">View Less</button>
						
				</div> -->
				
			</div>
		</div>
		
		<!-- basic-portfolio-area end -->
		<!-- basic-??????-area -->
		<div class="basic-blo-area  pt-90 pb-50">
			<div class="container">
				<div class="area-title text-center">
					<h2>限時特價</h2>
				</div><!--portfolio-grid 要改掉-->
				<div id="portfolio-grid" class="row-portfolio portfolio-style-2">
					
					<div class="portfolio-item branding video">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<img src="picture/project1.jpg" alt="">
								
							</div>
							<div class="portfolio-caption text-left">
								<div class="work-tag">
									<p>要買要快</p>
								</div>
								<h4>
									<a href="pro_bowl.html">無印良品 小杯杯</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
