<?php
//Cookie 課堂練習--網頁個人化設定
if (isset($_COOKIE["counter"]))
{   
    $cnt = $_COOKIE["counter"] + 1 ;    
   
}  
else
{
    $cnt=1;
    
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
    <link rel="stylesheet" href="css/shopping.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
                <h3 class="">購物車</h3>
            </div>
        </div>
    </div>



    <!---Pay-Page-->
    <hr>
    <div class="container mt-5">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div id="collapseOne" class="collapse show " aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th width="100"></th> <!-- 放圖片用的 -->
                                <th>商品名稱</th>
                                <th>單價</th>
                                <th>數量</th>
                                <th>小計</th>
                                <th width="20"></th> <!-- 放刪除的符號 -->
                            </tr>
                        </thead>
                        <tbody>
                            <!--  -->
                            <tr >                               
                                <td class="align-middle">                                   
                                        <img src="image\123.jpg" alt="..." width="100px;">                                    
                                </td>
                                <td >一級偽裝帽</td>
                                <td class="align-items-center" >$999</td>
                                <td >
                                    <button type="submit" class="">-</button>
                                    1
                                    <button type="submit" class="">+</button>
                                </td>
                                <td class="align-middle">$999</td>                                
                                <td><button type="input" class="btn btn-xs btn-round btn-dark">移除</button></td>                                 

                            </tr>
                            <tr class="text-right">
                                <td colspan="4"><strong>運費</strong></td>
                                <td><strong>$ 60</strong></td>
                            </tr>
                            <tr class="text-right">
                                <td colspan="4"><strong>合計</strong></td>
                                <td><strong>$ 1059</strong></td>
                            </tr>
                        </tbody>



                    </table>


                </div>
            </div>
        </div>
    </div>



    <!---Finish-Page-->
    <hr>
    <div class="container mt-5">
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary px-5">結帳</a>
        </div>
    </div>

    <!-- All js plugins here -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/mail.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>