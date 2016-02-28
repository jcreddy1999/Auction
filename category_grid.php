<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Farmercart - Category Grid</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<!--wide layout-->
		<div class="wide_layout relative">
			<!--[if (lt IE 9) | IE 9]>
				<div style="background:#fff;padding:8px 0 10px;">
				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
			<![endif]-->
			<!--markup header-->
			<?php include_once("includes/header2.php");?>
			<!--breadcrumbs-->
			<section class="breadcrumbs">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li><a href="#" class="default_t_color">Women</a></li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9">
							<h2 class="tt_uppercase color_dark m_bottom_25">Women</h2>
							<img class="r_corners m_bottom_40" src="images/category_img_1.jpg" alt="">
							<!--categories nav-->
							<nav class="m_bottom_40">
								<ul class="horizontal_list clearfix categories_nav_list m_xs_right_0 t_mxs_align_c">
									<li class="m_right_15 f_mxs_none w_mxs_auto d_mxs_inline_b m_mxs_bottom_20">
										<a href="#" class="d_block photoframe tr_all_hover shadow color_dark r_corners">
											<span class="d_block wrapper">
												<img class="tr_all_long_hover" src="images/category_img_2.jpg" alt="">
											</span>
											Dresses
										</a>
									</li>
									<li class="m_right_15 f_mxs_none w_mxs_auto d_mxs_inline_b m_mxs_bottom_20">
										<a href="#" class="d_block photoframe tr_all_hover shadow color_dark r_corners">
											<span class="d_block wrapper">
												<img class="tr_all_long_hover" src="images/category_img_3.jpg" alt="">
											</span>
											Tops
										</a>
									</li>
									<li class="m_right_15 f_mxs_none w_mxs_auto d_mxs_inline_b m_mxs_bottom_20">
										<a href="#" class="d_block photoframe tr_all_hover shadow color_dark r_corners">
											<span class="d_block wrapper">
												<img class="tr_all_long_hover" src="images/category_img_4.jpg" alt="">
											</span>
											Skirts
										</a>
									</li>
									<li class="m_right_15 f_mxs_none w_mxs_auto d_mxs_inline_b m_mxs_bottom_20">
										<a href="#" class="d_block photoframe tr_all_hover shadow color_dark r_corners">
											<span class="d_block wrapper">
												<img class="tr_all_long_hover" src="images/category_img_5.jpg" alt="">
											</span>
											Pants
										</a>
									</li>
									<li class="m_right_15 f_mxs_none w_mxs_auto d_mxs_inline_b m_mxs_bottom_20">
										<a href="#" class="d_block photoframe tr_all_hover shadow color_dark r_corners">
											<span class="d_block wrapper">
												<img class="tr_all_long_hover" src="images/category_img_6.jpg" alt="">
											</span>
											Shorts
										</a>
									</li>
								</ul>
							</nav>
							<!--sort-->
							<div class="row clearfix m_bottom_10">
								<div class="col-lg-7 col-md-8 col-sm-12 m_sm_bottom_10">
									<p class="d_inline_middle f_size_medium">Sort by:</p>
									<div class="clearfix d_inline_middle m_left_10">
										<!--product name select-->
										<div class="custom_select f_size_medium relative f_left">
											<div class="select_title r_corners relative color_dark">Product name</div>
											<ul class="select_list d_none"></ul>
											<select name="product_name">
												<option value="Product SKU">Product SKU</option>
												<option value="Product Price">Product Price</option>
												<option value="Product ID">Product ID</option>
											</select>
										</div>
										<button class="button_type_7 bg_light_color_1 color_dark tr_all_hover r_corners mw_0 box_s_none bg_cs_hover f_left m_left_5"><i class="fa fa-sort-amount-asc m_left_0 m_right_0"></i></button>
									</div>
									<!--manufacturer select-->
									<div class="custom_select f_size_medium relative d_inline_middle m_left_15 m_xs_left_5 m_mxs_left_0 m_mxs_top_10">
										<div class="select_title r_corners relative color_dark">Select manufacturer</div>
										<ul class="select_list d_none"></ul>
										<select name="manufacturer">
											<option value="Manufacture 1">Manufacture 1</option>
											<option value="Manufacture 2">Manufacture 2</option>
											<option value="Manufacture 3">Manufacture 3</option>
										</select>
									</div>
								</div>
								<div class="col-lg-5 col-md-4 col-sm-12 t_align_r t_sm_align_l">
									<!--grid view or list view-->
									<p class="d_inline_middle f_size_medium m_right_5">View as:</p>
									<div class="clearfix d_inline_middle">
										<button class="button_type_7 bg_scheme_color color_light tr_delay_hover r_corners mw_0 box_s_none bg_cs_hover f_left"><i class="fa fa-th m_left_0 m_right_0"></i></button>
										<button class="button_type_7 bg_light_color_1 color_dark tr_delay_hover r_corners mw_0 box_s_none bg_cs_hover f_left m_left_5"><i class="fa fa-th-list m_left_0 m_right_0"></i></button>
									</div>
								</div>
							</div>
							<hr class="m_bottom_10 divider_type_3">
							<div class="row clearfix m_bottom_15">
								<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 m_xs_bottom_10">
									<p class="d_inline_middle f_size_medium d_xs_block m_xs_bottom_5">Results 1 - 5 of 45</p>
									<p class="d_inline_middle f_size_medium m_left_20 m_xs_left_0">Show:</p>
									<!--show items per page select-->
									<div class="custom_select f_size_medium relative d_inline_middle m_left_5">
										<div class="select_title r_corners relative color_dark">9</div>
										<ul class="select_list d_none"></ul>
										<select name="show">
											<option value="Manufacture 1">6</option>
											<option value="Manufacture 2">3</option>
											<option value="Manufacture 3">1</option>
										</select>
									</div>
									<p class="d_inline_middle f_size_medium m_left_5">items per page</p>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 t_align_r t_xs_align_l">
									<!--pagination-->
									<a role="button" href="#" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>
									<ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
										<li class="m_right_10"><a class="color_dark" href="#">1</a></li>
										<li class="m_right_10"><a class="scheme_color" href="#">2</a></li>
										<li class="m_right_10"><a class="color_dark" href="#">3</a></li>
									</ul>
									<a role="button" href="#" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>
								</div>
							</div>
							<!--products-->
							<section class="products_container category_grid clearfix m_bottom_15">
								<!--product item-->
								<div class="product_item hit w_xs_full">
									<figure class="r_corners photoframe type_2 t_align_c tr_all_hover shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_1.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
											<!--rating-->
											<ul class="horizontal_list d_inline_b m_bottom_10 clearfix rating_list type_2 tr_all_hover">
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li class="active">
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
												<li>
													<i class="fa fa-star-o empty tr_all_hover"></i>
													<i class="fa fa-star active tr_all_hover"></i>
												</li>
											</ul>
											<p class="scheme_color f_size_large m_bottom_15">$102.00</p>	
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item featured w_xs_full">
									<figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_2.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Ut tellus dolor dapibus</a></h5>
											<div class="clearfix m_bottom_15">
												<!--rating-->
												<ul class="horizontal_list type_2 m_bottom_10 d_inline_b clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large">$57.00</p>
											</div>
											<div class="clearfix">
												<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											</div>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item new w_xs_full">
									<figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_3.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Cursus eleifend elit aenean.</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$99.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item specials w_xs_full">
									<figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_5.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$102.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item hit w_xs_full">
									<figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_8.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$102.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item featured w_xs_full">
									<figure class="r_corners photoframe type_2 t_align_c shadow relative tr_all_hover">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_4.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Ut tellus dolor dapibus</a></h5>
											<div class="clearfix m_bottom_15">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large">$57.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item specials w_xs_full">
									<figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_7.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Eget elementum vel</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$99.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item specials w_xs_full">
									<figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_9.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Cursus eleifend elit aenean.</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$99.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
								<!--product item-->
								<div class="product_item rated w_xs_full">
									<figure class="r_corners photoframe tr_all_hover type_2 t_align_c shadow relative">
										<!--product preview-->
										<a href="#" class="d_block relative wrapper pp_wrap m_bottom_15">
											<img src="images/product_img_6.jpg" class="tr_all_hover" alt="">
											<span role="button" data-popup="#quick_view_product" class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">Quick View</span>
										</a>
										<!--description and price of product-->
										<figcaption>
											<h5 class="m_bottom_10"><a href="#" class="color_dark">Aliquam erat volutpat</a></h5>
											<div class="clearfix">
												<!--rating-->
												<ul class="horizontal_list d_inline_b m_bottom_10 type_2 clearfix rating_list tr_all_hover">
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li class="active">
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
													<li>
														<i class="fa fa-star-o empty tr_all_hover"></i>
														<i class="fa fa-star active tr_all_hover"></i>
													</li>
												</ul>
												<p class="scheme_color f_size_large m_bottom_15">$36.00</p>
											</div>
											<button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15">Add to Cart</button>
											<div class="clearfix m_bottom_5">
												<ul class="horizontal_list d_inline_b l_width_divider">
													<li class="m_right_15 f_md_none m_md_right_0"><a href="#" class="color_dark">Add to Wishlist</a></li>
													<li class="f_md_none"><a href="#" class="color_dark">Add to Compare</a></li>
												</ul>
											</div>
										</figcaption>
									</figure>
								</div>
							</section>
							<hr class="m_bottom_10 divider_type_3">
							<div class="row clearfix m_bottom_15 m_xs_bottom_30">
								<div class="col-lg-7 col-md-7 col-sm-8 m_xs_bottom_10">
									<p class="d_inline_middle f_size_medium d_xs_block m_xs_bottom_5">Results 1 - 5 of 45</p>
									<p class="d_inline_middle f_size_medium m_left_20 m_xs_left_0">Show:</p>
									<!--show items per page select-->
									<div class="custom_select f_size_medium relative d_inline_middle m_left_5">
										<div class="select_title r_corners relative color_dark">9</div>
										<ul class="select_list d_none"></ul>
										<select name="show_second">
											<option value="Manufacture 1">6</option>
											<option value="Manufacture 2">3</option>
											<option value="Manufacture 3">1</option>
										</select>
									</div>
									<p class="d_inline_middle f_size_medium m_left_5">items per page</p>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-4 t_align_r t_xs_align_l">
									<!--pagination-->
									<a role="button" href="#" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>
									<ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
										<li class="m_right_10"><a class="color_dark" href="#">1</a></li>
										<li class="m_right_10"><a class="scheme_color" href="#">2</a></li>
										<li class="m_right_10"><a class="color_dark" href="#">3</a></li>
									</ul>
									<a role="button" href="#" class="button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<!--widgets-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Filter</h3>
								</figcaption>
								<div class="widget_content">
									<!--filter form-->
									<form>
										<!--checkboxes-->
										<fieldset class="m_bottom_15">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Manufacturers</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<input type="checkbox" name="" id="checkbox_1" class="d_none"><label for="checkbox_1">Chanel</label><br>
											<input type="checkbox" checked name="" id="checkbox_2" class="d_none"><label for="checkbox_2">Calvin Klein</label><br>
											<input type="checkbox" name="" id="checkbox_3" class="d_none"><label for="checkbox_3">Prada</label><br>
										</fieldset>
										<!--price-->
										<fieldset class="m_bottom_20">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Price</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<div id="price" class="m_bottom_10"></div>
											<div class="clearfix range_values">
												<input class="f_left first_limit" readonly name="" type="text" value="$0">
												<input class="f_right last_limit t_align_r" readonly name="" type="text" value="$250">
											</div>
										</fieldset>
										<!--size-->
										<fieldset class="m_bottom_15">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Size</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<input type="radio" name="size" id="radio_1" class="d_none"><label for="radio_1">S</label><br>
											<input type="radio" name="size" checked id="radio_2" class="d_none"><label for="radio_2">M</label><br>
											<input type="radio" name="size" id="radio_3" class="d_none"><label for="radio_3">L</label><br>
										</fieldset>
										<!--color-->
										<fieldset class="m_bottom_25 m_sm_bottom_20">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Color</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<ul class="horizontal_list clearfix">
												<li class="m_right_5 m_sm_bottom_5"><button type="button" autofocus class="select_color red r_corners color_dark active"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color blue r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color green r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color grey r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
												<li class="m_right_5 m_sm_bottom_5"><button type="button" class="select_color yellow r_corners color_dark"><i class="fa fa-check lh_inherit tr_all_hover"></i></button></li>
											</ul>
										</fieldset>
										<fieldset class="m_bottom_25">
											<legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
												<b class="f_left">Weight</b>
												<button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
											</legend>
											<div class="clearfix">
												<input type="text" name="" class="r_corners f_left type_2">
												<input type="text" name="" class="r_corners f_left type_2 m_left_10">
											</div>
										</fieldset>
										<button type="reset" class="color_dark bg_tr text_cs_hover tr_all_hover"><i class="fa fa-refresh lh_inherit m_right_10"></i>Reset</button>
									</form>
								</div>
							</figure>
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Categories</h3>
								</figcaption>
								<div class="widget_content">
									<!--Categories list-->
									<ul class="categories_list">
										<li class="active">
											<a href="#" class="f_size_large scheme_color d_block relative">
												<b>Women</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
											<ul>
												<li class="active">
													<a href="#" class="d_block f_size_large color_dark relative">
														Dresses<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
													<ul>
														<li><a href="#" class="color_dark d_block">Evening Dresses</a></li>
														<li><a href="#" class="color_dark d_block">Casual Dresses</a></li>
														<li><a href="#" class="color_dark d_block">Party Dresses</a></li>
													</ul>
												</li>
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Accessories<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
												</li>
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Tops<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block relative">
												<b>Men</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
											<!--second level-->
											<ul class="d_none">
												<li>
													<a href="#" class="d_block f_size_large color_dark relative">
														Shorts<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
													</a>
													<!--third level-->
													<ul class="d_none">
														<li><a href="#" class="color_dark d_block">Evening</a></li>
														<li><a href="#" class="color_dark d_block">Casual</a></li>
														<li><a href="#" class="color_dark d_block">Party</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#" class="f_size_large color_dark d_block relative">
												<b>Kids</b>
												<span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
											</a>
										</li>
									</ul>
								</div>
							</figure>
							<!--compare products-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Compare Products</h3>
								</figcaption>
								<div class="widget_content">
									You have no product to compare.
								</div>
							</figure>
							<!--banner-->
							<a href="#" class="d_block r_corners m_bottom_30">
								<img src="images/banner_img_6.jpg" alt="">
							</a>
							<!--Bestsellers-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Bestsellers</h3>
								</figcaption>
								<div class="widget_content">
									<div class="clearfix m_bottom_15">
										<img src="images/bestsellers_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Ut tellus dolor dapibus</a>
										<!--rating-->
										<ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li>
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
										</ul>
										<p class="scheme_color">$61.00</p>
									</div>
									<hr class="m_bottom_15">
									<div class="clearfix m_bottom_15">
										<img src="images/bestsellers_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Elementum vel</a>
										<!--rating-->
										<ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li>
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
										</ul>
										<p class="scheme_color">$57.00</p>
									</div>
									<hr class="m_bottom_15">
									<div class="clearfix m_bottom_5">
										<img src="images/bestsellers_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link">Crsus eleifend elit</a>
										<!--rating-->
										<ul class="horizontal_list clearfix d_inline_b rating_list type_2 tr_all_hover m_bottom_10">
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li class="active">
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
											<li>
												<i class="fa fa-star-o empty tr_all_hover"></i>
												<i class="fa fa-star active tr_all_hover"></i>
											</li>
										</ul>
										<p class="scheme_color">$24.00</p>
									</div>
								</div>
							</figure>
							<!--tags-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">Tags</h3>
								</figcaption>
								<div class="widget_content">
									<div class="tags_list">
										<a href="#" class="color_dark d_inline_b v_align_b">accessories,</a>
										<a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">bestseller,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">clothes,</a>
										<a href="#" class="color_dark d_inline_b f_size_big v_align_b">dresses,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">fashion,</a>
										<a href="#" class="color_dark d_inline_b f_size_large v_align_b">men,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">pants,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">sale,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">short,</a>
										<a href="#" class="color_dark d_inline_b f_size_ex_large v_align_b">skirt,</a>
										<a href="#" class="color_dark d_inline_b v_align_b">top,</a>
										<a href="#" class="color_dark d_inline_b f_size_big v_align_b">women</a>
									</div>
								</div>
							</figure>
						</aside>
					</div>
				</div>
			</div>
			<!--markup footer-->
			<footer id="footer">
				<div class="footer_top_part">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">About</h3>
								<p class="m_bottom_25">Ut pharetra augue nec augue. Nam elit agna, endrerit sit amet, tincidunt ac, viverra sed, nulla. Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque.</p>
								<!--social icons-->
								<ul class="clearfix horizontal_list social_icons">
									<li class="facebook m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Facebook</span>
										<a href="#" class="r_corners t_align_c tr_delay_hover f_size_ex_large">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li class="twitter m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Twitter</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li class="google_plus m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Google Plus</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li class="rss m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Rss</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-rss"></i>
										</a>
									</li>
									<li class="pinterest m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Pinterest</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-pinterest"></i>
										</a>
									</li>
									<li class="instagram m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Instagram</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-instagram"></i>
										</a>
									</li>
									<li class="linkedin m_bottom_5 m_sm_left_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">LinkedIn</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<li class="vimeo m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Vimeo</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-vimeo-square"></i>
										</a>
									</li>
									<li class="youtube m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Youtube</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-youtube-play"></i>
										</a>
									</li>
									<li class="flickr m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Flickr</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-flickr"></i>
										</a>
									</li>
									<li class="envelope m_left_5 m_bottom_5 relative">
										<span class="tooltip tr_all_hover r_corners color_dark f_size_small">Contact Us</span>
										<a href="#" class="r_corners f_size_ex_large t_align_c tr_delay_hover">
											<i class="fa fa-envelope-o"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">The Service</h3>
								<ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">My account<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Order history<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Wishlist<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Vendor contact<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Front page<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Virtuemart categories<i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">Information</h3>
								<ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">About us<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">New collection<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Best sellers<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Manufacturers<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Privacy policy<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">Terms &amp; condition<i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3">
								<h3 class="color_light_2 m_bottom_20">Newsletter</h3>
								<p class="f_size_medium m_bottom_15">Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
								<form id="newsletter">
									<input type="email" placeholder="Your email address" class="m_bottom_20 r_corners f_size_medium full_width" name="newsletter-email">
									<button type="submit" class="button_type_8 r_corners bg_scheme_color color_light tr_all_hover">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--copyright part-->
				<div class="footer_bottom_part">
					<div class="container clearfix t_mxs_align_c">
						<p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2014 <span class="color_light">Farmercart</span>. All Rights Reserved.</p>
						<ul class="f_right horizontal_list clearfix f_mxs_none d_mxs_inline_b">
							<li><img src="images/payment_img_1.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_2.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_3.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_4.png" alt=""></li>
							<li class="m_left_5"><img src="images/payment_img_5.png" alt=""></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>
		<!--social widgets-->
		<ul class="social_widgets d_xs_none">
			<!--facebook-->
			<li class="relative">
				<button class="sw_button t_align_c facebook"><i class="fa fa-facebook"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Join Us on Facebook</h3>
					<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" style="border:none; overflow:hidden; width:235px; height:258px;"></iframe>
				</div>
			</li>
			<!--twitter feed-->
			<li class="relative">
				<button class="sw_button t_align_c twitter"><i class="fa fa-twitter"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Latest Tweets</h3>
					<div class="twitterfeed m_bottom_25"></div>
					<a role="button" class="button_type_4 d_inline_b r_corners tr_all_hover color_light tw_color" href="https://twitter.com/fanfbmltemplate">Follow on Twitter</a>
				</div>	
			</li>
			<!--contact form-->
			<li class="relative">
				<button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Contact Us</h3>
					<p class="f_size_medium m_bottom_15">Lorem ipsum dolor sit amet, consectetuer adipis mauris</p>
					<form id="contactform" class="mini">
						<input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="cf_name" placeholder="Your name">
						<input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="cf_email" placeholder="Email">
						<textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="Message" name="cf_message"></textarea>
						<button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">Send</button>
					</form>
				</div>	
			</li>
			<!--contact info-->
			<li class="relative">
				<button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
				<div class="sw_content">
					<h3 class="color_dark m_bottom_20">Store Location</h3>
					<ul class="c_info_list">
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_15">
								<i class="fa fa-map-marker f_left color_dark"></i>
								<p class="contact_e">8901 Marmora Road,<br> Glasgow, D04 89GR.</p>
							</div>
							<iframe class="r_corners full_width" id="gmap_mini" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;q=Manhattan,+New+York,+NY,+United+States&amp;aq=0&amp;oq=monheten&amp;sll=37.0625,-95.677068&amp;sspn=65.430355,129.814453&amp;t=m&amp;ie=UTF8&amp;hq=&amp;hnear=%D0%9C%D0%B0%D0%BD%D1%85%D1%8D%D1%82%D1%82%D0%B5%D0%BD,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E+%D0%99%D0%BE%D1%80%D0%BA,+%D0%9D%D1%8C%D1%8E-%D0%99%D0%BE%D1%80%D0%BA&amp;ll=40.790278,-73.959722&amp;spn=0.015612,0.031693&amp;z=13&amp;output=embed"></iframe>
						</li>
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_10">
								<i class="fa fa-phone f_left color_dark"></i>
								<p class="contact_e">800-559-65-80</p>
							</div>
						</li>
						<li class="m_bottom_10">
							<div class="clearfix m_bottom_10">
								<i class="fa fa-envelope f_left color_dark"></i>
								<a class="contact_e default_t_color" href="mailto:#">info@companyname.com</a>
							</div>
						</li>
						<li>
							<div class="clearfix">
								<i class="fa fa-clock-o f_left color_dark"></i>
								<p class="contact_e">Monday - Friday: 08.00-20.00 <br>Saturday: 09.00-15.00<br> Sunday: closed</p>
							</div>
						</li>
					</ul>
				</div>	
			</li>
		</ul>
		<!--custom popup-->
		<div class="popup_wrap d_none" id="quick_view_product">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<div class="clearfix">
					<div class="custom_scrollbar">
						<!--left popup column-->
						<div class="f_left half_column">
							<div class="relative d_inline_b m_bottom_10 qv_preview">
								<span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
								<img src="images/quick_view_img_1.jpg" class="tr_all_hover" alt="">
							</div>
							<!--carousel-->
							<div class="relative qv_carousel_wrap m_bottom_20">
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_prev">
									<i class="fa fa-angle-left "></i>
								</button>
								<ul class="qv_carousel d_inline_middle">
									<li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
									<li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
									<li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
									<li data-src="images/quick_view_img_1.jpg"><img src="images/quick_view_img_4.jpg" alt=""></li>
									<li data-src="images/quick_view_img_2.jpg"><img src="images/quick_view_img_5.jpg" alt=""></li>
									<li data-src="images/quick_view_img_3.jpg"><img src="images/quick_view_img_6.jpg" alt=""></li>
								</ul>
								<button class="button_type_11 t_align_c f_size_ex_large bg_cs_hover r_corners d_inline_middle bg_tr tr_all_hover qv_btn_next">
									<i class="fa fa-angle-right "></i>
								</button>
							</div>
							<div class="d_inline_middle">Share this:</div>
							<div class="d_inline_middle m_left_5">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
								<a class="addthis_button_preferred_1"></a>
								<a class="addthis_button_preferred_2"></a>
								<a class="addthis_button_preferred_3"></a>
								<a class="addthis_button_preferred_4"></a>
								<a class="addthis_button_compact"></a>
								<a class="addthis_counter addthis_bubble_style"></a>
								</div>
								<!-- AddThis Button END -->
							</div>
						</div>
						<!--right popup column-->
						<div class="f_right half_column">
							<!--description-->
							<h2 class="m_bottom_10"><a href="#" class="color_dark fw_medium">Eget elementum vel</a></h2>
							<div class="m_bottom_10">
								<!--rating-->
								<ul class="horizontal_list d_inline_middle type_2 clearfix rating_list tr_all_hover">
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li class="active">
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
									<li>
										<i class="fa fa-star-o empty tr_all_hover"></i>
										<i class="fa fa-star active tr_all_hover"></i>
									</li>
								</ul>
								<a href="#" class="d_inline_middle default_t_color f_size_small m_left_5">1 Review(s) </a>
							</div>
							<hr class="m_bottom_10 divider_type_3">
							<table class="description_table m_bottom_10">
								<tr>
									<td>Manufacturer:</td>
									<td><a href="#" class="color_dark">Chanel</a></td>
								</tr>
								<tr>
									<td>Availability:</td>
									<td><span class="color_green">in stock</span> 20 item(s)</td>
								</tr>
								<tr>
									<td>Product Code:</td>
									<td>PS06</td>
								</tr>
							</table>
							<h5 class="fw_medium m_bottom_10">Product Dimensions and Weight</h5>
							<table class="description_table m_bottom_5">
								<tr>
									<td>Product Length:</td>
									<td><span class="color_dark">10.0000M</span></td>
								</tr>
								<tr>
									<td>Product Weight:</td>
									<td>10.0000KG</td>
								</tr>
							</table>
							<hr class="divider_type_3 m_bottom_10">
							<p class="m_bottom_10">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. </p>
							<hr class="divider_type_3 m_bottom_15">
							<div class="m_bottom_15">
								<s class="v_align_b f_size_ex_large">$152.00</s><span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">$102.00</span>
							</div>
							<table class="description_table type_2 m_bottom_15">
								<tr>
									<td class="v_align_m">Size:</td>
									<td class="v_align_m">
										<div class="custom_select f_size_medium relative d_inline_middle">
											<div class="select_title r_corners relative color_dark">s</div>
											<ul class="select_list d_none"></ul>
											<select name="product_name">
												<option value="s">s</option>
												<option value="m">m</option>
												<option value="l">l</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td class="v_align_m">Quantity:</td>
									<td class="v_align_m">
										<div class="clearfix quantity r_corners d_inline_middle f_size_medium color_dark">
											<button class="bg_tr d_block f_left" data-direction="down">-</button>
											<input type="text" name="" readonly value="1" class="f_left">
											<button class="bg_tr d_block f_left" data-direction="up">+</button>
										</div>
									</td>
								</tr>
							</table>
							<div class="clearfix m_bottom_15">
								<button class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover f_left f_size_large">Add to Cart</button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-heart-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Wishlist</span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0"><i class="fa fa-files-o f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Compare</span></button>
								<button class="button_type_12 bg_light_color_2 tr_delay_hover f_left r_corners color_dark m_left_5 p_hr_0 relative"><i class="fa fa-question-circle f_size_big"></i><span class="tooltip tr_all_hover r_corners color_dark f_size_small">Ask a Question</span></button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<!--login popup-->
		<div class="popup_wrap d_none" id="login_popup">
			<section class="popup r_corners shadow">
				<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
				<h3 class="m_bottom_20 color_dark">Log In</h3>
				<form>
					<ul>
						<li class="m_bottom_15">
							<label for="username" class="m_bottom_5 d_inline_b">Username</label><br>
							<input type="text" name="" id="username" class="r_corners full_width">
						</li>
						<li class="m_bottom_25">
							<label for="password" class="m_bottom_5 d_inline_b">Password</label><br>
							<input type="password" name="" id="password" class="r_corners full_width">
						</li>
						<li class="m_bottom_15">
							<input type="checkbox" class="d_none" id="checkbox_10"><label for="checkbox_10">Remember me</label>
						</li>
						<li class="clearfix m_bottom_30">
							<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15">Log In</button>
							<div class="f_right f_size_medium f_mxs_none">
								<a href="#" class="color_dark">Forgot your password?</a><br>
								<a href="#" class="color_dark">Forgot your username?</a>
							</div>
						</li>
					</ul>
				</form>
				<footer class="bg_light_color_1 t_mxs_align_c">
					<h3 class="color_dark d_inline_middle d_mxs_block m_mxs_bottom_15">New Customer?</h3>
					<a href="#" role="button" class="tr_all_hover r_corners button_type_4 bg_dark_color bg_cs_hover color_light d_inline_middle m_mxs_left_0">Create an Account</a>
				</footer>
			</section>
		</div>
		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/scripts.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-5306f8f674bfda4c"></script>
	</body>
</html>