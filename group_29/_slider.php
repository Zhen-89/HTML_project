<?php
	$link = mysqli_connect("localhost", "root", "root123456", "group_29") // 建立MySQL的資料庫連結
	or die("無法開啟MySQL資料庫連結!<br>");

	// 送出編碼的MySQL指令
	mysqli_query($link, 'SET CHARACTER SET utf8');
	mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");

	// // 資料庫查詢(送出查詢的SQL指令)
	if ($result = mysqli_query($link, "SELECT * FROM bulletin ")) {
		while ($row = mysqli_fetch_assoc($result)) {
			$rows0 .= 	"<div class='single-slider' style='background-image: url(" . $row["slider_picture"] . ");'>
							<div class='container'>
								<div class='slider-content'>
									<h2>" . $row["slider_title"] . "
									</h2>
									<a class='btn' href='Bulletin_board.php'>看更多</a>
								</div>
							</div>
						</div>" ;
		}
		$num = mysqli_num_rows($result); //查詢結果筆數
		mysqli_free_result($result); // 釋放佔用的記憶體
	}
	mysqli_close($link); // 關閉資料庫連結
?>
<!-- 只用來引入 -->
<div class="slider-section">
	<div class="slider-active owl-carousel ">
		<?php echo $rows0; ?>
	</div>
</div>