<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PARIS SPA - Beauty & Spa </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
<!-- link bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- end link bootstrap -->
  

<link rel="{{('public/frontend/preconnect')}}" href="https://fonts.gstatic.com">
<link href="{{('public/frontend/https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap')}}" rel="stylesheet">
<link href="{{('public/frontend/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
<link href="{{('public/frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{('public/frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{('public/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
<link href="{{('public/frontend/css/style.css')}}" rel="stylesheet">
<!-- link trang chi tiet -->
<link href="{{asset("public/frontend/img/logo_1.jpg")}}" rel="icon">
</head>

<body>
    <header>
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small><i class="fa fa-phone-alt mr-2"></i>0378884442</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>ParisSpa@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-right">
            <div class="d-inline-flex align-items-center">
                @if (Auth::check() || isset($_SESSION['user']))
                    <strong>{{ $_SESSION['user']['username'] }}</strong>
                    &ensp;
                    @if (Session()->has('isAdmin') && Session()->get('isAdmin') == 1)
                        <strong><a href="{{ route('admin.product.index') }}">Admin</a></strong>
                    @endif
                    &ensp;
                    <a href="{{ route('logout') }}">Logout</a>
                @else
                    <a href="{{URL::to('/login')}}"><i class="fa fa-user"></i> Đăng Nhập</a>
                    </a>
                    &ensp;
                    <a href="{{URL::to('/register')}}"><i class="fa fa-lock"></i> Đăng Ký</a>
                    </a>
                @endif
            </div>
            </div>
        </div>
    </div>



<menu> 
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
        <a href="{{URL::to('/trangchu_1')}}" class="navbar-brand ml-lg-3">
            <h1 class="m-0 text-primary"><span class="text-dark">Paris</span> Spa</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{URL::to('/trangchu_1')}}" class="nav-item nav-link">Trang Chủ</a>
                <a href="{{URL::to('/about')}}" class="nav-item nav-link">Về Chúng Tôi</a>
                <div class="nav-item dropdown">
                <a href="{{URL::to('/cream_paris')}}"  class="nav-link dropdown-toggle " data-toggle="dropdown">Cửa Hàng Kem </a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{URL::to('/acne_cream')}}" class="dropdown-item smallMenu ">Kem Đặc Trị Mụn </a>
                        <a href="{{URL::to('/acne_treatment')}}" class="dropdown-item smallMenu">Kem Trị Thâm Mụn </a>
                        <a href="{{URL::to('/acne_body')}}" class="dropdown-item smallMenu">Kem Dưỡng Trắng Da </a>
                        <a href="{{URL::to('/acne_skin')}}" class="dropdown-item smallMenu"> Kem Dưỡng Toàn Thân </a>
                       
                    </div>
                </div>
                <a href="{{URL::to('/contact')}}" class="nav-item nav-link">Liên Hệ</a>
            </div>
            <a href="{{URL::to('/booking')}}" class="btn btn-primary d-none d-lg-block">Đặt Bây Giờ</a>  <!-- Nhớ Xử Lý Code Về Trang Đặt Lịch -->
        </div>
    </nav>
</div>
</menu>
</header>
<body> 

    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{("public/frontend/img/carousel-1.jpg")}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;"> Paris Spa & Sắc Đẹp</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Điều Trị Xoa Bóp</h3>
                            <p class="mx-md-5 px-5">Điều Trị Xóa Bóp Toàn Thân Mang Lại Sự Thoải Mái Và Thư Giản Toàn Thân Hiệu Quả Cao</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/booking')}}">Đặt Bây Giờ</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{("public/frontend/img/carousel-2.jpg")}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Paris Spa & Sắc Đẹp</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Điều Trị Mụn Da Mặt</h3>
                            <p class="mx-md-5 px-5">Điều Trị Mụn Da Mặt Lấy Lại Sự Tự Tin Khuôn Mặt Đẹp Có Làn Da Mặt Khỏe Đẹp Nhất  </p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/booking')}}">Đặt Bây Giờ</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{("public/frontend/img/carousel-3.jpg")}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Paris Spa & Sắc Đẹp</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">Điều Trị Trắng Da</h3>
                            <p class="mx-md-5 px-5">Điều Trị Trắng Da Mang Lại Làn Da Trắng Hồng Đẹp Và Quyến Rũ Cho Phụ Nữ Chúng Ta</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/booking')}}">Đặt Bây Giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




       <!-- About Start -->
       <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="{{("public/frontend/img/about.jpg")}}" alt="">
                </div>
                <div class="col-lg-6">
                    <h6 class="d-inline-block text-primary text-uppercase bg-light py-1 px-2">Về Chúng Tôi</h6>
                    <h1 class="mb-4"> Paris Spa Làm Đẹp Da </h1>
                    <p class="pl-4 border-left border-primary">Có Thương Hiệu Đến Từ Pháp Luôn Luôn Mang Lại Cho Khách Hàng Vẻ Đẹp Tự Nhiên, Chất Lượng Dịch Vụ Cao Chăm Sóc Da Tốt Nhất.</p>
                    <div class="row pt-3">
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">99</h3>
                                <h6 class="text-uppercase">CHUYÊN GIA SPA</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bg-light text-center p-4">
                                <h3 class="display-4 text-primary" data-toggle="counter-up">1000</h3>
                                <h6 class="text-uppercase">Hạnh Phúc Làm Đẹp</h6>
                            </div>
                        </div>
                    </div>
