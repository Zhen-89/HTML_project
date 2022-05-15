<?php
session_start();
$name = "";  $password = "";
if ( isset($_POST["account"]) )
   $name = $_POST["account"];
if ( isset($_POST["email"]) )
   $email = $_POST["email"];
if ( isset($_POST["pwd"]) )
   $pwd = $_POST["pwd"];
if ( isset($_POST["pwd2"]) )
   $pwd2 = $_POST["pwd2"];
?>
<!-- 紀錄輸入的資料 -->


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

    <!-- 表單驗證 -->
    <script>
$(document).ready(function($) {
    //for select
    $.validator.addMethod("notEqualsto", function(value, element, arg) {
        return arg != value;
    }, "您尚未選擇!");

$("#contact-form").validate({
    submitHandler: function(form) {
        alert("success!");
        form.submit();
    },
    rules: {
        account: {
            required: true,            
            maxlength: 10
        },
        pwd: {
            required: true,
            minlength: 6,
            maxlength: 12
        },
        pwd2: {
            required: true,
            equalTo: "#pwd"
        },
        email: {
            required: true,
            email: true
        }      
        
    },
    messages: {
        account: {
            required: "帳號為必填欄位",            
            maxlength: "帳號最長10個字"
        },
        pwd2: {
            equalTo: "兩次密碼不相符"
        }       
    }
});
});
</script>


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
                <h3 class="">會員註冊</h3>
            </div>
        </div>
    </div>

    <div class="basic-contact-form ptb-90">
        <div class="container ">
            <div class="area-title text-center" style="margin-bottom: 1%;">
                <h2>會員註冊</h2>
            </div>
            <div class="row">
                <div class="text-center">
                    <form id="contact-form" action="" method="POST">
                        <div class="row center-block" style="width:35%;  ">
                            <div class="form-group ">
                                <label class="sr-only">First Name</label>
                                <input type="text" class="form-control input-lg" name="account" id="account" placeholder="帳號"
                                    >
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group ">
                                <label class="sr-only">First Name</label>
                                <input type="email" class="form-control input-lg" name="email" placeholder="請輸入電子信箱"
                                    required>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group ">
                                <label class="sr-only">First Name</label>
                                <input type="password" class="form-control input-lg" name="pwd" placeholder="密碼"
                                    required>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="form-group ">
                                <label class="sr-only">First Name</label>
                                <input type="password" class="form-control input-lg" name="pwd2" placeholder="密碼確認"
                                    required>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-lg btn-round btn-dark">註冊</button>
                                <a href="login.php" class="btn btn-lg btn-round btn-dark">返回登入頁面</a>
                            </div>


                        </div><!-- .row -->
                    </form>
                    <!-- Ajax response -->
                    <!-- <div class="ajax-response text-center"></div> -->
                </div>
            </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script> 
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
</body>

</html>