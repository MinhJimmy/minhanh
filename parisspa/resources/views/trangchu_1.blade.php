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
                <a href="{{URL::to('/cream_paris')}}"  class="nav-link dropdown-toggle " data-toggle="dropdown">C???a H??ng Kem </a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{URL::to('/acne_cream')}}" class="dropdown-item smallMenu ">Kem ?????c Tr??? M???n </a>
                        <a href="{{URL::to('/acne_treatment')}}" class="dropdown-item smallMenu">Kem Tr??? Th??m M???n </a>
                        <a href="{{URL::to('/acne_body')}}" class="dropdown-item smallMenu">Kem D?????ng Tr???ng Da </a>
                        <a href="{{URL::to('/acne_skin')}}" class="dropdown-item smallMenu"> Kem D?????ng To??n Th??n </a>
                       
                    </div>
                </div>
                <a href="{{URL::to('/contact')}}" class="nav-item nav-link">Li??n H???</a>
            </div>
            <a href="{{URL::to('/booking')}}" class="btn btn-primary d-none d-lg-block">?????t B??y Gi???</a>  <!-- Nh??? X??? L?? Code V??? Trang ?????t L???ch -->
        </div>
    </nav>
</div>
</menu>
</header>
<body> 
@yield('content')
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
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;"> Paris Spa & S???c ?????p</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">??i???u Tr??? Xoa B??p</h3>
                            <p class="mx-md-5 px-5">??i???u Tr??? X??a B??p To??n Th??n Mang L???i S??? Tho???i M??i V?? Th?? Gi???n To??n Th??n Hi???u Qu??? Cao</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/booking')}}">?????t B??y Gi???</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{("public/frontend/img/carousel-2.jpg")}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Paris Spa & S???c ?????p</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">??i???u Tr??? M???n Da M???t</h3>
                            <p class="mx-md-5 px-5">??i???u Tr??? M???n Da M???t L???y L???i S??? T??? Tin Khu??n M???t ?????p C?? L??n Da M???t Kh???e ?????p Nh???t  </p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/booking')}}">?????t B??y Gi???</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="min-height: 100vh;">
                    <img class="position-absolute w-100 h-100" src="{{("public/frontend/img/carousel-3.jpg")}}" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h6 class="text-white text-uppercase mb-3 animate__animated animate__fadeInDown" style="letter-spacing: 3px;">Paris Spa & S???c ?????p</h6>
                            <h3 class="display-3 text-capitalize text-white mb-3">??i???u Tr??? Tr???ng Da</h3>
                            <p class="mx-md-5 px-5">??i???u Tr??? Tr???ng Da Mang L???i L??n Da Tr???ng H???ng ?????p V?? Quy???n R?? Cho Ph??? N??? Ch??ng Ta</p>
                            <a class="btn btn-outline-light py-3 px-4 mt-3 animate__animated animate__fadeInUp" href="{{URL::to('/booking')}}">?????t B??y Gi???</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!-- Open Hours Start -->
 <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{("public/frontend/img/opening.jpg")}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                        <h6 class="d-inline-block text-white text-uppercase bg-primary py-1 px-2">GI??? L??M VI???C</h6>
                        <h1 class="mb-4">Khu L??m ?????p V?? Th?? Gi??n </h1>
                        <p>??i???u Tr??? M???n Da M???t L???y L???i S??? T??? Tin Tr??n Khu??n M???t ?????p V?? C?? L??n Da M???t V???a Kh???e V???a ?????p Nh???t Cho M???i Ng?????i Ch??ng Ta. </p>
                        <ul class="list-inline">
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Th??? 2 ??? Th??? 6 : 8:00 AM - 21:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Th??? 7 : 9:00 AM - 21:00 PM</li>
                            <li class="h6 py-1"><i class="far fa-circle text-primary mr-3"></i>Ch??? Nh???t :9:00 AM - 21:00 PM </li>
                        </ul>
                        <a href="{{URL::to('/booking')}}" class="btn btn-primary mt-2">?????t B??y Gi???</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid px-0 py-5 my-5">
        <div class="row mx-0 justify-content-center text-center">
            <div class="col-lg-6">
                <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">D???CH V??? C???A CH??NG T??I</h6>
                <h1>Paris Spa & S???c ?????p</h1>
            </div>
        </div>
        <div class="owl-carousel service-carousel">
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{("public/frontend/img/service-1.jpg")}}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">M??t Xa C?? Th???</h4>
                    <p class="text-white px-3 mb-3">M??t Xa C?? Th??? Mang L???i S??? Tho???i M??i To??n Th??n Nh???t</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{URL::to('/booking')}}">?????t B??y Gi??? </a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{("public/frontend/img/service-2.jpg")}}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Tr??? Li???u Da M???t</h4>
                    <p class="text-white px-3 mb-3">Tr??? Li???u Da M???t Mang L???i L??n Da M???t ?????p V?? Kh???e Nh???t</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{URL::to('/booking')}}">?????t B??y Gi???</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{("public/frontend/img/service-3.jpg")}}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Tr??? Li???u Da M???t</h4>
                    <p class="text-white px-3 mb-3">Tr??? Li???u Da M???t Mang L???i L??n Da M???t ?????p V?? Kh???e Nh???t</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{URL::to('/booking')}}">?????t B??y Gi???</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{("public/frontend/img/service-4.jpg")}}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">Ch??m S??c Da</h4>
                    <p class="text-white px-3 mb-3">Ch??m S??c Da Mang L???i L??n Da ?????p V?? Kh???e Nh???t </p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{URL::to('/booking')}}">?????t B??y Gi???</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{("public/frontend/img/service-5.jpg")}}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">T???m Tr???ng Da</h4>
                    <p class="text-white px-3 mb-3">T???m Tr???ng Da Mang L???i L??n Da Tr???ng H???ng ?????p Nh???t</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{URL::to('/booking')}}">?????t B??y Gi???</a>
                    </div>
                </div>
            </div>
            <div class="service-item position-relative">
                <img class="img-fluid" src="{{("public/frontend/img/service-6.jpg")}}" alt="">
                <div class="service-text text-center">
                    <h4 class="text-white font-weight-medium px-3">?????p M???t N???</h4>
                    <p class="text-white px-3 mb-3">?????p M???t N??? Mang L???i L??n Da M???t ?????p V?? Kh???e Nh???t</p>
                    <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="{{URL::to('/booking')}}">?????t B??y Gi???</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center bg-appointment mx-0">
            <div class="col-lg-6 py-5">
                <div class="p-5 my-5" style="background: rgba(33, 30, 28, 0.7);">
                    <h1 class="text-white text-center mb-4">?????t L???ch H???n</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent p-4" placeholder="H??? V?? T??n" required="required" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent p-4" placeholder="T??n Email" required="required" />
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Ng??y ?????t " data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent p-4 datetimepicker-input" placeholder="Th???i Gian" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="custom-select bg-transparent px-4" style="height: 47px;">
                                        <option selected>Ch???n D???ch V???</option>
                                        <option value="1">??i???u Tr??? M???n Da M???t</option>
                                        <option value="2">??i???u Tr??? To??n Th??n</option>
                                        <option value="3">??i???u Tr??? T???m Tr???ng</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">?????t B??y Gi???</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h6 class="d-inline-block bg-light text-primary text-uppercase py-1 px-2">Chuy??n Gia S???c ?????p Ch??ng T??i</h6>
                    <h2 class="mb-5">Paris Spa & Chuy??n Gia S???c ?????p </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team position-relative overflow-hidden mb-5">
                        <img class="img-fluid" src="{{("public/frontend/img/team-1.jpg")}}" alt="">
                        <div class="position-relative text-center">
                            <div class="team-text bg-primary text-white">
                                <h5 class="text-white text-uppercase">Olivia Mia</h5>
                                <p class="m-0">Paris Spa & Chuy??n Gia S???c ?????p</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                                <h4> <a href="{{URL::to('/booking')}}"> ?????t B??y Gi???</a></h4>
                               
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
                                <p class="m-0">Paris Spa & Chuy??n Gia S???c ?????p</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <h4> <a href="{{URL::to('/booking')}}"> ?????t B??y Gi??? </a></h4>
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
                                <p class="m-0">Paris Spa & Chuy??n Gia S???c ?????p</p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <h4> <a href="{{URL::to('/booking')}}"> ?????t B??y Gi??? </a></h4>
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
                                <p class="m-0">Paris Spa & Chuy??n Gia S???c ?????p </p>
                            </div>
                            <div class="team-social bg-dark text-center">
                            <h4> <a href="{{URL::to('/booking')}}"> ?????t B??y Gi??? </a></h4>
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

</body>
  
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

