<div class="page">
	<div class="navbar navbar-page">
		<div class="navbar-inner sliding">
			<div class="left">
				<a href="#" class="link back">
					<i class="fas fa-arrow-left"></i>
				</a>
			</div>
			<div class="title">
			<?php echo get_phrase('login'); ?>
			</div>
			<div class="right"></div>
		</div>
	</div>
	<div class="page-content">
		<!-- sign in -->
		<div class="sign-in segments">
			<div class="container">
				<form class="list" action="<?php echo site_url('login/validate_login/user'); ?>" method="post">
					<ul>
						<li class="item-content item-input">
							<div class="item-inner">
								<div class="item-input-wrap">
									<input type="email" name = "email" id="login-email" placeholder="<?php echo get_phrase('email'); ?>" value="" required>
								</div>
							</div>
						</li>
						<li class="item-content item-input">
							<div class="item-inner">
								<div class="item-input-wrap">
									<input type="password" class="form-control" name = "password" placeholder="<?php echo get_phrase('password'); ?>" value="" required>
								</div>
							</div>
						</li>
					</ul>
					<div class="wrap-link-action">
						<ul>
							<li>
								<label class="item-checkbox item-content">
									<!-- <input type="checkbox"> -->
									<!-- <i class="icon icon-checkbox"></i> -->
									<div class="item-inner">
										<!-- <div class="item-title">Remember me</div> -->
									</div>
								</label>
							</li>
							<li><a href="#"><?php echo get_phrase('forgot_password'); ?></a></li>
						</ul>
					</div>
					<div class="content-button">
						<button type="submit" class="button primary-button"><?php echo get_phrase('login'); ?></button>
					</div>
				</form>

				<!-- divider -->
				<div class="divider-space-content"></div>
				<!-- end divider -->

				<!-- <div class="wrap-sign-in-with">
					<div class="title">
						<p>or sign in with</p>
						<span></span>
					</div>
					<div class="wrap-media-sign-in">
						<div class="row">
							<div class="col-33">
								<a href="#">
									<div class="content bg-facebook">
										<i class="fab fa-facebook-f"></i>
									</div>
								</a>
							</div>
							<div class="col-33">
								<a href="#">
									<div class="content bg-twitter">
										<i class="fab fa-twitter"></i>
									</div>
								</a>
							</div>
							<div class="col-33">
								<a href="#">
									<div class="content bg-google">
										<i class="fab fa-google"></i>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div> -->
				<!-- divider -->
				<div class="divider-space-content"></div>
				<!-- end divider -->

				<div class="wrap-link-sign-in">
					<p><?php echo get_phrase('do_not_have_an_account '); ?> <a href="/sign-up/"><?php echo get_phrase('sign_up'); ?></a></p>
				</div>
			</div>
		</div>
		<!-- end sign in -->
	</div>
</div>