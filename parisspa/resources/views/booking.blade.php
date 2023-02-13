@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ 'public/frontend/img/service-5.jpg' }}"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="hours-text bg-light p-4 p-lg-5 my-lg-5">
                   <center>     <h1 class="mb-4">Đặt Lịch Làm Đẹp</h1> </center>
                        <form method="POST" action="{{Route('bookingStore')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label for="phone">Số Điện Thoại</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent p-4"
                                            placeholder="Số Điện Thoại" required="required" id="phone" name="phone"
                                            value="{{ $phone }}" />
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="name">Họ Và Tên</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent p-4"
                                            placeholder="Họ Và Tên" required="required" id="name" name="name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label for="room">Chi Nhánh</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <div class="room" id="room" data-target-input="nearest">
                                            <select class="custom-select bg-transparent px-4" style="height: 47px;"
                                                id="room" name="room" required>
                                                <option selected disabled value="">Vui lòng chọn chi nhánh</option>
                                                @foreach ($allRoom as $item)
                                                    <option value="{{ $item->id_room }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label for="time">Chọn ngày</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <div class="time" id="" data-target-input="nearest">
                                            <select  class="custom-select bg-transparent px-4" style="height: 47px;"
                                                    id="day" name="day" required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label for="time">Chọn giờ</label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <div class="time" id="" data-target-input="nearest">
                                            <select  class="custom-select bg-transparent px-4" style="height: 47px;"
                                                     id="time" name="time" required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

                            <script>
                               $(document).ready(function (){
                                   var today = new Date();
                                   var date_now = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();

                                   const render_list_day = () => {
                                       $.ajax({
                                           type : 'GET',
                                           url : '{!! Route('list-day')!!}',
                                           success:function (data) {
                                               console.log(data);
                                               let content = '';
                                               data.map((item ,index) => {
                                                   content += `<option value="${item.value}"> ${item.date_text} </option>`;
                                               })
                                               $('#day').html(content)
                                           },
                                           error:function(error){
                                               console.log(error);
                                           }
                                       })
                                   }
                                   render_list_day()
                                   const render_list_time = (day) => {
                                       $.ajax({
                                           type : 'GET',
                                           url : '{!! Route('list-time')!!}',
                                           data : {"day" : day},
                                           success:function (data) {
                                               console.log(data);
                                               let content = '';
                                               data.map((item ,index) => {
                                                       if(item.select == false){
                                                           content +=
                                                               `<option disabled value="${item.hour}:${item.minute}:00"> ${item.hour}:${item.minute} </option>`;
                                                       }else {
                                                           content +=  `<option  value="${item.hour}:${item.minute}:00"> ${item.hour}:${item.minute} </option>`;
                                                       }
                                               })
                                               $('#time').html(content)
                                           },
                                           error:function(error){
                                               console.log(error);
                                           }
                                       })
                                   }
                                   render_list_time(date_now)

                                   $('#day').change(function () {
                                       render_list_time($(this).val())
                                   })

                               })
                          </script>
                            <style>
                                option:disabled {
                                    background: #e8e8e8;
                                }
                            </style>

                            <div class="form-row">
                                <div class="col-sm-3">
                                    <label for="spa"> Dịch Vụ </label>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <select class="custom-select bg-transparent px-4" style="height: 47px;"
                                            id="spa" name="spa" required>
                                            <option selected disabled value="">Vui lòng chọn dịch vụ</option>
                                            @foreach ($allSpa as $item)
                                                <option value="{{ $item->id_spa }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <p><em>Điền và kiểm tra kỹ thông tin giúp Spa nhé khách yêu ơi !!</em></p>

                                    <button class="btn btn-primary btn-block" type="submit" style="height: 47px;">Đặt Ngay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--
======= NOTE =========
# 12/11/2022
- DB thiếu trường "ngày đặt lịch" => thêm giúp 1 trường date vào table book để khách có thể chọn ngày đến
- DB dư trường "id_user" => Khách không cần đăng nhập để đặt lịch nên ko cần id_user
- Trong bảng "book" thì "status" là gì? => liệt kê các rule chỗ này cho từng trường hợp
- Trong bảng "book" thì "code" là gì? => liệt kê các rule chỗ này cho từng trường hợp

--}}
