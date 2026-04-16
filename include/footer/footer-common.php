	<!--footer--></main>
	<footer id="footer">
		<div class="inner">
			<div class="logo">
				<a href="<?php echo home_url(); ?>">
				</a>
			</div>
			<div class="computer">
				<nav class="flex-add justify-start">
					<div id="navi-in" class="navi-in">
						<?php
						wp_nav_menu(array(
							//カスタムメニュー名
							'theme_location' => 'header-navi',
							//コンテナを表示しない
							'container' => false,
							//カスタムメニューを設定しない際に固定ページでメニューを作成しない
							'fallback_cb' => false,
							//出力されるulに対して idや classを表示しない
							'items_wrap' => '<ul class="navi">%3$s</ul>',
						));
						?>
					</div>
					<!--/#navi-in-->
				</nav>
				<div class="links">
					<div class="login">
						<a href="#">
							<p>会員の方はこちら</p>
						</a>
					</div>
					<div class="policys">
						<a href="#">
							<p>プライバシーポリシー</p>
						</a>
						<a href="#">
							<p>特定商取引法に基づく表記</p>
						</a>

					</div>
				</div>
			</div>
			<div class="container copyright">
				<p class="small"><small>Copyright© Milize. All Rights Reserved</small></p>
			</div>
		</div>
	</footer>
	</div>

	<?php // ← all-wrapper末尾 
	?>
	<?php wp_footer(); ?>
	</body>

	</html>