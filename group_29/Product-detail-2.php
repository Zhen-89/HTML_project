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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(function (){
				$("#btn_show").on("click", function(){
					//console.log("click") ;
					$("#block_hidden").show() ;
					$("#btn_show").hide() ;
					//$("#btn_hide").show() ;
				})/**/
			});
		</script>

        <script src="https://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
        <script>
            var cot=0;//設置一個計數器，初始值為0；作用是用來監聽點擊切換的時候哪一個圖片應該隱藏或者顯示
                function nex(){
                if(cot<=2){// 幾個圖片，就要調整 cot2 的 max 值
                $('.imgs img').eq(cot).animate({'margin-left':'-405px'},400);
                cot++;
                }
            }
            function pre(){
                if(cot>0){
                cot--;
                $('.imgs img').eq(cot).animate({'margin-left':'0'},400);
                }
            }
        </script>

        <style>
            .product{
                display: flex;
                justify-content:space-evenly;
            }
            .pro_intro{
                font-size: 25px;

                color: #252525;

                font-weight: 700;

                line-height: 3.4;
            }
            .pro_text{
                display: block;

                font-weight: 500;

                margin-bottom: 10px;

                font-size: 18px;

                color: #333;

                line-height:1.6;
            }
        </style>
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

		
		<!-- basic-slider end -->
		<!-- basic-portfolio-area start -->
		<div class="basic-portfolio-area ptb-90">
			<div class="container">
				<div class="area-title text-center">
					<h2>商品名稱</h2>
				</div>
				<div  class="product">
					<!--id="portfolio-grid" class="row-portfolio portfolio-style-2"-->
					<!--<div id="first-page">first page-->
					<div class="portfolio-item graphic">
						<div class="portfolio-wrapper">
							<div class="portfolio-thumb">
								<!--<img src="picture/m-project1.jpg" alt="">-->
								<div style="width:400px;margin:auto;overflow:hidden"> <!-- 這個最外圍的容器div寬度為400px，將每張圖寬調為400px，所以只顯示1張，剩下的圖超出容器隱藏起來 -->
                                    <div class="imgs portfolio-item" style="width:5000px;"><!--這個div的作用是讓所有的圖片都排在同一水平上，這樣子切換的時候效果會更好(太小 圖片會往下跑)-->
                                    <img src="picture/m-project1.jpg" style="width:400px;"/><!--這裡的圖片換上到時候自己對應的圖片-->
                                    <img src="picture/m-project2.jpg" style="width:400px;"/>
                                    <img src="picture/m-project3.jpg" style="width:400px;"/>
                                    <img src="#" alt="沒有囉"/>
                                    </div>
                                </div>
                                <div onclick="pre()" style="float:left;cursor:pointer">上一頁</div>
                                <div onclick="nex()" style="float:right;cursor:pointer">下一頁</div>
                                <!--<div class="single-slider" style="background-image: url(image/slide-white.jpg);">
                                        
                                    </div>-->
							</div>
							
                            <div class="portfolio-caption text-left">
                                <h4>
                                    <a href="https://youtu.be/dQw4w9WgXcQ">立即加入購物車</a>
                                </h4>
                            </div>
						</div>
                        
					</div>
					<div class="portfolio-item graphic">
						
                        <div class="area-title text-center pro_intro" style="text-align:left">
                            <div>
                                 ● 商品簡介
                                <div class="pro_text">
                                    In this place,<br>
                                    we will show the instruction of the product
                                </div><!---->
                            </div>
                            <div>
                                ● 商品規格
                                <div class="pro_text">
                                    I don't know what to say<br>
                                    but i preserve this area<br>
                                    to avoid some ??
                                </div>
                            </div>
                            <div>
                                ● 售價
								<div class="pro_text">
                                    $  NT
                                </div>
                            </div>
							<div class="buyButton container">
								<a class="btn" href="addcar.php">加入購物車</a>
								<a class="btn" href="addcar.php">立即購買</a>
							</div>
                        </div>
					</div>
					
				</div>
				<!--<div class="view-more mt-20 text-center">
					<button type="button" id="btn_show" name="btn_show" class="btn btn-large">View More</button>
					<button type="button" id="btn_hide" name="btn_hide" class="btn btn-large" style="display:none">View Less</button>
						
				</div>-->
			</div>
		</div>
		<!-- basic-portfolio-area end -->
        <!-- similar product recommand -->
        <div class="basic-blo-area gray-bg pt-90 pb-50">
			<div class="container">
				<div class="area-title text-center">
					<h2>其他人也看了</h2>
					<p>Watch other similar product !!</p>
				</div>
				<div class="row">
					<div class="col-md-4 blog-item mb-40">
						<div class="blog-wrapper blog-column">
							<div class="blog-thumb">
								<a href="blog-details.html">
									<img src="picture/1.jpg" alt="">
								</a>
							</div>
							<div class="blog-desc">
								<div class="meta-info">
									<ul>
										<li class="posts-time">January 28, 2020</li>
									</ul>
								</div>
								<div class="blog-content">
									<h2 class="blog-title">
										<a href="blog-details.html">Tips for Delivering a Great Perfor mance in Your Next</a>
									</h2>
									<p>At tincidunt vulputate dis natoque parturient proine mperdiet. Quisque lig pede males us. Semper orc gue
										lorem
										ipsum.</p>
								</div>
								<div class="link-box">
									<a href="blog-details.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 blog-item mb-40">
						<div class="blog-wrapper blog-column">
							<div class="blog-thumb">
								<a href="blog-details.html">
									<img src="picture/4.jpg" alt="">
								</a>
							</div>
							<div class="blog-desc">
								<div class="meta-info">
									<ul>
										<li class="posts-time">January 28, 2020</li>
									</ul>
								</div>
								<div class="blog-content">
									<h2 class="blog-title">
										<a href="blog-details.html">How To Be The Highest Marketer On Your Team And Skills</a>
									</h2>
									<p>At tincidunt vulputate dis natoque parturient proine mperdiet. Quisque lig pede males us. Semper orc gue
										lorem ipsum.</p>
								</div>
								<div class="link-box">
									<a href="blog-details.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 blog-item mb-40">
						<div class="blog-wrapper blog-column">
							<div class="blog-thumb">
								<a href="blog-details.html">
									<img src="picture/3.jpg" alt="">
								</a>
							</div>
							<div class="blog-desc">
								<div class="meta-info">
									<ul>
										<li class="posts-time">January 28, 2020</li>
									</ul>
								</div>
								<div class="blog-content">
									<h2 class="blog-title">
										<a href="blog-details.html">4 Myths Rand Fishkin Wants You to Question Launching </a>
									</h2>
									<p>At tincidunt vulputate dis natoque parturient proine mperdiet. Quisque lig pede males us. Semper orc gue
										lorem ipsum.</p>
								</div>
								<div class="link-box">
									<a href="blog-details.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- similar product recommand end -->
		<!-- basic-blog-area -->
		<div class="basic-blo-area  pt-90 pb-50">
			<div class="container">
				<div class="area-title text-center">
					<h2>看看其他人的留言</h2>
					<p>In this place, we collect the response from all of our customer.</p>
				</div>
				<div class="row">
					<div class="col-md-4 blog-item mb-40">
						<div class="blog-wrapper blog-column">
							<div class="blog-thumb">
								<a href="blog-details.html">
									<img src="picture/1.jpg" alt="">
								</a>
							</div>
							<div class="blog-desc">
								<div class="meta-info">
									<ul>
										<li class="posts-time">January 28, 2020</li>
									</ul>
								</div>
								<div class="blog-content">
									<h2 class="blog-title">
										<a href="blog-details.html">Tips for Delivering a Great Perfor mance in Your Next</a>
									</h2>
									<p>At tincidunt vulputate dis natoque parturient proine mperdiet. Quisque lig pede males us. Semper orc gue
										lorem
										ipsum.</p>
								</div>
								<div class="link-box">
									<a href="blog-details.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 blog-item mb-40">
						<div class="blog-wrapper blog-column">
							<div class="blog-thumb">
								<a href="blog-details.html">
									<img src="picture/4.jpg" alt="">
								</a>
							</div>
							<div class="blog-desc">
								<div class="meta-info">
									<ul>
										<li class="posts-time">January 28, 2020</li>
									</ul>
								</div>
								<div class="blog-content">
									<h2 class="blog-title">
										<a href="blog-details.html">How To Be The Highest Marketer On Your Team And Skills</a>
									</h2>
									<p>At tincidunt vulputate dis natoque parturient proine mperdiet. Quisque lig pede males us. Semper orc gue
										lorem ipsum.</p>
								</div>
								<div class="link-box">
									<a href="blog-details.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 blog-item mb-40">
						<div class="blog-wrapper blog-column">
							<div class="blog-thumb">
								<a href="blog-details.html">
									<img src="picture/3.jpg" alt="">
								</a>
							</div>
							<div class="blog-desc">
								<div class="meta-info">
									<ul>
										<li class="posts-time">January 28, 2020</li>
									</ul>
								</div>
								<div class="blog-content">
									<h2 class="blog-title">
										<a href="blog-details.html">4 Myths Rand Fishkin Wants You to Question Launching </a>
									</h2>
									<p>At tincidunt vulputate dis natoque parturient proine mperdiet. Quisque lig pede males us. Semper orc gue
										lorem ipsum.</p>
								</div>
								<div class="link-box">
									<a href="blog-details.html">Read More</a>
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
