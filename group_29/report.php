<!doctype html>
<html lang="">

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
</head>

<body>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    
    <!-- header start -->
		<?php include("_header.php") ;?>
	<!-- header end -->
    
    <div class="basic-breadcrumb-area gray-bg ptb-70">
        <div class="container">
            <div class="basic-breadcrumb text-center">
                <h3 class="">問題回報</h3>
            </div>
        </div>
    </div>
    <div class="basic-contact-form ptb-90">
        <div class="container">
            <div class="area-title text-center">
                <h2>問題表單填寫</h2>
            </div>
            <div class="row report">
                <div class="col-md-12 col-sm-8">
                    <form id="contact-form" action="mail.php" method="post" onSubmit="CheckForm();">
                        <table class="row" border="1">
                            <div class="col-12 col-md-12">
                                    <label for="tel" class="content__subtitle ">您的姓名:</label>
                                    <input id="tel" name="tel" type="tel" class="form-control"
                                        maxlength="10" value="" required="">
                                    <label for="tel" class="error"></label>
                            </div>
                            <div class="col-12 col-md-12">
                                    <label for="question_type[]" class="content__subtitle">遇到的問題:</label>
                                    <select name="question_type[]" class="form-control" required>
                                        <option value="">請選擇</option>
                                        <option value="1">訂單</option>
                                        <option value="2">帳號</option>
                                        <option value="3">退款</option>
                                        <option value="4">功能建議</option>
                                        <option value="5">其他</option>
                                    </select>
                                    <label for="question_type[]" class="error"></label>
                            </div>
                            <div class="col-12 col-md-12">
                                <label for="account" class="content__subtitle">使用者帳號:</label>
                                    <input id="account" name="account" type="account" class="form-control "
                                    value="" required="">
                                    <label for="account" class="error"></label>
                            </div>
                            <div class="col-12 col-md-12">
                                <label for="email" class="content__subtitle">可聯繫到您的電郵 (建議您可同時留意垃圾信件夾，避免錯過客服回覆哦):</label>
                                    <input id="email" name="email" type="email" class="form-control "
                                    value="" required="">
                                    <label for="email" class="error"></label>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="targetProduct" class="content__subtitle">詳情：</label>
                                    <textarea class="form-control" id="targetProduct" name="targetProduct" rows="5"
                                        style="height: 200px;" maxlength="4000" placeholder="請提供詳情以利人員快速為您服務"></textarea>
                                    <label for="targetProduct" class="error"></label>
                                </div>
                            </div>

                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="div_upload" class="content__subtitle">附檔：</label>
                                    <div class="col-md-12">
                                        <div class="form-group" id="div_upload">
                                            <div>
                                                <input type="file" name="doc_upload[]" style="display: inline-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            
                            <div class="col-12 col-lg-12">
                                <hr/>
                            </div>
                            <!--BTns-->
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 ">
                                <div class="row justify-content-md-center">
                                    <div class="col-3 col-lg-3"><button class="btn form__btn--reset"
                                            type="reset">重填</button>
                                    </div>
                                    <div class="col-3 col-lg-3"><button class="btn form__btn--submit" type="submit"
                                            id="submitBtn">送出</button>
                                    </div>
                                </div>
                            </div>


                </div>
                </table>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>


    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <!-- 分類 -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- 返回頂端 -->

    <script src="js/plugins.js"></script>
    <script src="js/jquery.meanmenu.js"></script>


    <script src="js/main.js"></script>
</body>

</html>