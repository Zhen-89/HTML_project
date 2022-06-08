<?php
session_start();

if ($_SESSION['level']!='2' )
{
?>
    <meta http-equiv="refresh" content="0;url=login.php"></meta>

<?php
}
$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
  or die("無法開啟MySQL資料庫連結!<br>");

// 送出編碼的MySQL指令
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
$a="";
$b="";
	if(isset($_GET['change_comment']))
	{
		if ($result = mysqli_query($link, "SELECT * FROM comment WHERE com_No = '".$_GET["change_comment"]."' and goods_No =  '".$_GET["product_no"]."' ")) {
			while ($row = mysqli_fetch_row($result)) {
				$a="";
				for($i=0;$i<$row["3"];$i++){
					$a=$a."<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
					<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
					</svg>";
				}
				$tmp .="<hr><div class='container basic-blo-area  '>
				<img  class='board-head' src='image/icon/icon1.svg'>
				<div class='lit-board'>
					<div class='shopee-product-rating__author-name'>".$row["2"]."</div>
					<div class='board_star'>
							".$a."
					</div>
					<div class=''>".$row["5"]." </div>
					<form id='contact-form' action='changecomment.php?product_no=".$_GET["product_no"]."&change_comment=".$row["0"]."' method='post'  enctype='multipart/form-data'>
							<div class='form-group'>
								<textarea class='form-control' id='sell-introduction' name='sell-introduction'
									rows='5' style='height: 200px;' maxlength='4000'
									placeholder='請提供詳情以利人員快速為您服務' required>".$row['4']."</textarea>
								<label for='sell-introduction' class='error'></label>
							</div>
							<div class='col-3 col-lg-3'><button class='btn form__btn--submit' type='submit'
                                            id='submitBtn'>送出</button>
                                    </div>
					</form>
				</div>
			</div>";
			}
			$num = mysqli_num_rows($result); //查詢結果筆數
			mysqli_free_result($result); // 釋放佔用的記憶體
			if($num==0)
			{
				$tmp="<div class='area-title text-center' ><h2 >尚無留言</h2></div>";				
			}
		}
	}
	else
	{
		if ($result = mysqli_query($link, "SELECT * FROM comment where goods_No =  '".$_GET["product_no"]."' ")) {
			while ($row = mysqli_fetch_row($result)) {
				$b="";
				for($i=0;$i<$row["3"];$i++){
					$b=$b."<svg enable-background='new 0 0 15 15' viewBox='0 0 15 15' x='0' y='0' class='star-icon icon-rating-solid--active icon-rating-solid'>
					<polygon points='7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4' stroke-linecap='round' stroke-linejoin='round' stroke-miterlimit='10'></polygon>
					</svg>";
				}
				$tmp .="<hr><div class='container basic-blo-area  big-board'>
				<img  class='board-head' src='image/icon/icon1.svg'>
				<div class='lit-board'>
					<div class='shopee-product-rating__author-name'>".$row["2"]."</div>
					<div class='board_star'>
						".$b."
					</div>
					<div class='board-time'>".$row["5"]."  </div>
					<div class='pro_text board-text'>".nl2br($row['4'])."</div>
					<dd class='sell3'>
						<a href='product_intro.php?product_no=".$_GET["product_no"]."&change_comment=".$row["0"]."'>編輯留言&nbsp;&nbsp;&nbsp;&nbsp;</a>
						<a href='deletecomment.php?product_no=".$_GET["product_no"]."&change_comment=".$row["0"]."'>刪除留言</a>
					</dd>
				</div>
			</div>";
			}
			$num = mysqli_num_rows($result); //查詢結果筆數
			mysqli_free_result($result); // 釋放佔用的記憶體
			if($num==0)
			{
				
				$tmp="<div class='area-title text-center' ><h2 >尚無留言</h2></div>";			
			}
		}
	}



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
                    <p>".$row["1"]."</p>
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
		<!-- basic-blog-area -->
		<div class="basic-blo-area gray-bg pt-90 pb-50">
			<div class="container">
				<div class="area-title text-center">
					<h2>商品評價</h2>
					<p>In this place, we collect the response from all of our customer.</p>
					<p>Or share your commend, let everybody know your idea</p>
				</div>
					<?php echo $tmp; ?>
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
