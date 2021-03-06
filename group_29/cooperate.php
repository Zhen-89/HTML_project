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
                <h3 class="">廠商合作</h3>
            </div>
        </div>
    </div>
    <div class="basic-contact-form ptb-90">
        <div class="container">
            <div class="area-title text-center">
                <h2>請填寫廠商資料</h2>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-8">
                    <form id="contact-form" action="sendmail.php" method="post" onSubmit="CheckForm();">
                        <table class="row" border="1">
                            <div class="col-12 col-lg-6">
                                <label for="companyName">公司名稱：</label>
                                <input id="companyName" name="companyName" type="text" class="form-control"
                                    placeholder="請輸入公司名稱" required>
                                <label for="state" class="error-check"></label>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label for="companyRegistrationID">統一編號：</label>
                                <input id="companyRegistrationID" name="companyRegistrationID" type="text"
                                    class="form-control" placeholder="請輸入統一編號" required>
                                <label for="state" class="error-check"></label>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="tel">聯絡市話:</label>
                                    <div class="form-inline">
                                        <input id="tel" name="tel" type="tel" class="form-control col-12 col-lg-6"
                                            placeholder="請輸入聯絡市話" maxlength="10" value="" required="">
                                        <input id="contactExt" name="contactExt" type="tel"
                                            class="form-control col-12 col-lg-6" placeholder="請輸入分機" maxlength="6"
                                            value="" required="">

                                        <label for="state" class="error-check"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="website">公司網址：</label>
                                    <input id="website" name="website" type="url" class="form-control"
                                        placeholder="請輸入公司網址" value="" pattern="https://.*" size="20" >
                                    <label for="state" class="error-check"></label>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="email">電子郵件:</label>
                                    <input id="email" type="email" name="email" class="form-control"
                                        placeholder="請輸入電子信箱" value="" required="">
                                    <label for="state" class="error-check"></label>
                                </div>
                            </div>

                            <!--聯絡人-->
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="contactPerson">聯絡人：</label>
                                    <input id="contactPerson" name="contactPerson" type="text" class="form-control"
                                        placeholder="請輸入聯絡人" required>
                                    <label for="state" class="error-check"></label>
                                </div>
                            </div>

                            <!--手機門號:-->
                            <div class="col-12 col-lg-6">

                                <div class="form-group">
                                    <label for="mobile">手機號碼:</label>
                                    <input id="mobile" name="mobile" type="text" class="form-control"
                                        placeholder="請輸入手機號碼" required>
                                    <label for="state" class="error-check"></label>
                                    <div class="form__help"><i class="fa fa-info-circle fa-fw"
                                            aria-hidden="true"></i>請輸入正確手機號碼(勿加符號；例：0900000000)</div>

                                </div>
                            </div>
                            <!--洽談商品-->
                            <div class="col-12 col-lg-12">
                                <div class="form-group">
                                    <label for="targetProduct" class="content__subtitle">*洽談商品：</label>
                                    <textarea class="form-control" id="targetProduct" name="targetProduct" rows="5"
                                        style="height: 100px;" maxlength="4000"
                                        placeholder="請提供欲洽談商品以利人員快速為您服務"></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-lg-12">
                                <p class="content__subtitle">網站個資聲明</p>
                                <p>
                                     ※您已知悉並同意所提供之個人資料(聯絡人、電子郵件、聯絡市話、手機號碼等)，特力屋股份有限公司及其關係企業或有合作關係之第三人於營運範圍內，為了聯繫合作事誼，得在台灣地區處理利用您的個資以便合作聯繫使用，並且在處理您的意見後之1年內，自動刪除您本次所留存的個人資料。<br /><br />
                                     ※您知悉依個人資料保護法及相關法令之規定，您可以在我們刪除您所留存之個資期日前，申請個資查詢、閱覽、製給複製本、補充或更正個資，並得請求停止蒐集、處理、利用或刪除個資，如果不能正確或完整提供個人資料，將無法聯繫合作事誼。如您有任何疑問或申請，請洽0800-061-000詢問。<br /><br />
                                     ※您的隱私權我們絕對尊重並給予保護，絕不會向第三者公開、出售、交換或出租相關資料。<br /><br />
                                 </p>
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
                                            type="reset">清除重填</button>
                                    </div>
                                    <div class="col-3 col-lg-3"><button class="btn form__btn--submit" type="submit"
                                            id="submitBtn ">確認送出</button>
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