</div><br>
                <div class="container py-5">
                <div class="row align-items-center">
                <div class="tab-content">
                <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
    <li class="nav-item ">
      <a class="nav-link active " data-toggle="tab" href="#home"><h5>Bình Luận</h5></a>
    </li>
    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" href="#menu1"><h5>Đánh Giá</h5></a>
    </li>
   
  </ul>

  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h2>Bình Luận</h2>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="ieY58rfO"></script>
        <div class="fb-comments" data-href="http://127.0.0.1:8000/about" data-width="100%" data-numposts="5"></div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h2>Phản Hồi Khách Hàng</h2>
      <h4>Các Dịch Vụ Làm Đẹp Và Chăm Sóc Da Tại Paris Spa Rất Tuyệt Vời.</h4>

    </div>
    <div id="menu2" class="container tab-pane fade"><br>
    
                </div>
                </div>

            </div>
        </div>
       </div>
    </div>
        </div>

            </div>
                </div>
               
</div>
</div>



            <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Chuyên Gia Sắc Đẹp Chúng Tôi</h6>
                    <h2 class="mb-5">Paris Spa & Chuyên Gia Sắc Đẹp </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{("public/frontend/img/team-1.jpg")}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">Paris Spa & Chuyên Gia Sắc Đẹp</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <h4> <a href="{{URL::to('/booking')}}"> Đặt Bây Giờ</a></h4>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{("public/frontend/img/team-2.jpg")}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Cory Brown</h5>
                                <p class="m-0">Paris Spa & Chuyên Gia Sắc Đẹp</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <h4> <a href="{{URL::to('/booking')}}"> Đặt Bây Giờ </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{("public/frontend/img/team-3.jpg")}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Elizabeth Ross</h5>
                                <p class="m-0">Paris Spa & Chuyên Gia Sắc Đẹp</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <h4> <a href="{{URL::to('/booking')}}"> Đặt Bây Giờ </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{("public/frontend/img/team-4.jpg")}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Kelly Walke</h5>
                                <p class="m-0">Paris Spa & Chuyên Gia Sắc Đẹp </p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <h4> <a href="{{URL::to('/booking')}}"> Đặt Bây Giờ </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      
                
    <div class="echbay-sms-messenger style-for-position-br">
	<div class="phonering-cart">
		<a href="{{ URL::to('/carts') }}" class="echbay-phonering-carts">.</a>
	</div>
	<div class="phonering-alo-alo">
		<a href="tel:0378884442" rel="nofollow" class="echbay-phonering-alo-event">.</a>
	</div>
    <div class="phonering-alo-messenger">
		<a href="https://www.facebook.com/ParisSpa.Online/" target="_blank" rel="nofollow" class="echbay-phonering-messenger-event">.</a>
	</div>  
	<div class="phonering-alo-zalo">
		<a href="https://zalo.me/g/bkdhrp255" target="_blank" rel="nofollow" class="echbay-phonering-zalo-event">.</a>
	</div>
	
</div>
 
 
<style type="text/css">
.echbay-sms-messenger div.phonering-alo-zalo, 
.echbay-sms-messenger div.phonering-alo-alo {
	background-color:#0084ff
}
.echbay-sms-messenger div.phonering-alo-sms {
	background-color:#f60
}
.echbay-sms-messenger div.phonering-alo-messenger {
	background-color:#e60f1e
}
 
