@extends('layouts.app')

@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 pb-5 pb-lg-0">
                    <img class="img-fluid w-100" src="{{ 'public/frontend/img/service-3.jpg' }}" alt="">
                </div>
                <div class="col-lg-6">
                   <center> <h1 class="mb-4">Đặt Lịch Thành Công!</h1> </center>
                    <h5 class="pl-4 border-left border-primary">Cảm ơn bạn đã tin tưởng sử dụng dịch vụ tại Paris Spa!
Paris Spa sẽ liên hệ với bạn để xác nhận đặt chỗ sớm nhất có thể và Xin Cảm Ơn!</5>
                    <a href="{{ URL::to('/') }}" class="btn btn-primary d-none d-lg-block">Trở Về</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection