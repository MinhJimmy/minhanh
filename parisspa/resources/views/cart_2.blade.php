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
                    <a href="{{URL::to('/login')}}"><i class="fa fa-user"></i> ????ng Nh???p</a>
                    </a>
                    &ensp;
                    <a href="{{URL::to('/register')}}"><i class="fa fa-lock"></i> ????ng K??</a>
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
                <a href="{{URL::to('/trangchu_1')}}" class="nav-item nav-link">Trang Ch???</a>
                <a href="{{URL::to('/about')}}" class="nav-item nav-link">V??? Ch??ng T??i</a>
                <div class="nav-item dropdown">
                <a href="{{URL::to('/cream_paris')}}"  class="nav-link dropdown-toggle " data-toggle="dropdown">C???a H??ng Kem</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{URL::to('/acne_cream')}}" class="dropdown-item smallMenu "> Kem ?????c Tr??? M???n</a>
                        <a href="{{URL::to('/acne_treatment')}}" class="dropdown-item smallMenu">Kem Tr??? Th??m M???n </a>
                        <a href="{{URL::to('/acne_body')}}" class="dropdown-item smallMenu">Kem D?????ng Tr???ng Da</a>
                        <a href="{{URL::to('/acne_skin')}}" class="dropdown-item smallMenu">Kem D?????ng To??n Th??n</a>
                    </div>
                </div>

                <a href="{{URL::to('/contact')}}" class="nav-item nav-link">Li??n H???</a>
 
    </nav>
</div>




