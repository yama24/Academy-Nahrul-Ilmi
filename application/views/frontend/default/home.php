					<!-- slider bagian dari home -->
					<div class="slider">
						<div class="swiper-container swiper-init swiper-container-horizontal" data-space-between="10" data-slides-per-view="auto">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="content">
										<div class="mask"></div>
										<img src="../../../../uploads/system/home-banner.jpg" alt="">
									</div>
								</div>
								<!-- <div class="swiper-slide">
								<div class="content">
									<div class="mask"></div>
									<img src="<?php echo base_url() . 'assets/frontend/default/images/banner3.png'; ?>" alt="">
								</div>
							</div>
							<div class="swiper-slide">
								<div class="content">
									<div class="mask"></div>
									<img src="<?php echo base_url() . 'assets/frontend/default/images/banner2.png'; ?>" alt="">
								</div>
							</div> -->
							</div>
						</div>
					</div>
					<!-- end slider -->

					<!-- cateogries -->
					<div class="categories segments no-pd-b">
						<div class="container">
							<div class="section-title">
								<h3><?php echo get_phrase('category'); ?></h3>
							</div>
							<div class="row">
								<?php
								$categories = $this->crud_model->get_categories()->result_array();
								foreach ($categories as $key => $category) : ?>
									<div class="col-20">
										<div class="content">
											<a href="<?php echo site_url('home/courses?category=' . $category['slug']); ?>">
												<div class="icon">
													<i class="<?php echo $category['font_awesome_class']; ?>"></i>
												</div>
												<span><?php echo $category['name']; ?></span>
											</a>
										</div>
									</div>
								<?php endforeach; ?>
								<!-- <div class="col-20">
								<div class="content">
									<a href="/categories-details/">
										<div class="icon">
											<i class="fas fa-tshirt"></i>
										</div>
										<span>T-Shirt</span>
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
											<i class="fas fa-tools"></i>
										</div>
										<span>Tools</span>
									</a>
								</div>
							</div> -->
								<div class="col-20">
									<div class="content all-categories-link">
										<a href="<?php echo site_url('home/courses?category=' . "all"); ?>">
											<div class="icon">
												<i class="fas fa-angle-right"></i>
											</div>
											<span>See All</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end cateogries -->

					<!-- latest product -->
					<div class="latest-product segments no-pd-b">
						<div class="container">
							<div class="section-title">
								<h3><?php echo get_phrase('top_courses'); ?></h3>
							</div>
							<div class="row">
								<?php $top_courses = $this->crud_model->get_top_courses()->result_array();
								$cart_items = $this->session->userdata('cart_items');
								foreach ($top_courses as $top_course) : ?>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/home/course/<?php echo slugify($top_course['title']) . '/' . $top_course['id']; ?>">
												<div class="image">
													<img src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center"><?php echo $top_course['title']; ?></p>
													<div class="rating">
														<?php
														$total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
														$number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
														if ($number_of_ratings > 0) {
															$average_ceil_rating = ceil($total_rating / $number_of_ratings);
														} else {
															$average_ceil_rating = 0;
														}

														for ($i = 1; $i < 6; $i++) : ?>
															<?php if ($i <= $average_ceil_rating) : ?>
																<i class="fas fa-star filled"></i>
															<?php else : ?>
																<i class="fas fa-star"></i>
															<?php endif; ?>
														<?php endfor; ?>
														<p class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></p>
													</div>
													<?php if ($top_course['is_free_course'] == 1) : ?>
														<p class="price"><?php echo get_phrase('free'); ?></p>
													<?php else : ?>
														<?php if ($top_course['discount_flag'] == 1) : ?>
															<p class="price"><s><small><?php echo currency($top_course['price']); ?></small></s> <?php echo currency($top_course['discounted_price']); ?></p>
														<?php else : ?>
															<p class="price"><?php echo currency($top_course['price']); ?></p>
														<?php endif; ?>
													<?php endif; ?>
													<small>
														<p class="title-product title-product-center">
															<?php
															$instructor_details = $this->user_model->get_all_user($latest_course['user_id'])->row_array();
															echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name']; ?>
														</p>
													</small>
												</div>
											</a>
										</div>
									</div>
								<?php endforeach; ?>
								<!-- <div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product2.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div> -->
							</div>
							<!-- <div class="row">
								<div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product3.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product4.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div>
							</div> -->
						</div>
					</div>
					<!-- end latest product -->

					<!-- 10 terbaru -->
					<div class="flash-sale segments no-pd-b">
						<div class="container">
							<div class="section-title">
								<h3><?php echo get_phrase('top') . ' 10 ' . get_phrase('latest_courses'); ?></h3>
							</div>
							<div data-space-between="15" data-slides-per-view="auto" class="swiper-container swiper-init">
								<div class="swiper-wrapper">
									<?php
									$latest_courses = $this->crud_model->get_latest_10_course();
									foreach ($latest_courses as $latest_course) : ?>
										<div class="swiper-slide">
											<div class="content content-shadow-product">
												<a href="<?php echo site_url('home/course/' . slugify($latest_course['title']) . '/' . $latest_course['id']); ?>">
													<div class="image">
														<img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>" alt="flash-sale">
													</div>
													<div class="text">
														<p><?php echo $latest_course['title']; ?></p>
														<div class="rating">
															<?php
															$total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
															$number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
															if ($number_of_ratings > 0) {
																$average_ceil_rating = ceil($total_rating / $number_of_ratings);
															} else {
																$average_ceil_rating = 0;
															}
															for ($i = 1; $i < 6; $i++) : ?>
																<?php if ($i <= $average_ceil_rating) : ?>
																	<i class="fas fa-star filled"></i>
																<?php else : ?>
																	<i class="fas fa-star"></i>
																<?php endif; ?>
															<?php endfor; ?>
															<span class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
														</div>
														<!-- <span class="notifi-line"></span> -->
														<?php if ($top_course['is_free_course'] == 1) : ?>
															<p class="price"><?php echo get_phrase('free'); ?></p>
														<?php else : ?>
															<?php if ($top_course['discount_flag'] == 1) : ?>
																<p class="price"><s><small><?php echo currency($top_course['price']); ?></small></s> <?php echo currency($top_course['discounted_price']); ?></p>
															<?php else : ?>
																<p class="price"><?php echo currency($top_course['price']); ?></p>
															<?php endif; ?>
														<?php endif; ?>
														<small>
															<p class="title-product title-product-center">
																<?php
																$instructor_details = $this->user_model->get_all_user($latest_course['user_id'])->row_array();
																echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name']; ?>
															</p>
														</small>
													</div>
												</a>
											</div>
										</div>
									<?php endforeach; ?>
									<!-- <div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product2.png'; ?>" alt="flash-sale">
												</div>
												<div class="text">
													<p>7 sold</p>
													<span class="notifi-line"></span>
													<p class="price">$49.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product3.png'; ?>" alt="flash-sale">
												</div>
												<div class="text">
													<p>7 sold</p>
													<span class="notifi-line"></span>
													<p class="price">$49.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product4.png'; ?>" alt="flash-sale">
												</div>
												<div class="text">
													<p>7 sold</p>
													<span class="notifi-line"></span>
													<p class="price">$49.00</p>
												</div>
											</a>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
					<!-- end 10 terbaru -->
					<!-- flash sale -->
					<!-- <div class="flash-sale segments no-pd-b">
						<div class="container">
							<div class="section-title">
								<h3>Flash Sale</h3>
							</div>
							<div data-space-between="15" data-slides-per-view="auto" class="swiper-container swiper-init">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="flash-sale">
												</div>
												<div class="text">
													<p>7 sold</p>
													<span class="notifi-line"></span>
													<p class="price">$49.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product2.png'; ?>" alt="flash-sale">
												</div>
												<div class="text">
													<p>7 sold</p>
													<span class="notifi-line"></span>
													<p class="price">$49.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product3.png'; ?>" alt="flash-sale">
												</div>
												<div class="text">
													<p>7 sold</p>
													<span class="notifi-line"></span>
													<p class="price">$49.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product4.png'; ?>" alt="flash-sale">
												</div>
												<div class="text">
													<p>7 sold</p>
													<span class="notifi-line"></span>
													<p class="price">$49.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- end flash sale -->

					<!-- banner -->
					<!-- <div class="banner segments-bottom">
						<div class="container">
							<div class="content-image">
								<img src="<?php echo base_url() . 'assets/frontend/default/images/banners.jpg'; ?>" alt="">
							</div>
						</div>
					</div> -->
					<!-- end banner -->

					<!-- popular product -->
					<!-- <div class="popular-product product segments-bottom">
						<div class="container">
							<div class="section-title">
								<h3>Popular Product
									<a href="#" class="see-all-link">See All</a>
								</h3>
							</div>
							<div class="row">
								<div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product2.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product3.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product4.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product5.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div>
								<div class="col-50">
									<div class="content content-shadow-product">
										<a href="/product-details/">
											<div class="image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product6.png'; ?>" alt="product">
											</div>
											<div class="text">
												<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
												<p class="price">$80.00</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- end popular product -->

					<!-- end home -->
					</div>
					<div id="tab-wishlist" class="tab tab-wishlist">
						<!-- wishlist -->

						<!-- navbar -->
						<div class="navbar navbar-page">
							<div class="navbar-inner">
								<div class="left"></div>
								<div class="title">
									Wishlist
								</div>
								<div class="right"></div>
							</div>
						</div>
						<!-- end navbar -->

						<div class="wishlists segments">
							<div class="container">
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product2.png'; ?>" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product3.png'; ?>" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product4.png'; ?>" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product5.png'; ?>" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
												<div class="love-button">
													<i class="fas fa-heart"></i>
												</div>
												<div class="image">
													<img src="<?php echo base_url() . 'assets/frontend/default/images/product6.png'; ?>" alt="product">
												</div>
												<div class="text">
													<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
													<p class="price">$80.00</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end wishlist -->
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

							<!-- slider brand -->
							<div class="slider-brand segments-bottom">
								<div class="container">
									<div data-pagination='{"el": ".swiper-pagination"}' data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal">
										<div class="swiper-pagination"></div>
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="<?php echo base_url() . 'assets/frontend/default/images/brand1.png'; ?>" alt="">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="<?php echo base_url() . 'assets/frontend/default/images/brand2.png'; ?>" alt="">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="<?php echo base_url() . 'assets/frontend/default/images/brand3.png'; ?>" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end slider brand -->

							<!-- popular brand -->
							<div class="popular-brand segments-bottom">
								<div class="container">
									<div class="section-title">
										<h3>Populars Brand <a href="#" class="see-all-link">See All</a></h3>
									</div>

									<div class="row">
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?php echo base_url() . 'assets/frontend/default/images/trip.png'; ?>" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?php echo base_url() . 'assets/frontend/default/images/wobag.png'; ?>" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?php echo base_url() . 'assets/frontend/default/images/john.png'; ?>" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?php echo base_url() . 'assets/frontend/default/images/alya.png'; ?>" alt=""></a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?php echo base_url() . 'assets/frontend/default/images/green.png'; ?>" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?php echo base_url() . 'assets/frontend/default/images/zona.png'; ?>" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?php echo base_url() . 'assets/frontend/default/images/beauty.png'; ?>" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="<?php echo base_url() . 'assets/frontend/default/images/fitbro.png'; ?>" alt=""></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end popular brand -->

							<!-- banner -->
							<div class="banner segments-bottom">
								<div class="container">
									<div class="content-image">
										<img src="<?php echo base_url() . 'assets/frontend/default/images/banners.jpg'; ?>" alt="">
									</div>
								</div>
							</div>
							<!-- end banner -->

							<!-- product brand -->
							<div class="product-brand segments-bottom product">
								<div class="container">
									<div class="section-title">
										<h3>All Product Brands <a href="#" class="see-all-link">See All</a></h3>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?php echo base_url() . 'assets/frontend/default/images/product2.png'; ?>" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?php echo base_url() . 'assets/frontend/default/images/product3.png'; ?>" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?php echo base_url() . 'assets/frontend/default/images/product4.png'; ?>" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?php echo base_url() . 'assets/frontend/default/images/product5.png'; ?>" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="image">
														<img src="<?php echo base_url() . 'assets/frontend/default/images/product6.png'; ?>" alt="product">
													</div>
													<div class="text">
														<p class="title-product title-product-center">Elegant Blue t-Shirt</p>
														<p class="price">$80.00</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end product brand -->

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
										<div class="col-20">
											<div class="content-image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
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
										<div class="col-20">
											<div class="content-image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
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
										<div class="col-20">
											<div class="content-image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
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
										<div class="col-20">
											<div class="content-image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
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
										<div class="col-20">
											<div class="content-image">
												<img src="<?php echo base_url() . 'assets/frontend/default/images/product1.png'; ?>" alt="">
											</div>
										</div>
										<div class="col-40">
											<div class="content-text">
												<p class="title-product">The latest brand</p>
												<p class="price">$49.00</p>
											</div>
										</div>
										<div class="col-30 align-self-center">
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

							<!-- divider -->
							<div class="divider-space-content"></div>
							<!-- end divider -->

							<!-- wrap total cart -->
							<div class="wrap-total-cart">
								<div class="container">
									<div class="content-total">
										<ul>
											<li>
												<p>Total</p>
											</li>
											<li>
												<h6>$150</h6>
											</li>
										</ul>
									</div>
									<div class="content-button">
										<a href="/checkout/" class="button primary-button"><i class="fas fa-shopping-bag"></i>Checkout</a>
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

						<!-- content account -->
						<div class="account-buyer segments">
							<div class="container">
								<div class="header-account">
									<img src="<?php echo base_url() . 'assets/frontend/default/images/user-buyer6.png'; ?>" alt="">
									<div class="title-name">
										<h5>Fardanz Track</h5>
										<p><i class="fas fa-map-marker-alt"></i>Melbourne</p>
									</div>
								</div>
							</div>

							<!-- divider space -->
							<div class="divider-space-content"></div>
							<!-- end divider space -->

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
												</div>
											</a>
										</li>
										<li>
											<a href="/transaction/" class="item-link item-content">
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
											<a href="/settings/" class="item-link item-content">
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
											<a href="/faq/" class="item-link item-content">
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
											<a href="#" class="item-link item-content">
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
						</div>
						<!-- end  content account -->

						<!-- end account buyer -->
					</div>
					</div>
					</div>
					</div>
					</div>