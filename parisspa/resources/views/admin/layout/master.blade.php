<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{{ asset('/') }}">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>@yield('title') | Admin - Parisspa</title>

    <!-- vendor css -->
    <link href="resources/server/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="resources/server/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="resources/server/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="resources/server/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="resources/server/css/katniss.css">
    <link href="{{asset("public/frontend/img/logo_1.jpg")}}" rel="icon">
    <script src="resources/server/lib/jquery/jquery.js"></script>
  </head>

  <body>

    <!-- ##### SIDEBAR LOGO ##### -->
    <div class="kt-sideleft-header">
      <div class="kt-logo"><a href="{{URL::to('/admin')}}">Parisspa</a></div>
      <div id="ktDate" class="kt-date-today"></div>
      <div class="input-group kt-input-search">
        <input type="text" class="form-control" placeholder="Tìm Kiếm...">
        <span class="input-group-btn mg-0">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
      </div><!-- input-group -->
    </div><!-- kt-sideleft-header -->

    <!-- ##### SIDEBAR MENU ##### -->
    <div class="kt-sideleft">
      <label class="kt-sidebar-label">PARISSPA.ONLINE</label>
      <ul class="nav kt-sideleft-menu">
        <li class="nav-item">
          <a href="{{URL::to('/admin')}}" class="nav-link {{ (request()->segment(2) == '') ? 'active' : '' }}">
            <i class="icon ion-ios-home-outline"></i>
            <span>Trang Chủ</span>
          </a>
        </li><!-- nav-item -->
        {{-- <li class="nav-item">
          <a href="" class="nav-link with-sub {{ (request()->segment(2) == 'categories') ? 'active' : '' }}">
            <i class="icon ion-ios-list-outline"></i>
            <span>Categories</span>
          </a>
          <ul class="nav-sub" style="{{ (request()->segment(2) == 'categories') ? 'display: block;' : '' }}">
            <li class="nav-item"><a href="./admin/categories" class="nav-link {{ (request()->segment(2) == 'categories' && request()->segment(3) == '') ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="./admin/categories/view" class="nav-link {{ (request()->segment(2) == 'categories' && request()->segment(3) == 'view') ? 'active' : '' }}">View</a></li>
          </ul>
        </li><!-- nav-item --> --}}
        <li class="nav-item">
          <a href="./admin/product" class="nav-link {{ (request()->segment(2) == 'product') ? 'active' : '' }}">
            <i class="icon ion-ios-filing-outline"></i>
            <span>Quản Lý Sản Phẩm</span>
          </a>
          {{-- <ul class="nav-sub" style="{{ (request()->segment(2) == 'product') ? 'display: block;' : '' }}">
            <li class="nav-item"><a href="./admin/product" class="nav-link {{ (request()->segment(2) == 'product' && request()->segment(3) == '') ? 'active' : '' }}">Dashboard</a></li>
            <li class="nav-item"><a href="./admin/product/view" class="nav-link {{ (request()->segment(2) == 'product' && request()->segment(3) == 'view') ? 'active' : '' }}">View</a></li>
            <li class="nav-item"><a href="./admin/product/comments" class="nav-link {{ (request()->segment(2) == 'product' && request()->segment(3) == 'comments') ? 'active' : '' }}">Comments</a></li>
          </ul> --}}
        </li><!-- nav-item -->
        <li class="nav-item">
          <a href="./admin/orders" class="nav-link {{ (request()->segment(2) == 'orders') ? 'active' : '' }}">
            <i class="icon ion-ios-briefcase-outline"></i>
            <span>Quản Lý Đơn Hàng</span>
          </a>
        </li><!-- nav-item -->
      
        <li class="nav-item">
          <a href="./admin/bookings" class="nav-link {{ (request()->segment(2) == 'bookings') ? 'active' : '' }}">
            <i class="icon ion-ios-list-outline"></i>
            <span>Quản Lý Đặt Lịch</span>
          </a>
        </li><!-- nav-item -->
      </ul>
    </div><!-- kt-sideleft -->
  
    <!-- ##### HEAD PANEL ##### -->
    <div class="kt-headpanel">
      <div class="kt-headpanel-left">
        <a id="naviconMenu" href="" class="kt-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconMenuMobile" href="" class="kt-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
      </div><!-- kt-headpanel-left -->

      <div class="kt-headpanel-right">
        <div class="dropdown dropdown-notification">
          <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu wd-300 pd-0-force">
            <div class="dropdown-menu-header">
              <label>Notifications</label>
              <a href="">Mark All as Read</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="resources/img/img8.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                    <span class="tx-12">October 03, 2017 8:45am</span>
                  </div>
                </div><!-- media -->
              </a>
              <!-- loop ends here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="resources/img/img9.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Mellisa Brown</strong> appreciated your work <strong class="tx-medium">The Social Network</strong></p>
                    <span class="tx-12">October 02, 2017 12:44am</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="resources/img/img10.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0">20+ new items added are for sale in your <strong class="tx-medium">Sale Group</strong></p>
                    <span class="tx-12">October 01, 2017 10:20pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="resources/img/img5.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium">Ronnie Mara</strong></p>
                    <span class="tx-12">October 01, 2017 6:08pm</span>
                  </div>
                </div><!-- media -->
              </a>
              <div class="media-list-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <img src="resources/img/img3.jpg" class="wd-32 rounded-circle" alt="">
            <span class="logged-name"><span class="hidden-xs-down">{{ $_SESSION['user']['username'] }}</span> <i class="fa fa-angle-down mg-l-3"></i></span>
          </a>
          <div class="dropdown-menu wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href="{{URL::to('/register_2')}}"><i class="icon ion-ios-person-outline"></i>Hồ Sơ</a></li>
              <li><a href="{{URL::to('/register_2')}}"><i class="icon ion-ios-gear-outline"></i> Cài Đặt</a></li>
              <li><a href="{{URL::to('/acne_cream')}}"><i class="icon ion-power"></i> Đăng Xuất</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- kt-headpanel-right -->
    </div><!-- kt-headpanel -->
    <div class="kt-breadcrumb">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="./admin">Parisspa</a>
        @if (request()->segment(3) != '')
          <a class="breadcrumb-item active" href="./admin/{{ request()->segment(2) }}">@yield('title')</a>
          <span class="breadcrumb-item active">{{ ucfirst(request()->segment(3)) }}</span>
        @else
          <span class="breadcrumb-item active">@yield('title')</span>
        @endif
      </nav>
    </div><!-- kt-breadcrumb -->

    <!-- ##### MAIN PANEL ##### -->
    <div class="kt-mainpanel">
      <div class="kt-pagetitle">
        <h5>@yield('title'){{ (request()->segment(3) != '') ? ' - ' . request()->segment(3) : '' }}</h5>
      </div><!-- kt-pagetitle -->

{{-- Body --}}
@yield('body')
      
      <div class="kt-footer">
        
      </div><!-- kt-footer -->
    </div><!-- kt-mainpanel -->

    <script src="resources/server/lib/popper.js/popper.js"></script>
    <script src="resources/server/lib/bootstrap/bootstrap.js"></script>
    <script src="resources/server/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="resources/server/lib/moment/moment.js"></script>
    <script src="resources/server/lib/d3/d3.js"></script>
    <script src="resources/server/lib/rickshaw/rickshaw.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
    <script src="resources/server/lib/gmaps/gmaps.js"></script>
    <script src="resources/server/lib/chart.js/Chart.js"></script>

    <script src="resources/server/js/katniss.js"></script>
    <script src="resources/server/js/ResizeSensor.js"></script>
    <script src="resources/server/js/dashboard.js"></script>
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
</html>