<body> 
<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>H??nh ???nh</th>
                                    <th class="p-name">T??n S???n Ph???m</th>
                                    <th>Gi??</th>
                                    <th>S??? L?????ng</th>
                                    <th>T???ng C???ng</th>
                                    <th>X??a</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_list as $prod)
                                    <tr class="product-data">
                                        <td class="cart-pic first-row"><img src="public/frontend/shop/images/home/{{ $prod->img }}" alt=""></td>
                                        <td class="cart-title first-row">
                                            <h5>{{ $prod->name }}</h5>
                                        </td>
                                        <td class="p-price first-row product-price" data-price="{{ $prod->pricesale }}">${{ $prod->pricesale }}</td>
                                        <td class="qua-col first-row">
                                            <div class="quantity">
                                                <button class="btn btn-default add-to-cart decreaseQty" data-prod="{{ $prod->product_id }}"><strong>-</strong></button>
                                                <div class="pro-qty">
                                                    <style>
                                                        input.product-qty::-webkit-outer-spin-button,
                                                        input.product-qty::-webkit-inner-spin-button {
                                                            -webkit-appearance: none; margin: 0;
                                                        }
                                                    </style>
                                                    <input type="number" value="{{ $prod->product_qty }}" class="product-qty" min="1" data-prod="{{ $prod->product_id }}">
                                                </div>
                                                <button class="btn btn-default add-to-cart increaseQty" data-prod="{{ $prod->product_id }}"><strong>+</strong></button>
                                            </div>
                                        </td>
                                        <td class="total-price first-row product-subtotal">${{ $prod->product_qty * $prod->pricesale }}</td>
                                        <td class="close-td">
                                            <button class="btn btn-default add-to-cart removeProd" data-prod="{{ $prod->product_id }}">
                                            X??a
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                {{-- <ul>
                                    <li class="subtotal">Subtotal <span>$193</span></li>
                                    <li class="cart-total">Total <span>$193</span></li>
                                </ul> --}}
                                <center>  <h4> Ph????ng Th???c Thanh To??n</h4> </center>
                                <br>
                               <a href="{{ route('checkout') }}" class="proceed-btn">Thanh To??n Tr???c Ti???p </a>
                    <br>
                                <form action="{{ route('vnpay_payment') }}" method="POST">
                                    @csrf
                                    <center>   <button type="submit" name="redirect" class="proceed-btn_2"> THANH TO??N VNPAY </center>
                              
                                </form>

                                
                            </div>
                            
                        </div>
                    </div>

                               
                </div>
            </div>
            <br>
            {{--  
                        N??t L???ch S??? Mua H??ng
                    --}}
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <a href="{{ route('history') }}" class="proceed-btn">L???ch S??? Mua H??ng</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
                                                            
    </section>
   <style>     
   .proceed-btn_2{
    background-color:yellow;
    height:50px;
    text-align: center;
    width: 360px;
    box-shadow: 0 3px 10px #888;
    
    
}
  </style>

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
                    <p>Paris Spa: Th????ng Hi???u ?????n T??? Ph??p Lu??n Lu??n Mang L???i Cho Kh??ch H??ng V??? ?????p , Ch???t L?????ng D???ch V??? Ch??m S??c Da T???t Nh???t.</p>
                    <p>?????a Ch???:<i class="fa fa-map-marker-alt mr-2"></i>45 V?? Th??? S??u, Qu???n 1, Th??nh Ph??? H??? Ch?? Minh, Vi???t Nam</p>
                    <p>S??? ??i???n Tho???i:<i class="fa fa-phone-alt mr-2"></i>0378884442</p>
                    <p>Gmail:<i class="fa fa-envelope mr-2"></i>PariSpa@gmail.com</p>
                    <p>Facebook:<i class="fa fa-envelope mr-2"></i>Paris Spa</p>
                    <p>Website:<i class="fa fa-envelope mr-2"></i>Parispa.Online</p>
                    
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">Paris Spa</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="{{URL::to('/trangchu_1')}}"><i class="fa fa-angle-right mr-2"></i>Trang Ch???</a>
                                <a class="text-white-50 mb-2" href="{{URL::to('/about')}}"><i class="fa fa-angle-right mr-2"></i>V??? Ch??ng T??i</a>                    
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_cream')}}"><i class="fa fa-angle-right mr-2"></i>C???a H??ng Kem</a>                
                                <a class="text-white-50" href="{{URL::to('/contact')}}"><i class="fa fa-angle-right mr-2"></i>Li??n H???</a>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-5">
                            <h5 class="text-white text-uppercase mb-4">C???a H??ng Kem</h5>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_cream')}}"><i class="fa fa-angle-right mr-2"></i>Kem ?????c Tr??? M???n</a>
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_body')}}"><i class="fa fa-angle-right mr-2"></i>Kem Tr??? Th??m M???n</a>
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_skin')}}"><i class="fa fa-angle-right mr-2"></i>Kem D?????ng Tr???ng Da</a>
                                <a class="text-white-50 mb-2" href="{{URL::to('/acne_treatment')}}"><i class="fa fa-angle-right mr-2"></i>Kem D?????ng To??n Th??n </a>
                              
                            </div>
                        </div>
                        <div class="col-sm-12 mb-5">
                            <h5 class="text-white text-uppercase mb-4">?????a Ch??? Email </h5>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="?????a Ch??? Email C???a B???n">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary px-4">????ng K??</button>
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
                <center>    <p class="m-0 text-white">&copy; <a href="{{URL::to('/trangchu_1')}}">Paris Spa</a> ???? ????ng K?? B???n Quy???n 2023</p></center> 
                </div>
                
                </div>
            </div>
        </div>
    </div>
    



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
        $('.product-qty').keyup(function (e) {
            // console.log($(this).val().length)
            if ($(this).val().length === 0) {
                e.preventDefault()
                return
            } else {
                if ($(this).val() < 1) {
                    $(this).val(1)
                }
                const self = this
                const data = {
                    'product_id': $(this).data('prod'),
                    'qtychange': parseInt($(this).val())
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                $.ajax({
                    method: "POST",
                    url: "/changeQtyFromCart",
                    data: data,
                    success: function (response) {
                        // console.log(response.qty)
                        let prod = $(self).closest('.product-data')
                        let price = prod.find('.product-price').data('price')
                        prod.find('.product-subtotal').text(`\$${price * $(self).val()}`)
                    }
                })
            }
        })

        $('.decreaseQty').click(function (e) { 
            e.preventDefault()
            const self = this
            const data = {
                'product_id': $(this).data('prod'),
                'qtychange': 'decrease'
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            $.ajax({
                method: "POST",
                url: "/changeQtyFromCart",
                data: data,
                success: function (response) {
                    // alert(response.status)
                    let prod = $(self).closest('.product-data')
                    prod.find('.product-qty').val(response.qty)
                    let price = prod.find('.product-price').data('price')
                    prod.find('.product-subtotal').text(`\$${price * response.qty}`)
                }
            })
        })
        
        $('.increaseQty').click(function (e) { 
            e.preventDefault()
            const self = this
            const data = {
                'product_id': $(this).data('prod'),
                'qtychange': 'increase'
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            $.ajax({
                method: "POST",
                url: "/changeQtyFromCart",
                data: data,
                success: function (response) {
                    // alert(response.status)
                    let prod = $(self).closest('.product-data')
                    prod.find('.product-qty').val(response.qty)
                    let price = prod.find('.product-price').data('price')
                    prod.find('.product-subtotal').text(`\$${price * response.qty}`)
                }
            })
        })

        $('.removeProd').click(function (e) { 
            e.preventDefault()
            const self = this
            const data = {
                'product_id': $(this).data('prod'),
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            })
            $.ajax({
                method: "POST",
                url: "/removeFromCart",
                data: data,
                success: function (response) {
                    // alert(response.status)
                    $(self).closest('.product-data').remove()
                }
            })
        })
    })
</script>
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
</footer>
</html>

