<?php
session_start();

if ($_SESSION['level'] != '1') {
?>
  <meta http-equiv="refresh" content="0;url=login.php">
  </meta>
<?php
}
?>
<!doctype html>
<html class="no-js" lang="">

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
    <!-- 柏克萊 -->
    <link href="https://jci.book.com.tw/css/books/member/css.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <!-- /PRELOADER -->
    
    <!-- header start -->
		<?php include("_header.php") ;?>
	<!-- header end -->

    <!-- basic-breadcrumb start -->
    <div class="basic-breadcrumb-area gray-bg ptb-70">
        <div class="container">
            <div class="basic-breadcrumb text-center">
                <h3 class="">訂單查詢</h3>
                <!-- <ol class="breadcrumb text-xs">
						<li><a href="index.php">Home</a></li>
						<li class="active">Contact</li>
					</ol> -->
            </div>
        </div>
    </div>

    <div class="basic-contact-form ptb-50">
        <div class="container ">
            <!-- <div class="area-title text-center" style="margin-bottom: 1%;">
					<h2>會員登入</h2>					
				</div>                   -->

            <div class="container_12 clearfix">
                <div class="grid_12">
                    <!-- breadcrumb  -->
                    <div class="clearfix"></div>
                    <!-- breadcrumb end -->
                </div>
                <div class="clearfix">
                    <div class="grid_2">
                        <!--mod-006-->
                        <ul class="mb-3 mod-006 icon clearfix">
                            <li>
                                <h4><i class="icon-paste-solid"></i>讓我看看你有什麼本事</h4>
                                <ul>
                                    <li>
                                        <a href="personal information.php">個人資料</a>
                                    </li>
                                    <li>
                                        <a href="Order_summary.php">訂單查詢</a>
                                    </li>
                                </ul>
                            </li>                           
                           
                        </ul>
                        <!--mod-006 end-->
                    </div>
                    <div class="grid_10">
                        <!-- content start -->

                        <!--page-title-->
                        <h2 class="page-title clearfix">
                            <span>訂單查詢</span>
                        </h2>
                        <!--panel-title end-->

                        <!--list-group-04-->
                        <ul class="mod list-group-04 right clearfix">                                                     
                            <li>退貨處理數量：0件</li>
                            
                        </ul>
                        <!--list-group-04 end-->

                        <!--list-group-03-->
                        <!-- <ul class="mb-2 list-group-03 clearfix">                            
                            <li><span>尚有<b><a
                                            href=""><strong>未出貨</strong></a></b>的品項，將儘速為您處理</span>
                            </li>
                        </ul> -->
                        <!--list-group-03 end-->                      

                        <!--mod-->
                        <div class="mb-2 clearfix">

                            <!-- table-04 -->
                            <div class="mod clearfix">
                                <table border="1" class="table-04">
                                    <colgroup>
                                        <col width="15%">
                                        <col width="85%">
                                    </colgroup>
                                </table>
                            </div><!-- table-04 end -->
                            <!-- <div class="mt-2 mb-2 btn-wrap center">
                    <button type="button" class="btn btn-03 color" style="min-width:80px;"
                        id="butsearchcomplex">查詢</button>                       
                </div> -->
                        </div>
                        <!--mod end-->


                        <!--mod-->
                        <div class="mb-2 clearfix">
                            <h3 class="panel-title clearfix">
                                <!--<span><b>一個月內訂單</b><em>共<cite>4</cite>筆訂單</em></span>-->
                                <span><b>一個月內訂單</b><em>共<cite>1</cite>筆訂單</em></span>
                            </h3>

                            <!--list-->
                            <ul class="mod list-group-icon clearfix">
                                <!--<li>訂單會依庫存狀況分批出貨，您可點選訂單編號下的『看完整內容』查看完整的訂單資料</li>-->
                            </ul>
                            <!--list end-->                         

                            <!--scroll-->
                            <!--<div class="scroll-wrap">-->
                            <!-- table-01 -->
                            <div class="mod clearfix">
                                <table border="1" class="table-01">
                                    <colgroup>
                                        <col width="4%">
                                        <col width="13%">
                                        <col width="9%">
                                        <col width="12%">
                                        <col width="8%">
                                        <col width="31%">
                                        <col width="5%">
                                        <col width="18%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>訂單編號</th>
                                            <th>訂購時間</th>
                                            <th>付款方式</th>
                                            <th>訂單金額</th>
                                            <th>商品名稱</th>
                                            <th>數量</th>
                                            <th>處理狀態</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="2">1</td>
                                            <td rowspan="2">123<cite><a
                                                        href="訂單內容">看完整內容</a></cite>
                                            </td>
                                            <td rowspan="2">2022/04/05<br>21:48:13</td>
                                            <td rowspan="2">7-11取貨付款</td>
                                            <td rowspan="2"><em>495</em></td>
                                            <td class="left"><a href="">產品一</a>
                                            </td>
                                            <td>1</td>
                                            <td>出貨處理中<br><span class="tip"><a class="popDetail"
                                                        href="#">詳細進度查詢</a></span></td>
                                        </tr>
                                        <tr>
                                            <td class="left"><a href="">產品二</a>
                                            </td>
                                            <td>1</td>
                                            <td>出貨處理中<br><span class="tip"><a class="popDetail"
                                                        href="#">詳細進度查詢</a></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- table-01 end -->
                            <!--</div>-->
                            <!--scroll end-->
                            <!-- table-01 end -->

                            <!-- mod-pagination -->
                            <div class="mod mod-pagination clearfix">
                                <ul class="page">
                                    <li><a href="javascript:;" class="active">1</a></li>

                                </ul>
                            </div>
                            <!--mod-pagination end -->                          
                        </div>
                        <!--mod end-->
                    </div><!-- content end -->
                </div>
            </div>
        </div>

        <!-- All js plugins here -->
        <script data-cfasync="false" src="js/email-decode.min.js"></script>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/mail.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
</body>

</html>