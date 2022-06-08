<?php
session_start();
$name = "";  $password = "";
if ( isset($_POST["act"]) )
   $name = $_POST["act"];
if ( isset($_POST["pwd"]) )
   $password = $_POST["pwd"];
?>
<?php
if ($name != "" && $password != "") {
    $link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
        or die("無法開啟MySQL資料庫連結!<br>");

    // 送出編碼的MySQL指令
    mysqli_query($link, 'SET CHARACTER SET utf8');
    mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

    // // 資料庫查詢(送出查詢的SQL指令)
    if ($result = mysqli_query($link, "SELECT * FROM member WHERE mem_account='".$name."' AND mem_code='".$password."'")) {
        while ($row = mysqli_fetch_row($result)) {
            $_SESSION['level']= $row["8"];
            $_SESSION['name']= $row["3"];
            $_SESSION['no']= $row["9"];
        }
        $num = mysqli_num_rows($result); //查詢結果筆數
        mysqli_free_result($result); // 釋放佔用的記憶體
    }

    mysqli_close($link); // 關閉資料庫連結
    
    if($_SESSION['level']=='1'||$_SESSION['level']=='2')
    {
    ?>
        <meta http-equiv="refresh" content="0;url=index.php"></meta>
    <?php
    }
    if($_SESSION['level']=='0')
        echo "<script>alert('帳號或密碼錯誤')</script>";

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
                <h2>會員登入</h2>
            </div>
            <div class="row">
                <div class="text-center">
                    <form id="contact-form" action="login.php" method="post">
                        <div class="row center-block" style="width:35%;  ">
                            <div class="form-group ">
                                <label class="sr-only">First Name</label>
                                <input type="text" class="form-control input-lg" name="act" placeholder="帳號" required>                               
                                <p class="help-block text-danger"></p>
                            </div>                           
                            <div class="form-group ">
                                <label class="sr-only">First Name</label>
                                <input type="password" class="form-control input-lg" name="pwd" placeholder="密碼"
                                    required>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-lg btn-round btn-dark">登入</button>                                
                                <a href="register.php" class="btn btn-lg btn-round btn-dark">註冊</a>         
                                                      
                            </div>
                            <div class="col-md-12 text-center">
                                <br><a href="getpwd.php">忘記密碼</a></br>
                                <br><a href="change_code.php">修改密碼</a></br>
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