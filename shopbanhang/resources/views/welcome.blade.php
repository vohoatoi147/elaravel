<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Chợ nhà giàu</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.')}}css" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.')}}css" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="tel:0123456"><i class="fa fa-phone"></i>0374600090</a></li>
								<li><a href="mailto:chonhagiau.com"><i class="fa fa-envelope"></i> chonhagiau.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{URL::to('/')}}"><img src={{('public/frontend/images/logo6.jpg')}} alt="" style="width: 220px;height: 100px" /></a>
						</div>

					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">

								<li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i> Trang chủ</a></li>
                                <?php
                                $customer_id = Session::get('customer_id');
                                $shipping_id = Session::get('shipping_id');
                                if($customer_id != null && $shipping_id == null){
                                ?>
                                <li><a href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <?php
                                }elseif($customer_id != null && $shipping_id != null){
                                ?>
                                <li><a href="{{URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <?php
                                }else{
                                ?>
                                    <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                                <?php
                                }
                                ?>
								<li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                                <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=null){
                                ?>
                                    <li><a href="{{URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>
                                <?php
                                }else{
                                ?>
                                <li><a href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                                <?php
                                }
                                ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

					</div>
					<div class="col-sm-4">
                        <form action="{{URL::to('/tim-kiem')}}" method="post">
                            {{csrf_field()}}
						<div class="search_box pull-right">
							<input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                            <input type="submit" name="search_items" class="btn-primary" value="Tìm" >
						</div>
                        </form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
		            					<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>CNG</span></h1>
									<h2>GIAO HÀNG 2h HCM</h2>
									<p>Miễn phí giao hàng toàn quốc cho đơn hàng trên 1.000.000đ. </p>
									<button type="button" class="btn btn-default get">Mua ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{('public/frontend/images/slider1.jpg')}}" class="girl img-responsive" alt="" />

								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>CNG</span></h1>
									<h2>THỬ & ĐỔI SIZE DỄ DÀNG</h2>
									<p>Dễ dàng đổi nếu size không vừa hoặc sản phẩm không đúng. </p>
									<button type="button" class="btn btn-default get">Mua ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{'public/frontend/images/'}}slider2.jpg" class="girl img-responsive" alt="" />

								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>CNG</span></h1>
									<h2>CÓ SẴN TẠI CỬA HÀNG</h2>
									<p>Không phải chờ order. Mẫu mới update liên tục mỗi tháng. </p>
									<button type="button" class="btn btn-default get">Mua ngay</button>
								</div>
								<div class="col-sm-6">
									<img src="{{'public/frontend/images/'}}slider3.jpg" class="girl img-responsive" alt="" />

								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            @foreach($category as $key=>$cate)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4>
								</div>
							</div>
                            @endforeach
						</div><!--/category-products-->

						<div class="brands_products"><!--brands_products-->
							<h2>Thương hiệu</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key=>$brand)
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                                    @endforeach
								</ul>
							</div>
						</div><!--/brands_products-->

{{--						<div class="price-range"><!--price-range-->--}}
{{--							<h2>Price Range</h2>--}}
{{--							<div class="well text-center">--}}
{{--								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />--}}
{{--								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>--}}
{{--							</div>--}}
{{--						</div><!--/price-range-->--}}

{{--						<div class="shipping text-center"><!--shipping-->--}}
{{--							<img src="images/home/shipping.jpg" alt="" />--}}
{{--						</div><!--/shipping-->--}}

					</div>
				</div>

				<div class="col-sm-9 padding-right">
					@yield('content')


				</div>
			</div>
		</div>
	</section>

	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Địa chỉ của hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Dịch vụ khách hàng</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hướng dẫn mua hàng</a></li>
								<li><a href="#">Vận chuyển và giao nhận</a></li>
								<li><a href="#">Thanh toán</a></li>
								<li><a href="#">Bảo hành và đổi trả</a></li>
								<li><a href="#">Xử lí khiếu nại</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Thông tin</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Về chúng tôi</a></li>
								<li><a href="#">Bảo mật thông tin</a></li>
								<li><a href="#">Tài khoản</a></li>
								<li><a href="#">Sản phẩm yêu thích</a></li>
								<li><a href="#">Mua sỉ / Hợp tác</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Link tìm kiếm</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Xả kho</a></li>
								<li><a href="#">Giày Sneaker</a></li>
								<li><a href="#">Giày Nike</a></li>
								<li><a href="#">Giày Adidas</a></li>
								<li><a href="#">Giày New Balance</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Góp ý</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Nhập địa chỉ mail" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Chất lượng giày tốt miễn chê.<br /> Good store to come.</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2020 CNG. </p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.hoatoi2k.studio">Võ Hòa Tới</a></span></p>
				</div>
			</div>
		</div>

	</footer><!--/Footer-->



    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>

</body>
</html>
