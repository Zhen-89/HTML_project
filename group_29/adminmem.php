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
        <link
        href="https://jci.book.com.tw/css/books/member/css.css"
        rel="stylesheet"
        type="text/css"
        media="all"
      />
      
    <link rel="stylesheet" href="css/admin.css">
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
              <h3 class="">管理者</h3>
          </div>
      </div>
  </div>	
  <div class="basic-contact-form ptb-90" style="padding:0px;">
    <div class="container">
        <div id="top-menu">
            <div id="member_center" class="clearfix">
                <button class="member_btn">管理中心</button>
            </div>
        </div>
    </div>
</div>

<div class="basic-contact-form ptb-70" style="padding-top:0px;">
  <div class="container">
      <div id="leftMenu">
          <ul id="leftMenu_ul">
              <li id="userInfo" class="menu-nav">
                  <strong id="strong_userInfo">會員</strong>
                  <ul id="userInfo" >
                      <li class="navS">
                          <a href="memberlist.php">會員總覽</a>
                      </li>

                  </ul>
              </li>
              <li id="li_buy" class="menu-nav">
                  <strong id="strong_buy">商品</strong>
                  <ul id="buy">
                      <li >
                          <a href="selllist.php">商品列表</a>
                      </li>
                      <li>
                          <a href="addsell.php">新增商品</a>
                      </li>
                      <li>
                          <a href=""></a>
                      </li>

                  </ul>
              </li>
              <li id="li_Order" class="menu-nav">
                  <strong id="strong_Order">訂單</strong>
                  <ul id="Order">
                      <li>
                          <a href="">退貨處理</a>
                      </li>

                  </ul>
              </li>
              <li id="li_anno" class="menu-nav">
                  <strong id="strong_anno">資訊</strong>
                  <ul id="anno">
                      <li>
                          <a href="annolist.php">公告列表</a>
                      </li>
                      <li >
                          <a href="addanno.php">新增公告</a>
                      </li>
                  </ul>
              </li>
          </ul>
      </div>
      <div class="right-Content" id="rightContent">
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
                        <td colspan="3" >
                          <input
                            type="text"
                            id="name"
                            name="name"
                            class="input"
                            maxlength=""
                            value="石*辰"
                            style="width: 275px"
                            onchange="changeValue(this.id)"
                            readonly="readonly"
                          />                                                                       
                      </tr>
                      <tr>
                        <th>電子郵件<br />E-Mail</th>
                        <td colspan="3">
                          <input
                            type="email"
                            id="email"
                            name="email"
                            class="input"
                            maxlength=""
                            value="test@gmail.com"
                            style="width: 275px"
                            onchange="changeValue(this.id)"
                            readonly="readonly"
                          />
                          <input
                            type="hidden"
                            name="is_email_edit"
                            id="is_email_edit"
                            value="N"
                          />
                          <input
                            type="hidden"
                            name="org_email"
                            value="test@gmail.com"
                          />
                          <p class="err" id="email_notice"></p>
                        </td>
                      </tr>
                      <tr>
                        <th>行動電話<br />Mobile</th>
                        <td colspan="3">
                          <input
                            type="mobile"
                            name="mobile"
                            id="mobile"
                            class="input"
                            maxlength=""
                            value="0974****33"
                            style="width: 275px"
                            onchange="changeValue(this.id)"
                            readonly="readonly"
                          />
                          <span class="msg font-13"
                            >建議填寫，必要時可為您提供更多服務</span
                          >
                          <p class="err" id="mobile_notice"></p>
                        </td>
                      </tr>
                      <tr>
                        <th>室內電話<br />Tel</th>
                        <td colspan="3">
                          <input
                            type="tel"
                            id="tel"
                            name="tel"
                            class="input"
                            maxlength=""
                            value=""
                            style="width: 275px"
                            onchange="changeValue(this.id)"
                            readonly="readonly"
                          />
                          <input
                            type="hidden"
                            name="is_tel_edit"
                            id="is_tel_edit"
                            value="N"
                          />
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
                                  <input type="text" class="form-control input-lg" name="Location" placeholder="地址" readonly="readonly">
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
      </div>
  </div>
</div>
</div>
                      

		<!-- All js plugins here -->
        <script data-cfasync="false" src="js/email-decode.min.js"></script><script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/mail.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs"></script>
		
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>