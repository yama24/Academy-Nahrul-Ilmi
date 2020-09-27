<?php
$user_details = $this->user_model->get_user($this->session->userdata('user_id'))->row_array();
?>
<div id="app">
	<div class="view view-main view-init ios-edges" data-url="/">
		<div class="page page-home page-with-subnavbar">
			<!-- toolbar dimulai -->
			<div class="toolbar tabbar tabbar-labels toolbar-bottom">
				<div class="toolbar-inner">
					<a href="#tab-home" class="tab-link tab-link-active">
						<i class="fas fa-home"></i>
						<span class="tabbar-label">Home</span>
					</a>
					<a href="#tab-wishlist" class="tab-link">
						<i class="fas fa-heart"></i>
						<span class="tabbar-label">Wishlist</span>
					</a>
					<a href="#tab-brand" class="tab-link">
						<i class="fas fa-star"></i>
						<span class="tabbar-label">Official Brand</span>
					</a>
					<a href="#tab-cart" class="tab-link">
						<i class="fas fa-shopping-cart"></i>
						<span class="tabbar-label">Cart</span>
					</a>
					<a href="#tab-account" class="tab-link">
						<i class="fas fa-user"></i>
						<span class="tabbar-label">Account</span>
					</a>
				</div>
			</div>
			<!-- toolbar diakhiri -->
			<div class="tabs">
				<div id="tab-home" class="tab tab-home tab-active">
					<!-- home -->

					<!-- navbar home pencarian dll -->
					<div class="navbar navbar-home">
						<div class="navbar-inner">
							<div class="left">
								<a href="#" class="panel-open" data-panel="left">
									<i class="fas fa-align-left"></i>
								</a>
							</div>
							<div class="title">
								<form class="searchbar searchbar-init" data-search-container=".search-list" data-search-in=".item-title">
									<div class="searchbar-inner">
										<div class="searchbar-input-wrap">
											<input type="search" placeholder="Search for products for stores">
											<i class="searchbar-icon"></i>
											<span class="input-clear-button"></span>
										</div>
										<span class="searchbar-disable-button">Cancel</span>
									</div>
								</form>
							</div>
							<div class="">
								<a href="#" onClick="window.location.href=window.location.href">
									<i class="fas fa-sync-alt"></i>
									<span></span>
								</a>
							</div>
						</div>
					</div>
					<!-- end navbar home -->

					<!-- sidebarbar or panel atau pengganti menu -->
					<div class="panel-backdrop"></div>
					<div class="panel panel-left panel-cover sidebar">
						<div class="user-view">
							<?php
							if (file_exists('uploads/user_image/' . $user_details['id'] . '.jpg')) : ?>
								<img src="<?php echo base_url() . 'uploads/user_image/' . $user_details['id'] . '.jpg'; ?>" alt="" class="img-fluid">
							<?php else : ?>
								<img src="<?php echo base_url() . 'uploads/user_image/placeholder.png'; ?>" alt="" class="img-fluid">
							<?php endif; ?>
							<!-- <img src="<?php echo base_url() . 'assets/frontend/default/images/user-buyer6.png'; ?>" alt=""> -->
							<div class="title-name">
								<h5><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?></h5>
								<p><?php echo $user_details['email']; ?></p>
							</div>
						</div>
						<div class="list media-list">
							<ul>
								<li>
									<a href="/wishlist/" class="item-link panel-close item-content">
										<div class="item-media">
											<i class="fas fa-heart"></i>
										</div>
										<div class="item-inner">
											<div class="item-title-row">
												<div class="item-title">Wishlist</div>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/notification/" class="item-link panel-close item-content">
										<div class="item-media">
											<i class="fas fa-bell"></i>
										</div>
										<div class="item-inner">
											<div class="item-title-row">
												<div class="item-title">Notification</div>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/transaction/" class="item-link panel-close item-content">
										<div class="item-media">
											<i class="fas fa-credit-card"></i>
										</div>
										<div class="item-inner">
											<div class="item-title-row">
												<div class="item-title">Transaction</div>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/settings/" class="item-link panel-close item-content">
										<div class="item-media">
											<i class="fas fa-cog"></i>
										</div>
										<div class="item-inner">
											<div class="item-title-row">
												<div class="item-title">Settings</div>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/faq/" class="item-link panel-close item-content">
										<div class="item-media">
											<i class="fas fa-question"></i>
										</div>
										<div class="item-inner">
											<div class="item-title-row">
												<div class="item-title">Help Center</div>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/login/logout/user/" class="item-link panel-close item-content">
										<div class="item-media">
											<i class="fas fa-sign-out-alt"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Logout</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- end sidebarbar or panel -->