<?php
session_start();
    $link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
        or die("無法開啟MySQL資料庫連結!<br>");

    // 送出編碼的MySQL指令
    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
    $a="";
    // // 資料庫查詢(送出查詢的SQL指令)
    if ($result = mysqli_query($link, "SELECT * FROM member WHERE mem_account='".$_POST["act"]."' AND mem_email='".$_POST["e-mail"]."'")) {
        while ($row = mysqli_fetch_row($result)) {
            $a=$row["1"];
            echo "<script> {window.alert('您的密碼為:$a');location.href='login.php'} </script>";
        }
        $num = mysqli_num_rows($result); //查詢結果筆數
        mysqli_free_result($result); // 釋放佔用的記憶體
        if(isset($_POST["act"])) {
            if($num==0)
            {
                echo "<script> {window.alert('輸入的帳號或電子信箱有錯');} </script>";
            }
        }
    }

    mysqli_close($link); // 關閉資料庫連結
    
    if($_SESSION['level']=='1'||$_SESSION['level']=='2')
    {
    ?>
        <meta http-equiv="refresh" content="0;url=index.php"></meta>
    <?php
    }

if($_SESSION['level']!='0')
{
    ?>
    <meta http-equiv="refresh" content="0;url=index.php"></meta>
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
                <h3 class="">會員登入</h3>             
            </div>
        </div>
    </div>

    <div class="basic-contact-form ptb-90">
        <div class="container ">
            <div class="area-title text-center" style="margin-bottom: 1%;">
                <h2>找回密碼</h2>
            </div>
            <div class="row">
                <div class="text-center">
                    <form id="contact-form" action="getpwd.php" method="post">
                        <div class="row center-block" style="width:35%;  ">
                            <div class="form-group ">
                                <label class="sr-only">First Name</label>
                                <input type="text" class="form-control input-lg" name="act" placeholder="帳號" required>                               
                                <p class="help-block text-danger"></p>
                            </div>                           
                            <div class="form-group ">
                                <label class="sr-only">First Name</label>
                                <input type="email" class="form-control input-lg" name="e-mail" placeholder="電子信箱" required>                               
                                <p class="help-block text-danger"></p>
                            </div>   

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-lg btn-round btn-dark">確認</button>      
                                                      
                            </div>
                            <div class="col-md-12 text-center">
                                <br><a href="login.php">返回登入頁面</a></br>
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
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>