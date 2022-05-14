<?php
$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

// // 資料庫查詢(送出查詢的SQL指令)
if ($result = mysqli_query($link, "SELECT * FROM product_list WHERE goods_No = '".$_GET["product_no"]."' ")) {
  while ($row = mysqli_fetch_row($result)) {
    $rows .= "<div class='area-title text-center'>
    <h2>".$row["1"]."</h2>
</div>
<div  class='product'>
    <div class='portfolio-item graphic'>
        <div class='portfolio-wrapper'>
            <div class='portfolio-thumb'>
                <img src='".$row["6"]."' alt=''>
            </div>
            
            <div class='portfolio-caption text-left'>
                <h4>
                    <a href='https://youtu.be/dQw4w9WgXcQ'>立即加入購物車</a>
                </h4>
            </div>
        </div>
        
    </div>
    <div class='portfolio-item graphic'>
        
        <div class='area-title text-center pro_intro' style='text-align:left'>
            <div>
                 ● 商品簡介
                <div class='pro_text'>
                    ".$row["3"]."
                </div><!---->
            </div>
            <div>
                ● 商品規格
                <div class='pro_text'>
                    ".$row["4"]."
                </div>
            </div>
            <div>
                ● 售價
                <div class='pro_text'>
                    $".$row["5"]."NT
                </div>
            </div>
        </div>
    </div>
    
</div>";
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
        <script src="js/modernizr-2.8.3.min.js"></script>
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
                <?php echo $rows; ?>
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
