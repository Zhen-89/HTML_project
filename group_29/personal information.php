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
        <h3 class="">個人資料</h3>
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
              <li>
                <!-- <h4>
                              <i class="icon-user-edit-solid"></i
                              >客戶資料&nbsp;/&nbsp;帳號管理
                            </h4> -->
                <ul>
                  <!-- <li class="active">
                                <a href="">會員資料管理</a>/<a href="">修改密碼</a>
                              </li> -->



                </ul>
              </li>
            </ul>
            <!--mod-006 end-->
          </div>
          <div class="grid_10">
            <!-- content start -->

            <!--page-title-->
            <!--panel-title end-->
            <!--mod-->
            <form name="form" method="POST" id="form">
              <div class="mb-2 clearfix">
                <h3 class="panel-title clearfix">
                  <!-- <span><b>會員資料</b></span> -->
                </h3>
                <!-- table-04 -->
                <div class="mod modify-data clearfix">
                  <div class="box-line">
                    <table border="1" class="table-04">
                      <colgroup>
                        <col width="19%" />
                        <col width="31%" />
                        <col width="19%" />
                        <col width="31%" />
                      </colgroup>
                      <tbody>
                        <tr>
                          <th>會員帳號<br />ID</th>
                          <td>test</td>
                          <th>生日<br />Birth</th>
                          <td>2002年06月</td>
                        </tr>
                        <tr>
                          <th>
                            姓名&nbsp;/&nbsp;性別<br />Name&nbsp;/&nbsp;Gender
                          </th>
                          <td colspan="3">
                            <input type="text" id="name" name="name" class="input" maxlength="" value="石*辰"
                              style="width: 275px" onchange="changeValue(this.id)" />
                        </tr>
                        <tr>
                          <th>電子郵件<br />E-Mail</th>
                          <td colspan="3">
                            <input type="email" id="email" name="email" class="input" maxlength=""
                              value="test@gmail.com" style="width: 275px" onchange="changeValue(this.id)" />
                            <input type="hidden" name="is_email_edit" id="is_email_edit" value="N" />
                            <input type="hidden" name="org_email" value="test@gmail.com" />
                            <p class="err" id="email_notice"></p>
                          </td>
                        </tr>
                        <tr>
                          <th>行動電話<br />Mobile</th>
                          <td colspan="3">
                            <input type="mobile" name="mobile" id="mobile" class="input" maxlength="" value="0974****33"
                              style="width: 275px" onchange="changeValue(this.id)" />
                            <span class="msg font-13">建議填寫，必要時可為您提供更多服務</span>
                            <p class="err" id="mobile_notice"></p>
                          </td>
                        </tr>
                        <tr>
                          <th>室內電話<br />Tel</th>
                          <td colspan="3">
                            <input type="tel" id="tel" name="tel" class="input" maxlength="" value=""
                              style="width: 275px" onchange="changeValue(this.id)" />
                            <input type="hidden" name="is_tel_edit" id="is_tel_edit" value="N" />
                            <span class="msg font-13">例如 02-27821100#000</span>
                            <p class="err" id="tel_notice"></p>
                          </td>
                        </tr>
                        <tr>
                          <th>聯絡地址<br />Location</th>
                          <td colspan="3" class="">
                            <p class="mod msg font-13">
                              本地址將作為您日後購物預設寄送地址，請勿填寫郵政信箱
                            </p>
                            <input type="hidden" name="org_area" value="T" />
                            <p class="mod clearfix">
                            <div class="form-group ">
                              <label class="sr-only">First Name</label>
                              <input type="text" class="form-control input-lg" name="Location" placeholder="地址">
                              <!-- <div class="invalid-feedback">
                                                    please provide a valid state
                                                </div> -->
                              <p class="help-block text-danger"></p>
                            </div>
                            <!--input type="radio" name="area" id="lbfr081" value ="T"-->


                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- table-04 end -->
              </div>
              <!--mod end-->

              <!-- <div class="mb-2 clearfix">
                <div class="modify-data-check">
                  資料修改確認：請輸入密碼&nbsp;
                  <input class="input" name="check_pwd" id="check_pwd" type="password" placeholder="" maxlength="12"
                    style="width: 150px" />
                  <span class="red" id="pwd_notice"></span>
                  &nbsp;&nbsp;&nbsp;驗證碼&nbsp;
                  <input class="input" name="captcha" id="captcha" type="text" placeholder="" style="width: 80px"
                    maxlength="4" />
                  <span class="red" id="captcha_notice"></span>&nbsp;

                  <div id="captcha_img">
                    <img src="/myaccount/myacc_captcha/captcha_login?37a401552d3ca2564e782cb17d353e97" width="160"
                      height="75" />
                  </div>
                  &nbsp;
                  <a href="javascript:;" id="regen">重新產生</a>
                </div>
              </div> -->

              <div class="mt-5 mb-2 btn-wrap center">
                <button type="button" class="btn btn-03 color" id="btn_upt" style="min-width: 110px">
                  確定修改
                </button>
                <!-- <a href="" class="btn btn-03 color" style="min-width:110px;">確定修改</a>
                <input type="hidden" name="flag" id="flag" value="save" />
                <input type="hidden" name="is_mobile_edit" id="is_mobile_edit" value="N" />
                <input type="hidden" name="is_otp_mobile_edit" id="is_otp_mobile_edit" value="N" /> -->
              </div>
            </form>
          </div>
          <!-- content end -->
        </div>
      </div>




    </div>
  </div>

  <!-- All js plugins here -->
  <script data-cfasync="false" src="js/email-decode.min.js"></script>
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