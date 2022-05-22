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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-latest.min.js"></script> -->

    <!-- 表單驗正 -->
    <script>
    // $duplicate=0;
    $(document).ready(function($) {
        //for select
        $.validator.addMethod("notEqualsto", function(value, element, arg) {
            return arg != value;
        }, "您尚未選擇!");

        $("#form1").validate({
            submitHandler: function(form) {
                $.ajax({
                    async: false,
                    url: "ajx_check_account_jquery.php",
                    data: $('#form1').serialize(),
                    type: "POST",
                    dataType: 'text',
                    success: function(msg) {
                        $("#show_msg").html(msg); //顯示訊息 
                        if(msg!="此帳號已存在!")      
                        {
                           // alert("註冊成功!"); 
                            form.submit();
                        }  
                       
                        //document.getElementById('show_msg').innerHTML= msg ;
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });                
               
              
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
                    equalTo: "#pwd",
                },
                email: {
                    required: true,
                    email: true
                },

            },
            messages: {
                account: {
                    required: "填一下拉",
                    maxlength: "帳號最長10個字"
                },
                email: {
                    required: "填一下拉",
                    email: "格式不對喔"
                },
                pwd: {
                    required: "必填",
                    minlength: "好像u點短喔，再來一點",
                },
                pwd2: {
                    required: "必填",
                    equalTo: "兩次密碼不相符"
                },
            },
        });
    });
    </script>
    

    <style type="text/css">
    .error {
        color: #d82424;
        font-weight: normal;
        font-family: "微軟正黑體";
        display: inline;
        padding: 1px;
    }
    </style>

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
                    <form id="form1" name="form1" action="addmember.php" method="post">
                        <div class="row center-block" style="width:35%;  ">
                            <div class="form-group ">
                                <!-- <label class="sr-only">First Name</label> -->
                                <label for="account"></label>
                                <input type="text" class="form-control input-lg" name="account" id="account"
                                    placeholder="帳號">
                                <span id="show_msg" style="color:red"></span></td>
                                <!-- <p class="help-block text-danger"></p> -->
                            </div>

                            <div class="form-group ">

                                <input type="email" class="form-control input-lg" name="email" id="email"
                                    placeholder="請輸入電子信箱">
                                <!-- <p class="help-block text-danger"></p> -->
                            </div>

                            <div class="form-group ">

                                <input type="password" class="form-control input-lg" name="pwd" id="pwd" placeholder="密碼">
                                <!-- <p class="help-block text-danger"></p> -->
                            </div>

                            <div class="form-group ">

                                <input type="password" class="form-control input-lg" name="pwd2" id="pwd2"
                                    placeholder="密碼確認">
                                
                                <!-- <p class="help-block text-danger"></p> -->
                            </div>

                            <div class="col-md-12 text-center">
                                <!-- <input type="submit" class="btn btn-lg btn-round btn-dark"  value="送出"></input> -->
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


</body>

</html>