<!-- 只用來引入 -->
<?php
session_start();
	if(!isset($_SESSION['level'])) {
		$_SESSION['level'] = '0';
	}
	$no=$_SESSION["no"];	
// 搜尋關鍵字
	if(isset($_POST["search"])){
		setcookie("search", $_POST["search"] , time()+10);
		$rsh = $_POST["search"] ;
	}
	else if(isset($_COOKIE["search"])){
		$rsh = $_COOKIE["search"] ;
	}
	else	
		$rsh = "" ;
?>
<header id="sticky-header">
	<div class="header-area">
		<div class="container sm-100">
			<div class="row">
				<div class="col-md-2 col-sm-2">
					<div class="logo text-upper">
						<h4><a href="index.php">costco</a></h4>
					</div>
				</div>
				<div class="col-lg-5 col-md-3 col-sm-3 ">
					<form name="form1" action="Search-result.php" method="POST">
						<div class="search logo ">
							<input type="text" placeholder="輸入商品名稱" name="search" value="<?=$rsh?>">
							<button type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
				<div class="col-lg-5 col-md-7 col-sm-7">
					<div class="menu-area hidden-xs">
						<nav>
							<ul class="basic-menu clearfix">
								<?php
								if($_SESSION['level']=='1'){	
								?>
									<li> <a href="logout.php">登出</a></li>
									<li>
										<a><?php echo $_SESSION['name']?> </a>
										<ul>										
											<!-- <li><a href="memberlist.php"><?php echo $no ?></a></li> -->
											<!-- <li><a href="personal information.php">個人資料</a></li> -->
											<!-- $rows .= "<h5 class='anno-title'><a href='adminmem.php?who=".$_SESSION["no"]."' >會員帳號ID:" . $row["0"] . "&emsp;姓名:" . $row["3"] . "</a></h5>"; -->
											<li><a href='personal information.php?who=<?php echo $_SESSION["no"]?>' >個人資料</a></li>
											<li><a href='Order_summary.php?who=<?php echo $_SESSION["no"]?>'>訂單查詢</a></li>

										</ul>
									</li>
								<?php
								}
								else if($_SESSION['level']=='2'){	
								?>
									<li> <a href="logout.php">登出</a></li>
									<li>
										<a><?php echo $_SESSION['name']?> </a>
										<ul>
											<li><a href="memberlist.php">管理員</a></li>
										</ul>
									</li>
								<?php
								}
								else
								{
								?>
								<li><a href="login.php">登入/註冊</a></li>
								<li>
										<a>會員中心</a>
										<ul>
											<!-- <li><a href="memberlist.php">管理員</a></li> -->
											<li><a href="personal information.php">個人資料</a></li>
											<li><a href="Order_summary.php">訂單查詢</a></li>
										</ul>
									</li>
								<?php
								}
								?>
								

								<li>
									<a href="question.php">常見問題</a>
								</li>

								<li>
									<a href="shopping.php">購物車</a>
								</li>
								<!-- END BLOG -->
								<li>
									<a>聯絡我們</a>
									<ul>
										<li><a href="cooperate.php">廠商合作</a></li>
										<li><a href="report.php">問題回報</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
					<!-- basic-mobile-menu -->
					<div class="basic-mobile-menu visible-xs">
						<nav id="mobile-nav">
							<ul>
							<?php
								if($_SESSION['level']=='1'){	
								?>
									<li> <a href="logout.php">登出</a></li>
									<li>
										<a><?php echo $_SESSION['name']?> </a>
										<ul>
											<!-- <li><a href="memberlist.php">管理員</a></li> -->
											<li><a href="personal information.php">個人資料</a></li>
											<li><a href="Order_summary.php">訂單查詢</a></li>
										</ul>
									</li>
								<?php
								}
								else if($_SESSION['level']=='2'){	
								?>
									<li> <a href="logout.php">登出</a></li>
									<li>
										<a><?php echo $_SESSION['name']?> </a>
										<ul>
											<li><a href="memberlist.php">管理員</a></li>
										</ul>
									</li>
								<?php
								}
								else
								{
								?>
								<li><a href="login.php">登入/註冊</a></li>
								<li>
										<a>會員中心</a>
										<ul>
											<!-- <li><a href="memberlist.php">管理員</a></li> -->
											<li><a href="personal information.php">個人資料</a></li>
											<li><a href="Order_summary.php">訂單查詢</a></li>
										</ul>
									</li>
								<?php
								}
								?>

								<li>
									<a href="question.php">常見問題</a>
								</li>

								<li>
									<a href="shopping.php">購物車</a>
								</li>
								<!-- END BLOG -->
								<li><a>聯絡我們</a>
									<ul>
										<li><a href="cooperate.php">廠商合作</a></li>
										<li><a href="report.php">問題回報</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>