.echbay-sms-messenger {
	width:45px
}
.echbay-sms-messenger a {
	line-height:45px;
        color: transparent;
display:block;
}
.echbay-sms-messenger {
	display:block
}
.echbay-sms-messenger div.phonering-alo-zalo {
	display: block
}
.echbay-sms-messenger div.phonering-cart {
    background-image: url(https://cdn-icons-png.flaticon.com/512/308/308833.png);
}
.echbay-sms-messenger div.phonering-alo-alo {
    background-image: url(http://codfe.com/wp-content/uploads/2020/08/call.png);
}
.echbay-sms-messenger div.phonering-alo-sms {
    background-image: url(http://codfe.com/wp-content/uploads/2020/08/mail.png);
    background-color: #f60;
    background-size: 60%;
}
.echbay-sms-messenger div.phonering-alo-zalo {
    background-image: url(http://codfe.com/wp-content/uploads/2020/08/zalo.png);
}
.echbay-sms-messenger div.phonering-alo-messenger {
    background-image: url(http://codfe.com/wp-content/uploads/2020/08/messenger.png);
    background-color: #e60f1e;
}
.echbay-sms-messenger div {
    margin: 14px 0;
    background: #0084FF center no-repeat;
    background-size: 70%;
    border-radius: 50%;
    box-shadow: 0 3px 10px #888;
}
 
.echbay-sms-messenger {
    text-align: center;
    right:20px;
    position: fixed;
    bottom: 20px;
    z-index: 999;
}
</style>
<script type="text/javascript" src="//erasoft.vn/frame/default/js/snow.js"></script>
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '734190170889666');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=734190170889666&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</body>
<footer> 
    <!-- Footer Start -->
    <div class="footer container-fluid position-relative bg-dark py-5" style="margin-top: 90px;">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mb-3 text-white"><span class="text-primary">Paris</span> Spa</h1>
                    </a>
                    <p>Paris Spa: Thương Hiệu Đến Từ Pháp Luôn Luôn Mang Lại Cho Khách Hàng Vẻ Đẹp , Chất Lượng Dịch Vụ Chăm Sóc Da Tốt Nhất.</p>
                    <p>Địa Chỉ:<i class="fa fa-map-marker-alt mr-2"></i>45 Võ Thị Sáu, Quận 1, Thành Phố Hồ Chí Minh, Việt Nam</p>
                    <p>Số Điện Thoại:<i class="fa fa-phone-alt mr-2"></i>0378884442</p>
                    <p>Gmail:<i class="fa fa-envelope mr-2"></i>PariSpa@gmail.com</p>
                    <p>Facebook:<i class="fa fa-envelope mr-2"></i>Paris Spa</p>
                    <p>Website:<i class="fa fa-envelope mr-2"></i>Parispa.Online</p>
                    
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Paris Spa</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="{{URL::to('/trangchu_1')}}"><i class="fa fa-angle-right mr-2"></i>Trang Chủ</a>
                                <a class="text-white-50 mb-2" href="{{URL::to('/about')}}"><i class="fa fa-angle-right mr-2"></i>Về Chúng Tôi</a>                    
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_cream')}}"><i class="fa fa-angle-right mr-2"></i>Cửa Hàng Kem</a>                
                                <a class="text-white-50" href="{{URL::to('/contact')}}"><i class="fa fa-angle-right mr-2"></i>Liên Hệ</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Cửa Hàng Kem</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_cream')}}"><i class="fa fa-angle-right mr-2"></i>Kem Đặc Trị Mụn</a>
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_body')}}"><i class="fa fa-angle-right mr-2"></i>Kem Trị Thâm Mụn</a>
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_skin')}}"><i class="fa fa-angle-right mr-2"></i>Kem Dưỡng Trắng Da</a>
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_treatment')}}"><i class="fa fa-angle-right mr-2"></i>Kem Dưỡng Toàn Thân </a>
                              
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Địa Chỉ Email </h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Địa Chỉ Email Của Bạn">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4">Đăng Ký</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top py-4" style="border-color: rgba(256, 256, 256, .15) !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <center>    <p class="m-0 text-white">&copy; <a href="{{URL::to('/trangchu_1')}}">Paris Spa</a> Đã Đăng Ký Bản Quyền 2023</p></center> 
                </div>
                
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>




<script src="{{asset("public/frontend/https://code.jquery.com/jquery-3.4.1.min.js")}}"></script>
<script src="{{asset("public/frontend/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("public/frontend/lib/easing/easing.min.js")}}"></script>
<script src="{{asset("public/frontend/lib/waypoints/waypoints.min.js")}}"></script>
<script src="{{asset("public/frontend/lib/counterup/counterup.min.js")}}"></script>
<script src="{{asset("public/frontend/lib/owlcarousel/owl.carousel.min.js")}}"></script>
<script src="{{asset("public/frontend/lib/tempusdominus/js/moment.min.js")}}"></script>
<script src="{{asset("public/frontend/lib/tempusdominus/js/moment-timezone.min.js")}}"></script>
<script src="{{asset("public/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<script src="{{asset("public/frontend/mail/jqBootstrapValidation.min.js")}}"></script>
<script src="{{asset("public/frontend/mail/contact.js")}}"></script>
<script src="{{asset("public/frontend/js/main.js")}}"></script>



</body>
</footer>
</html>

