<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Đăng Ký Paris Spa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/csls/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/csls/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/csls/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/csls/hamburgers.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/csls/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/csls/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('public/frontend/csls/main.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="{{asset("public/frontend/img/logo_1.jpg")}}" rel="icon">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{('public/frontend/img/team.jpg')}}" alt="IMG">
                </div>
                <!--=====TIÊU ĐỀ======-->
                <form class="login100-form validate-form" action="{{ route('doRegister') }}" method="POST">
                    @csrf
                    <span class="login100-form-title">
                        <b>ĐĂNG KÝ</b>
                    </span>
                    <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                    <form action="">
                     
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Họ Và Tên"
                                id="fullname" name="fullname">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Tài Khoản"
                                id="username" name="username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Email"
                                id="email" name="email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='fa fa-envelope-square'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input autocomplete="off" class="input100" type="password" placeholder="Mật Khẩu"
                                name="password" id="password-field">
                            <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-key'></i>
                            </span>
                        </div>

                        <!--=====ĐĂNG NHẬP======-->
                        <div class="container-login100-form-btn">
                            <input type="submit" value="ĐĂNG KÝ" id="submit" />
                        </div>
                        <!--=====LINK TÌM MẬT KHẨU======-->
                        <div class="text-right p-t-12">
                            <a class="txt2" href="{{URL::to('/login')}}">
                             Quay Lại Đăng Nhập
                            </a>
                        </div>
                    </form>
                    <!--=====FOOTER======-->
                    <div class="text-center p-t-70 txt2">
                        Paris Spa.Online <i class="far fa-copyright" aria-hidden="true"></i>
                        <script type="text/javascript">document.write(new Date().getFullYear());</script> <a
                            class="txt2" href="https://www.facebook.com/truongvo.vd1503/">  </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Javascript-->
    <script src="{{('public/frontend/js1/main.js')}}"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="{{('public/frontend/js1/jquery-3.2.1.min.js')}}"></script>
    <script src="{{('public/frontend/js1/popper.js')}}"></script>
    <script src="{{('public/frontend/js1/bootstrap.min.js')}}"></script>
    <script src="{{('public/frontend/js1/select2.min.js')}}"></script>
    <script type="text/javascript">
        //show - hide mật khẩu
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text"
            } else {
                x.type = "password";
            }
        }
        $(".click-eye").click(function () {
            $(this).toggleClass("bx-show bx-hide");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
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
</body>

</html>