<?php
$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

// // 資料庫查詢(送出查詢的SQL指令)
//	商品資料查詢
if ($result = mysqli_query($link, "SELECT * FROM product_list WHERE goods_No = '" . $_GET['product_no'] . "' ")) {
  while ($row = mysqli_fetch_row($result)) {
    $rows .= 	"<div class='area-title text-center'>
					<h2>" . $row["1"] . "</h2>
				</div>
				<div  class='product'>
					<div class='portfolio-item graphic'>
						<div class='portfolio-wrapper'>
							<div class='portfolio-thumb'>
								<img src='" . $row["6"] . "' alt=''>
							</div>
							
							<div class='portfolio-caption text-left'>
								<h4>
									<a href='addcar.php?product_no=".$row["0"] . "'>" . "立即加入購物車</a>
								</h4>
							</div>
						</div>
						
					</div>
					<div class='portfolio-item graphic'>
						
						<div class='area-title text-center pro_intro' style='text-align:left'>
							<div>
								● 商品簡介
								<div class='pro_text'>
									" . $row["3"] . "
								</div><!---->
							</div>
							<div>
								● 商品規格
								<div class='pro_text'>
									" . $row["4"] . "
								</div>
							</div>
							<div>
								● 售價
								<div class='pro_text'>
									$ " . $row["5"] . " NT
								</div>
							</div>
							<div class='buyButton container'>
								<a class='btn' href='addcar.php?product_no=".$row["0"] . "'>加入購物車</a>
								<a class='btn' href='addcar.php?product_no=".$row["0"] . "'>立即購買</a>
							</div>
						</div>
					</div>
					
				</div>";
	$pro_type = $row["2"] ;
  }
  $num = mysqli_num_rows($result); //查詢結果筆數
  mysqli_free_result($result); // 釋放佔用的記憶體
}
//	留言資料查詢
if ($result = mysqli_query($link, "SELECT * FROM comment inner join member on member.mem_account=comment.user_acc and comment.goods_No = '" . $_GET['product_no'] . "' ")) {
	while ($row = mysqli_fetch_assoc($result)) {
		$msg .= "<hr><div class='container basic-blo-area  big-board'>
				<img  class='board-head' src='image/icon/icon1.svg'>
				<div class='lit-board'>
				<div class='shopee-product-rating__author-name'>".$row['mem_name']."</div>
				<div class='board_star'>" ;
		for($i=0 ;$i<$row['rating'] ;$i++){
			$msg .= "<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
					<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
					</svg>" ;
		}
		$msg .="</div>
				<div class='board-time'>". $row['creat_at'] ."</div>
				<div class='pro_text board-text'>".nl2br($row['content'])."</div>
				</div>
				</div>";
	}
	$num = mysqli_num_rows($result); //查詢結果筆數
	mysqli_free_result($result); // 釋放佔用的記憶體
	if($num==0)
			{
				$msg="<div class='area-title text-center' ><h2 >尚無留言</h2></div>";				
			}
}
//	推薦商品查詢
if ($result = mysqli_query($link, "SELECT * FROM product_list where product_list.type='".$pro_type."'")) {
	while ($row = mysqli_fetch_assoc($result)) {
		$recom .= "<div class='portfolio-item branding " . $row["type"] . "'>
		<div class='portfolio-wrapper'>
		<div class='portfolio-thumb'>
		<img src='" . $row["picture"] . "' alt=''></div>
		<div class='portfolio-caption text-left'>
		<h4><a href='Product-detail.php?product_no=".$row["goods_No"] . "'>" . $row["goods_name"] . "</a></h4></div></div></div>" ;
		$count ++ ;
		if($count >2)
			break ;//--------------> still working
	}
	$num = mysqli_num_rows($result); //查詢結果筆數
	mysqli_free_result($result); // 釋放佔用的記憶體
}
mysqli_close($link); // 關閉資料庫連結
$text_size = 2;
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
					<h2>商品評價</h2>
					<p>In this place, we collect the response from all of our customer.</p>
					<p>Or share your commend, let everybody know your idea</p>
				</div>
				<div class="row">
					<div id="post-comment-wrapper" class="comment-component">
						<form name="msg_form" action="addmsg.php?product_no=<?=$_GET["product_no"] ?>" method="POST">
							<?php if($_SESSION['level'] == 0){echo "<textarea readonly rows='".$text_size."' name='content' placeholder='Please login...' required='required' class='form-control'></textarea> <br>" ;}
									else {echo "<textarea rows='".$text_size."' name='content' placeholder='Write something...' required='required' class='form-control'></textarea> <br>" ;} ?>
							
							<?php if($_SESSION['level'] == 0){echo "<button disabled='disabled' type='' name='rating' value='1' class='rating-star-1 hover ''>
								<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
								<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
								</svg>
								</button>";}
								else {echo "<button type='' name='rating' value='1' class='rating-star-1 hover ''>
									<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
									<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
									</svg>
								</button>";} ?>
							
							<?php if($_SESSION['level'] == 0){echo "<button disabled='disabled' type='' name='rating' value='2' class='rating-star-2 hover ''>
								<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
								<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
								</svg>
								</button>";}
								else {echo "<button type='' name='rating' value='2' class='rating-star-2 hover ''>
									<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
									<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
									</svg>
								</button>";} ?>
								<?php if($_SESSION['level'] == 0){echo "<button disabled='disabled' type='' name='rating' value='3' class='rating-star-3 hover ''>
								<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
								<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
								</svg>
								</button>";}
								else {echo "<button type='' name='rating' value='3' class='rating-star-3 hover ''>
									<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
									<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
									</svg>
								</button>";} ?>
								<?php if($_SESSION['level'] == 0){echo "<button disabled='disabled' type='' name='rating' value='4' class='rating-star-4 hover ''>
								<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
								<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
								</svg>
								</button>";}
								else {echo "<button type='' name='rating' value='4' class='rating-star-4 hover ''>
									<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
									<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
									</svg>
								</button>";} ?>



								<?php if($_SESSION['level'] == 0){echo "<button  disabled='disabled' type='' name='rating' value='5' class='rating-heart'>
								<svg  xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='32px' height='20px' viewBox='0 0 32 28' version='1.1'><defs/><g id='Page-2-Copy' ><g id='56'  ><path d='M16.0012649,27 L28.2682796,13.9256514 C30.5797458,11.6597482 30.5765008,7.97319845 28.262969,5.70527046 C25.9453869,3.4333719 22.1914533,3.43151923 19.8772917,5.70006463 L16.0012647,9.49968832 L12.1252376,5.70006463 C9.81377143,3.43416149 6.05309203,3.43734247 3.73956025,5.70527046 C1.42197807,7.97716902 1.42008814,11.657106 3.73424975,13.9256514 L16.0012649,27 Z M2.31674467,15.5103653 C-0.774555085,12.4213349 -0.771711302,7.41186051 2.32206257,4.32035787 C5.40954123,1.23514582 10.429454,1.22647608 13.5202909,4.31504388 L16.0012662,6.79419777 L18.4822414,4.31504388 C21.5735412,1.22601354 26.5866959,1.22885523 29.6804698,4.32035787 C32.7679484,7.40556993 32.7766245,12.4217975 29.6857876,15.5103653 L16.0012664,30 L2.31674467,15.5103653 Z' id='Rectangle-467' stroke='none'/></g></g></svg>
								</button>";}
								else {echo "<button type='' name='rating' value='5' class='rating-heart'>
									<svg  xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' width='32px' height='20px' viewBox='0 0 32 28' version='1.1'><defs/><g id='Page-2-Copy' ><g id='56'  ><path d='M16.0012649,27 L28.2682796,13.9256514 C30.5797458,11.6597482 30.5765008,7.97319845 28.262969,5.70527046 C25.9453869,3.4333719 22.1914533,3.43151923 19.8772917,5.70006463 L16.0012647,9.49968832 L12.1252376,5.70006463 C9.81377143,3.43416149 6.05309203,3.43734247 3.73956025,5.70527046 C1.42197807,7.97716902 1.42008814,11.657106 3.73424975,13.9256514 L16.0012649,27 Z M2.31674467,15.5103653 C-0.774555085,12.4213349 -0.771711302,7.41186051 2.32206257,4.32035787 C5.40954123,1.23514582 10.429454,1.22647608 13.5202909,4.31504388 L16.0012662,6.79419777 L18.4822414,4.31504388 C21.5735412,1.22601354 26.5866959,1.22885523 29.6804698,4.32035787 C32.7679484,7.40556993 32.7766245,12.4217975 29.6857876,15.5103653 L16.0012664,30 L2.31674467,15.5103653 Z' id='Rectangle-467' stroke='none'/></g></g></svg>
									</button>";} ?>
							
							<div class="container com_css">
								<!--<button type="submit" style="margin-right: 10px;" class="btn btn-outline-primary com_box">Submit</button>-->
								<button type="reset" class="btn com_box">Cancel</button>
							</div>
						</form> 
					</div>
				</div>
				<?php echo $msg ; ?>
			</div>
		</div>
        <!-- similar product recommand end -->
		<!-- basic-blog-area -->
		<div class="basic-blo-area  pt-90 pb-50">
			<div class="container">
				<div class="area-title text-center">
					<h2>其他人也看了</h2>
					<p>Watch other similar product !!</p>
				</div>
				<div id="portfolio-grid" class="row-portfolio portfolio-style-2">
					<?php echo $recom ;?>
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
