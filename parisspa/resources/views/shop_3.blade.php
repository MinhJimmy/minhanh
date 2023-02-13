@extends('home')
@section('shop_1')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Paris Spa</title>
  <!-- link bootstrap -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<!-- end link bootstrap -->
  <link href="public/frontend/shop/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/frontend/shop/css/font-awesome.min.css" rel="stylesheet">
  <link href="public/frontend/shop/css/prettyPhoto.css" rel="stylesheet">
  <link href="public/frontend/shop/css/price-range.css" rel="stylesheet">
  <link href="public/frontend/shop/css/animate.css" rel="stylesheet">
	<link href="public/frontend/shop/css/main.css" rel="stylesheet">
	<link href="public/frontend/shop/css/responsive.css" rel="stylesheet">     
  <link rel="shortcut icon" href="public/frontend/shop/images/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="public/frontend/shop/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="public/frontend/shop/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="public/frontend/shop/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="public/frontend/shop/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

		
	
	
<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
     
				<div class="shipping text-center"><!--shipping-->
							<img src="public/frontend/img/mon_9.jpg" alt="" />    
						</div>			
						<div class="shipping text-center">
							<img src="public/frontend/img/mon_10.jpg" alt="" />
						</div>
						
					
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Kem Trị Thâm Mụn 2022</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{('public/frontend/shop/images/home/SP_15.jpg')}}" alt="" />
											<h2>$47</h2>
											<p>Kem Loreal Perfect</p>
											{{-- <a href="{{URL::to('/oder_1')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
										<button class="btn btn-default add-to-cart addToCart" data-prod="15"><i class="fa fa-shopping-cart"></i>Mua Hàng</button>
											
										</div>
											
								</div>
								<img src="{{('public/frontend/shop/images/home/sale.png')}}" class="new" alt="" />
								<div class="choose">
									
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{('public/frontend/shop/images/home/SP_16.jpg')}}" alt="" />
										<h2>$75</h2>
										<p>Kem Loreal Plean</p>
										{{-- <a href="{{URL::to('/oder_1')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
										<button class="btn btn-default add-to-cart addToCart" data-prod="16"><i class="fa fa-shopping-cart"></i>Mua Hàng</button>
										
									</div>
									<img src="{{('public/frontend/shop/images/home/new.png')}}" class="new" alt="" />
								</div>
								<div class="choose">
									
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{('public/frontend/shop/images/home/SP_17.jpg')}}" alt="" />
										<h2>$89</h2>
										<p>Kem Blanche Neige</p>
										{{-- <a href="{{URL::to('/oder_1')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
										<button class="btn btn-default add-to-cart addToCart" data-prod="17"><i class="fa fa-shopping-cart"></i>Mua Hàng</button>
									
								</div>
								<img src="{{('public/frontend/shop/images/home/new.png')}}" class="new" alt="" />
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{('public/frontend/shop/images/home/SP_18.jpg')}}" alt="" />
										<h2>$87</h2>
										<p>Kem Blanche Neige 50</p>
										{{-- <a href="{{URL::to('/oder_1')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
										<button class="btn btn-default add-to-cart addToCart" data-prod="18"><i class="fa fa-shopping-cart"></i>Mua Hàng</button>
									</div>
									
									<img src="{{('public/frontend/shop/images/home/new.png')}}" class="new" alt="" />
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{('public/frontend/shop/images/home/SP_22.jpg')}}" alt="" />
										<h2>$82</h2>
										<p>Kem Clans Pureté</p>
										{{-- <a href="{{URL::to('/oder_1')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
										<button class="btn btn-default add-to-cart addToCart" data-prod="21"><i class="fa fa-shopping-cart"></i>Mua Hàng</button>
</div>
									
									<img src="{{('public/frontend/shop/images/home/sale.png')}}" class="new" alt="" />
								</div>
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{('public/frontend/shop/images/home/SP_20.jpg')}}" alt="" />
										<h2>$85</h2>
										<p>Kem Loreal Perfect 50</p>
										{{-- <a href="{{URL::to('/oder_1')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a> --}}
										<button class="btn btn-default add-to-cart addToCart" data-prod="20"><i class="fa fa-shopping-cart"></i>Mua Hàng</button>
									</div>
									
								</div>
								
							</div>
							<img src="{{('public/frontend/shop/images/home/new.png')}}" class="new" alt="" />
						</div>
						
						
	</section>

	<script src="{{('public/frontend/shop/js/jquery.js')}}"></script>
  <script src="{{('public/frontend/shop/js/bootstrap.min.js')}}"></script>
  <script src="{{('public/frontend/shop/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{('public/frontend/shop/js/price-range.js')}}"></script>
  <script src="{{('public/frontend/shop/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{('public/frontend/shop/js/main.js')}}"></script>

	<script>
		$(document).ready(function () {
			$('.addToCart').click(function (e) { 
				e.preventDefault()
				const data = {
					'product_id': $(this).data('prod'),
					'product_qty': 1,
				}
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				})
				$.ajax({
					method: "POST",
					url: "/addToCart",
					data: data,
					success: function (response) {
						alert(response.status)
					}
				});
			})
		})
	</script>


</body>
</html>
@endsection
