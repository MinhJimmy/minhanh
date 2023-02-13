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

<body>
        <main  >
            <div class="container">
                <div   class="register-form">
                    <form  action="" method="post">
                     <center>   <h1>Đăng Ký Tài Khoản Mới</h1> </center>
                        <div class="input-box">

                            <input type="text" placeholder="Nhập Họ Tên">
                        </div>
                        <div class="input-box">

                            <input type="password" placeholder="Nhập Mật Khẩu">
                        </div>
                        <div class="input-box">
                            <div class="col-6">
                                <label for="ngaysinh">Ngày Sinh</label>
                                <br>
                                <input type="date" id="ngaysinh"/>
                            </div>
                            <div class="col-6">
                                <label for="gioitinh">Giới tính</label>
                                <br>
                                <select id="gioitinh">
                                    <option value="nam">Nam</option>
                                    <option value="nu">Nữ</option>
                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="input-box">
                            <span>Sở Thích</span>
                            <br>
                            <input type="checkbox" id="xemphim"> 
                            <label for="xemphim">Xem Phim</label>
                            <div class="margin_b"></div>
                            <input type="checkbox" id="nghenhac"> 
                            <label for="nghenhac">Nghe Nhạc</label>
                            <div class="margin_b"></div>
                            <input type="checkbox" id="docsach"> 
                            <label for="docsach">Chơi Game</label>
                        </div>
                        <div class="input-box">
                            <label for="gioithieu">Giới Thiệu Bản Thân</label>
                            <br>
                            <textarea id="gioithieu"></textarea>
                        </div>
                        
                        <div class="btn-box">
                        <a href="{{URL::to('/admin')}}" button   type="submit"> 
                               Đăng Ký 
                            </button>
</a>
                        </div>

             </form>

                    
                </div>
            </div>
            </a>
        </main>
        <footer>
            
        </footer>
    </body>
</html>




<style type="text/css">
    
    *{
    padding: 0px;
    margin: 0px;
    font-family: sans-serif;
    box-sizing: border-box;
}
.a{
    padding: 7.5px 15px;
    border-radius: 2px;
    background-color: #009999;
    color: #fff;
    border: none;
    outline: none
}
.container{
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    border: 1;
}
.col-6{
    float: left;
    width: 50%;
}
.margin_b{
    margin-bottom: 7.5px;
}
.clear{
    clear: both;
}
header{
    background-color: #fff;
    min-height: 70px;
    padding: 15px;
}
main{
    background-color: #FCE0A6;
    min-height: 300px;
    padding: 7.5px 15px;
}
footer{
    background-color: #FCE0A6;
    min-height: 70px;
    padding: 15px;
}
h1{
    color: #009999;
    font-size: 20px;
    margin-bottom: 30px;
}

.register-form{
    width: 100%;
    max-width: 400px;
    margin: 20px auto;
    background-color: Yellow;
    padding: 15px;
    border: 2px dotted #black;
    border-radius: 10px;
}

.input-box{
    margin-bottom: 10px;
}
.input-box input[type='text'],
.input-box input[type='password'],
.input-box input[type='date']{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    display: inline-block;
    height: 40px;
    color: black;
}
.input-box select{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    display: inline-block;
    height: 40px;
    color: #666666;
}
.input-box option{
    font-size: 16px;
}
.input-box input[type='checkbox']{
    height: 1.5em;
    width: 1.5em;
    vertical-align: middle;
    line-height: 2em;
}
.input-box textarea{
    padding: 7.5px 15px;
    width: 100%;
    border: 1px solid #cccccc;
    outline: none;
    font-size: 16px;
    min-height: 120px;
    color: #666666;
}
.btn-box{
    text-align: right;
    margin-top: 30px;
}
.btn-box a{
    padding: 7.5px 15px;
    border-radius: 4px;
    background-color: #009999;
    color: #fff;
    border: none;
    outline: none;
}
</style>

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
<!-- End Meta Pixel Code --