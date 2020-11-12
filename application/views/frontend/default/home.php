<div id="app">

	<div class="view view-main view-init ios-edges" data-url="/">
		<div class="page page-home page-with-subnavbar">
			<div class="toolbar tabbar tabbar-labels toolbar-bottom">
				<div class="toolbar-inner">
					<a href="#tab-home" class="tab-link tab-link-active">
						<i class="fas fa-home"></i>
						<span class="tabbar-label">Home</span>
					</a>
					<a href="#tab-search" class="tab-link">
						<i class="fas fa-search"></i>
						<span class="tabbar-label">Search</span>
					</a>
					<a href="#tab-brand" class="tab-link">
						<i class="fas fa-medal"></i>
						<span class="tabbar-label">Official Brand</span>
					</a>
					<a href="#tab-cart" class="tab-link">
						<i class="fas fa-shopping-cart"></i>
						<span class="tabbar-label">Cart</span>
					</a>
					<a href="/home/login/" class="tab-link">
						<i class="fas fa-user"></i>
						<span class="tabbar-label">Account</span>
					</a>
				</div>
			</div>
			<div class="tabs">
				<div id="tab-home" class="tab tab-active tab-home">
					<!-- home -->

					<!-- navbar home -->
					<div class="navbar navbar-home">
						<div class="navbar-inner">
							<div class="left">
								<a href="#" class="panel-open" data-panel="left">
									<i class="fas fa-bars"></i>
								</a>
							</div>
							<div class="title">
								<h2>Evone</h2>
							</div>
							<div class="right">
								<a href="/wishlist/">
									<i class="fas fa-heart"></i>
								</a>
								<a href="/notification/">
									<i class="fas fa-bell"></i>
									<span></span>
								</a>
							</div>
						</div>
					</div>
					<div class="subnavbar">
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
					<!-- end navbar home -->

					<!-- sidebarbar or panel -->
					<div class="panel-backdrop"></div>
					<div class="panel panel-left panel-cover sidebar">
						<div class="list accordion-list">
							<ul>
								<li class="accordion-item">
									<a href="#" class="item-link item-content">
										<div class="item-media">
											<i class="fas fa-tshirt"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Shop Pages</div>
										</div>
									</a>
									<div class="accordion-item-content">

										<!-- divider -->
										<div class="divider-space-text"></div>
										<!-- end divider -->

										<a href="/shopping-cart/" class="panel-close"><i class="fas fa-shopping-cart"></i>Shopping Cart</a>
										<a href="/all-categories/" class="panel-close"><i class="fas fa-layer-group"></i>Categories</a>
										<a href="/wishlist/" class="panel-close"><i class="fas fa-heart"></i>Wishlist</a>
										<a href="/checkout/" class="panel-close"><i class="fas fa-cart-arrow-down"></i>Checkout</a>
										<a href="/account-buyer/" class="panel-close"><i class="fas fa-user"></i>Account Buyer</a>
										<a href="/account-seller/" class="panel-close"><i class="fas fa-user"></i>Account Seller</a>
										<a href="/tracking-order/" class="panel-close"><i class="fas fa-truck"></i>Tracking Order</a>
										<a href="/order-history/" class="no-mb panel-close"><i class="fas fa-history"></i><span>Order History</span></a>

										<!-- divider -->
										<div class="divider-space-text"></div>
										<!-- end divider -->

									</div>
								</li>
								<li>
									<a href="/blog/" class="item-link item-content panel-close">
										<div class="item-media">
											<i class="fas fa-blog"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Blog</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/blog-single/" class="item-link item-content panel-close">
										<div class="item-media">
											<i class="fas fa-rss"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Blog Single</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/sign-in/" class="item-link item-content panel-close">
										<div class="item-media">
											<i class="fas fa-sign-in-alt"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Sign In</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/sign-up/" class="item-link item-content panel-close">
										<div class="item-media">
											<i class="fas fa-user-plus"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Sign Up</div>
										</div>
									</a>
								</li>
								<li>
									<a href="/contact-seller/" class="item-link item-content panel-close">
										<div class="item-media">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="item-inner">
											<div class="item-title">Contact Seller</div>
										</div>
									</a>
								</li>
								<li>
									<a href="#" class="item-link item-content panel-close">
										<div class="item-media">
											<i class="fas fa-power-off"></i>
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

					<!-- slider -->
					<div class="slider">
						<div class="container">
							<div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal">
								<div class="swiper-pagination"></div>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="content">
											<div class="mask"></div>
											<img src="././evone01/images/banner1.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<div class="mask"></div>
											<img src="././evone01/images/banner2.png" alt="">
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content">
											<div class="mask"></div>
											<img src="././evone01/images/banner3.png" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end slider -->

					<!-- cateogries -->
					<!-- <div class="categories segments">
					<div class="container">
						<div class="row">
							<div class="col-20">
								<div class="content">
									<a href="/all-categories/">
										<div class="icon">
											<i class="fas fa-th"></i>
										</div>
										<span>Show All</span>
									</a>
								</div>
							</div>
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-tshirt"></i>
										</div>
										<span>Apparel</span>
									</a>
								</div>
							</div>
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-chair"></i>
										</div>
										<span>Furniture</span>
									</a>
								</div>
							</div>
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-camera"></i>
										</div>
										<span>Photo</span>
									</a>
								</div>
							</div>
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-headphones-alt"></i>
										</div>
										<span>Accessories</span>
									</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-mobile-alt"></i>
										</div>
										<span>Handphone</span>
									</a>
								</div>
							</div>
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-basketball-ball"></i>
										</div>
										<span>Sports</span>
									</a>
								</div>
							</div>
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-pizza-slice"></i>
										</div>
										<span>Food</span>
									</a>
								</div>
							</div>
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-plug"></i>
										</div>
										<span>Electronic</span>
									</a>
								</div>
							</div>
							<div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-car"></i>
										</div>
										<span>Automotive</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
					<!-- end cateogries -->

					<!-- flash sale -->
					<!-- <div class="flash-sale segments no-pd-b">
					<div class="container">
						<div class="section-title flash-s-title">
							<h3>FLASH SALE</h3>
							<div data-space-between="10" data-slides-per-view="auto" class="swiper-container swiper-init">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/flash-sale1.jpg" alt="flash-sale">
												<div class="text">
													<p>$50 <span>$100</span></p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/flash-sale2.jpg" alt="flash-sale">
												<div class="text">
													<p>$40 <span>$80</span></p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/flash-sale3.jpg" alt="flash-sale">
												<div class="text">
													<p>$110 <span>$220</span></p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/flash-sale4.jpg" alt="flash-sale">
												<div class="text">
													<p>$66 <span>$133</span></p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
					<!-- end flash sale -->

					<!-- popular product -->
					<div class="popular-product segments-bottom">
						<div class="container">
							<div class="section-title">
								<h3>Popular Product
									<a href="#" class="see-all-link">See All</a>
								</h3>
							</div>
							<div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" data-slides-per-view="3" class="swiper-container swiper-init">
								<div class="swiper-pagination"></div>
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<img src="././evone01/images/product1.jpg" alt="product">
												<div class="text">
													<p class="title-product">Sweater with latest model</p>
													<p class="price">$85.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<img src="././evone01/images/product2.jpg" alt="product">
												<div class="text">
													<p class="title-product">Latest smartwatch</p>
													<p class="price">$66.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<img src="././evone01/images/product3.jpg" alt="product">
												<div class="text">
													<p class="title-product">Jacket for adventure</p>
													<p class="price">$80.99</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<img src="././evone01/images/product4.jpg" alt="product">
												<div class="text">
													<p class="title-product">New game Console</p>
													<p class="price">$49.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<img src="././evone01/images/product5.jpg" alt="product">
												<div class="text">
													<p class="title-product">Cheap black shirt</p>
													<p class="price">$50.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end popular product -->

					<!-- recommended -->
					<div class="recommended product segments-bottom">
						<div class="container">
							<div class="section-title">
								<h3>Recommended For You
									<a href="#" class="see-all-link">See All</a>
								</h3>
							</div>
							<div class="row">
								<?php
								$latest_courses = $this->crud_model->get_latest_10_course();
								foreach ($latest_courses as $latest_course) : ?>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/home/course/<?php echo slugify($latest_course['title']).'/'.$latest_course['id']; ?>">
												<img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>" alt="product">
												<div class="text">
													<p class="title-product"><?php echo $latest_course['title']; ?></p>
													<p class="price">$80.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
										<br>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<!-- end recommended -->

					<!-- end home -->
				</div>
				<div id="tab-search" class="tab tab-search">
					<!-- search -->

					<!-- navbar -->
					<div class="navbar navbar-page">
						<div class="navbar-inner">
							<div class="left"></div>
							<div class="title">
								Search
							</div>
							<div class="right"></div>
						</div>
					</div>

					<div class="subnavbar">
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

					<!-- end navbar -->

					<div class="search segments">
						<div class="container">
							<div class="title-search-category">
								<span>RECENT SEARCH <a href="#">Clear</a></span>
							</div>
							<div class="recent-search">
								<ul>
									<li><a href="#"><i class="fas fa-history"></i>Laptop accessories</a></li>
									<li><a href="#"><i class="fas fa-history"></i>Plain shirt</a></li>
									<li><a href="#"><i class="fas fa-history"></i>Gaming Mouse</a></li>
									<li><a href="#"><i class="fas fa-history"></i>Mechanical Keyboard</a></li>
								</ul>
							</div>

							<!-- divider -->
							<div class="divider-line-half"></div>
							<!-- end divider -->

							<div class="title-search-category">
								<span>POPULAR CATEGORIES</span>
							</div>
							<div class="popular-search">
								<ul>
									<li><a href="#">Laptop</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Earphones</a></li>
									<li><a href="#">Mouse</a></li>
									<li><a href="#">Shirt</a></li>
									<li><a href="#">Keyboard</a></li>
									<li><a href="#">Bottle</a></li>
								</ul>
							</div>

							<!-- divider -->
							<div class="divider-line-half line-search"></div>
							<!-- end divider -->

							<div class="title-search-category">
								<span>RECOMMENDED <a href="#">Refresh</a></span>
							</div>
							<div class="recent-search recommended-search">
								<ul>
									<li><a href="#">Laptop accessories</a></li>
									<li><a href="#">Plain shirt</a></li>
									<li><a href="#">Gaming Mouse</a></li>
									<li><a href="#">Mechanical Keyboard</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- end search -->
				</div>
				<div id="tab-brand" class="page-content tab">
					<!-- official brand -->

					<!-- navbar -->
					<div class="navbar navbar-page">
						<div class="navbar-inner">
							<div class="left"></div>
							<div class="title">
								Official Brand
							</div>
							<div class="right"></div>
						</div>
					</div>
					<!-- end navbar -->

					<div class="official-brand">
						<div class="container">

							<!-- slider brand -->
							<div class="slider-brand segments-bottom">
								<div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal">
									<div class="swiper-pagination"></div>
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="content">
												<div class="mask"></div>
												<img src="././evone01/images/banner4.png" alt="">
											</div>
										</div>
										<div class="swiper-slide">
											<div class="content">
												<div class="mask"></div>
												<img src="././evone01/images/banner5.png" alt="">
											</div>
										</div>
										<div class="swiper-slide">
											<div class="content">
												<div class="mask"></div>
												<img src="././evone01/images/banner6.png" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end slider brand -->

							<!-- popular brand -->
							<div class="popular-brand segments-bottom">
								<div class="section-title">
									<h3>Populars Brand <a href="#" class="see-all-link">See All</a></h3>
								</div>
								<div class="row">
									<div class="col-25">
										<div class="content">
											<a href="#"><img src="././evone01/images/trip.png" alt=""></a>
										</div>
									</div>
									<div class="col-25">
										<div class="content">
											<a href="#"><img src="././evone01/images/wobag.png" alt=""></a>
										</div>
									</div>
									<div class="col-25">
										<div class="content">
											<a href="#"><img src="././evone01/images/john.png" alt=""></a>
										</div>
									</div>
									<div class="col-25">
										<div class="content">
											<a href="#"><img src="././evone01/images/alya.png" alt=""></a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-25">
										<div class="content">
											<a href="#"><img src="././evone01/images/green.png" alt=""></a>
										</div>
									</div>
									<div class="col-25">
										<div class="content">
											<a href="#"><img src="././evone01/images/zona.png" alt=""></a>
										</div>
									</div>
									<div class="col-25">
										<div class="content">
											<a href="#"><img src="././evone01/images/beauty.png" alt=""></a>
										</div>
									</div>
									<div class="col-25">
										<div class="content">
											<a href="#"><img src="././evone01/images/fitbro.png" alt=""></a>
										</div>
									</div>
								</div>
							</div>
							<!-- end popular brand -->

							<!-- brand promo -->
							<div class="brand-promo segments-bottom product">
								<div class="section-title">
									<h3>Brand Promo Specials <a href="#" class="see-all-link">See All</a></h3>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/product1.jpg" alt="">
												<div class="text">
													<p class="title-product">Sweater with high quality misty-fabric</p>
													<p class="price">$85.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/product3.jpg" alt="">
												<div class="text">
													<p class="title-product">Jacket - original parachute material</p>
													<p class="price">$199.99</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/product5.jpg" alt="">
												<div class="text">
													<p class="title-product">Long sleeve black shirt - comfortable</p>
													<p class="price">$90.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/product6.jpg" alt="">
												<div class="text">
													<p class="title-product">Long-sleeved brown sweater, soft material</p>
													<p class="price">$50.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/product9.jpg" alt="">
												<div class="text">
													<p class="title-product">Long-sleeved gray Sweater, soft material</p>
													<p class="price">$77.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="product-mark-discount">
													<ul>
														<li>50%</li>
														<li>OFF</li>
													</ul>
												</div>
												<img src="././evone01/images/product10.jpg" alt="">
												<div class="text">
													<p class="title-product">Thick jacket suitable for winter - free hat</p>
													<p class="price">$110.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- end brand promo -->

						</div>
					</div>
					<!-- end official brand -->
				</div>
				<div id="tab-cart" class="page-content tab">
					<!-- cart -->

					<!-- navbar -->
					<div class="navbar navbar-page">
						<div class="navbar-inner">
							<div class="left"></div>
							<div class="title">
								Shopping Cart
							</div>
							<div class="right"></div>
						</div>
					</div>
					<!-- end navbar -->

					<!-- content cart -->
					<div class="cart segments">
						<div class="container">
							<div class="name-store">
								<img src="././evone01/images/user-seller1.png" alt="">
								<div class="title-store">
									<h6>ABC Shoes Store</h6>
								</div>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-10">
										<div class="content-checkbox">
											<label class="checkbox">
												<input type="checkbox">
												<i class="icon-checkbox"></i>
											</label>
										</div>
									</div>
									<div class="col-90">
										<div class="content-cart content-shadow-product">
											<img src="././evone01/images/product8.jpg" alt="">
											<div class="product-info">
												<a href="#">
													<p class="title-product">Loafers with genuine leather</p>
												</a>
												<p class="price">$50.00</p>
											</div>
											<div class="number-goods">
												<div class="stepper stepper-small stepper-init">
													<div class="stepper-button-minus"></div>
													<div class="stepper-input-wrap">
														<input type="text" value="0" readonly>
													</div>
													<div class="stepper-button-plus"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-10">
										<div class="content-checkbox">
											<label class="checkbox">
												<input type="checkbox">
												<i class="icon-checkbox"></i>
											</label>
										</div>
									</div>
									<div class="col-90">
										<div class="content-cart content-shadow-product">
											<img src="././evone01/images/product12.jpg" alt="">
											<div class="product-info">
												<a href="#">
													<p class="title-product">The latest brand of loafers</p>
												</a>
												<p class="price">$50.00</p>
											</div>
											<div class="number-goods">
												<div class="stepper stepper-small stepper-init">
													<div class="stepper-button-minus"></div>
													<div class="stepper-input-wrap">
														<input type="text" value="0" readonly>
													</div>
													<div class="stepper-button-plus"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- divider line half -->
							<div class="divider-line-half"></div>
							<!-- end divider line half -->

							<div class="name-store">
								<img src="././evone01/images/user-seller2.png" alt="">
								<div class="title-store">
									<h6>Shirt Mart</h6>
								</div>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-10">
										<div class="content-checkbox">
											<label class="checkbox">
												<input type="checkbox">
												<i class="icon-checkbox"></i>
											</label>
										</div>
									</div>
									<div class="col-90">
										<div class="content-cart content-shadow-product">
											<img src="././evone01/images/flash-sale1.jpg" alt="">
											<div class="product-info">
												<a href="#">
													<p class="title-product">Cheap, plain t-shirts</p>
												</a>
												<p class="price">$50.00</p>
											</div>
											<div class="number-goods">
												<div class="stepper stepper-small stepper-init">
													<div class="stepper-button-minus"></div>
													<div class="stepper-input-wrap">
														<input type="text" value="0" readonly>
													</div>
													<div class="stepper-button-plus"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- divider line full -->
						<div class="divider-line-full"></div>
						<!-- end divider line full -->

						<!-- wrap total cart -->
						<div class="wrap-total-cart">
							<div class="container">
								<div class="row">
									<div class="col-40">
										<div class="content-total">
											<p>Total</p>
											<h6>$150</h6>
										</div>
									</div>
									<div class="col-60">
										<div class="content-button">
											<a href="/checkout/" class="button primary-button"><i class="fas fa-shopping-bag"></i>Checkout</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end wrap total cart -->
					</div>
					<!-- end content cart -->

					<!-- end cart -->
				</div>
				<div id="tab-account" class="page-content tab">
					<!-- account buyer -->

					<!-- navbar -->
					<div class="navbar navbar-page">
						<div class="navbar-inner">
							<div class="left"></div>
							<div class="title">
								Account Buyer
							</div>
							<div class="right">
								<a href="/settings/">
									<i class="fas fa-cog"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- end navbar -->

					<!-- content account -->
					<div class="account-buyer segments">
						<div class="container">
							<div class="header-account content-shadow">
								<img src="././evone01/images/user-buyer6.png" alt="">
								<div class="title-name">
									<h5>Airy Fashion</h5>
									<p><i class="fas fa-map-marker-alt"></i>Washington</p>
								</div>
							</div>
						</div>
						<div class="container segments">
							<div class="info-balance content-shadow">
								<div class="row">
									<div class="col-50">
										<div class="content-text">
											<p>Your Balance</p>
											<h5>$310.00</h5>
										</div>
									</div>
									<div class="col-50">
										<div class="content-button">
											<a href="#" class="button primary-button"><i class="fas fa-wallet"></i>Top Up</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="account-menu">
							<div class="list media-list">
								<ul>
									<li>
										<a href="/wishlist/" class="item-link item-content">
											<div class="item-media">
												<i class="fas fa-heart"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Wishlist</div>
												</div>
												<div class="item-subtitle">All products that you have saved</div>
											</div>
										</a>
									</li>
									<li>
										<a href="/transaction/" class="item-link item-content">
											<div class="item-media">
												<i class="fas fa-exchange-alt"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Transaction</div>
												</div>
												<div class="item-subtitle">All your transactions are here</div>
											</div>
										</a>
									</li>
									<li>
										<a href="/notification/" class="item-link item-content">
											<div class="item-media">
												<i class="fas fa-bell"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Notification</div>
												</div>
												<div class="item-subtitle">Transaction, Purchase, Notification update</div>
											</div>
										</a>
									</li>
									<li>
										<a href="/faq/" class="item-link item-content">
											<div class="item-media">
												<i class="fas fa-question"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Help</div>
												</div>
												<div class="item-subtitle">Need Help, Frequently Asked Questions</div>
											</div>
										</a>
									</li>
									<li>
										<a href="/contact-seller/" class="item-link item-content">
											<div class="item-media">
												<i class="fas fa-envelope"></i>
											</div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">Contact Seller</div>
												</div>
												<div class="item-subtitle">Other questions can contact me</div>
											</div>
										</a>
									</li>
									<li>
										<a href="#" class="item-link item-content">
											<div class="item-media">
												<i class="fas fa-power-off"></i>
											</div>
											<div class="item-inner">
												<div class="item-title">Logout</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- end  content account -->

					<!-- end account buyer -->
				</div>
			</div>
		</div>
	</div>

</div>

<script src="././evone01/js/framework7.bundle.min.js"></script>
<script src="././evone01/js/routes.js"></script>
<script src="././evone01/js/app.js"></script>