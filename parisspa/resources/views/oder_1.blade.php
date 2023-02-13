
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PARIS SPA - Beauty & Spa </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- link bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- end link bootstrap -->
  

<link rel="{{asset("public/frontend/preconnect")}}" href="https://fonts.gstatic.com">
<link href="{{asset("public/frontend/https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap")}}" rel="stylesheet">
<link href="{{asset("public/frontend/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/lib/animate/animate.min.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/lib/owlcarousel/assets/owl.carousel.min.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css")}}" rel="stylesheet" />
<link href="{{asset("public/frontend/css/style.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/img/logo_1.jpg")}}" rel="icon">
<link href="{{asset("public/frontend/csss/style.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/csss/elegant-icons.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/csss/jquery-ui.min.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/csss/nice-select.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/csss/owl.carousel.min.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/csss/slicknav.min.css")}}" rel="stylesheet">
<link href="{{asset("public/frontend/csss/themify-icons.css")}}" rel="stylesheet">
</head>


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
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
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
</header>

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
                <a href="{{URL::to('/cream_paris')}}"  class="nav-link dropdown-toggle " data-toggle="dropdown">Cửa Hàng Kem</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{URL::to('/acne_cream')}}" class="dropdown-item smallMenu "> Kem Đặc Trị Mụn</a>
                        <a href="{{URL::to('/acne_treatment')}}" class="dropdown-item smallMenu">Kem Trị Thâm Mụn </a>
                        <a href="{{URL::to('/acne_body')}}" class="dropdown-item smallMenu">Kem Dưỡng Trắng Da</a>
                        <a href="{{URL::to('/acne_skin')}}" class="dropdown-item smallMenu">Kem Dưỡng Toàn Thân</a>
                    </div>
                </div>

                <a href="{{URL::to('/contact')}}" class="nav-item nav-link">Liên Hệ</a>
 
    </nav>
</div>


<body> 
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                        
                        <div class="row">
                            <div class="col-lg-4 offset-lg-8">
                                <div class="proceed-checkout">
                                    <a href="{{ route('home') }}" class="proceed-btn">Quay Về</a>
                                </div>
                            </div>
                        </div>
                    @php
                        Session::pull('success');
                    @endphp
                    @else
                        
                        <div class="cart-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th class="p-name">Tên Sản Phẩm</th>
                                        <th>giá</th>
                                        <th>Số Lượng</th>
                                        <th>Tổng Cộng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $prod)
                                        <tr class="product-data">
                                            <td class="cart-pic first-row"><img src="public/frontend/shop/images/home/{{ $prod->img }}" alt=""></td>
                                            <td class="cart-title first-row">
                                                <h5>{{ $prod->name }}</h5>
                                            </td>
                                            <td class="p-price first-row product-price" data-price="{{ $prod->pricesale }}">${{ $prod->pricesale }}</td>
                                            <td class="p-price first-row product-qty" data-qty="{{ $prod->product_qty }}">{{ $prod->product_qty }}</td>
                                            <td class="total-price first-row">$<span class="product-subtotal">{{ $prod->product_qty * $prod->pricesale }}</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('doCheckout') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-7 offset-lg-1">
                                            <div class="hours-text bg-light p-4 p-lg-5">
                                                <div class="form-row">
                                                    <div class="col-sm-3">
                                                        <label for="address">Địa Chỉ Đặt Hàng</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg-transparent p-4"
                                                                placeholder="" required="required" id="address" name="address" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-sm-3">
                                                        <label for="phone">Số Điện Thoại</label>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control bg-transparent p-4"
                                                                placeholder="" required="required" id="phone" name="phone" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="proceed-checkout">
                                                <ul>
                                                    <li class="cart-total">Tổng Tiền:  <span>$<span id="cart-total">193</span></span></li>
                                                </ul>
                                                <input type="hidden" name="payment_method" value="1">
                                                <button type="submit" class="proceed-btn w-100">Thanh Toán </button>
                                                <a href="{{ route('carts') }}" class="proceed-btn" style="background: #fff; color: #252525">Quay Lại</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>

                            </div>
                           
                        </div>
                        <br>
                      
                    @endif
                  

                    {{--  
                        Nút Lịch Sử Mua Hàng
                    --}}
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <a href="{{ route('history') }}" class="proceed-btn">Lịch Sử Mua Hàng</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

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

<script src="{{('public/frontend/shop/js/jquery.js')}}"></script>
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
<script src="{{asset("public/frontend/js/imagesloaded.pkgd.min.js")}}"></script>
<script src="{{asset("public/frontend/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("public/frontend/js/jquery-ui.min.js")}}"></script>
<script src="{{asset("public/frontend/js/jquery.countdown.min.js")}}"></script>
<script src="{{asset("public/frontend/js/jquery.dd.min.js")}}"></script>
<script src="{{asset("public/frontend/js/jquery.nice-select.min.js")}}"></script>
<script src="{{asset("public/frontend/js/jquery.slicknav.js")}}"></script>
<script src="{{asset("public/frontend/js/jquery.zoom.min.js")}}"></script>
<script src="{{asset("public/frontend/js/owl.carousel.min.js")}}"></script>


<script>
    $(document).ready(function () {
        let total = 0
        $('.product-subtotal').each(function() {
            const val = parseInt($(this).text())
            total += val
        })
        $('#cart-total').text(total)
    })
</script>
    
</body>
</footer>
</html>

