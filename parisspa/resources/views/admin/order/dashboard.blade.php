@extends('admin.layout.master')

@section('title', 'Orders')


@section('body')

<div class="kt-pagebody">

    <div class="row row-sm">
      
      <div class="col-lg-12">
        <div class="card pd-20 pd-sm-40">
       
          <h4 class="mg-b-20 mg-sm-b-30">DANH SÁCH ĐẶT HÀNG</h4>

          <div class="table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên</th>
                  <th>Email</th>
                  <td>Điện Thoại</td>
                  <td>Địa Chỉ Giao Hàng</td>
                  <th>Thanh Toán</th>
                  <th>Trạng Thái </th>
                  <th>Ngày và Giờ</th>
                  <th> Đơn Hàng</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($orders['all'] as $order)
                  <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->fullname }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ ($order->payment_method == 1) ? 'COD': 'Paypal' }}</td>
                    <td style="color: {{ ($order->status == 1) ? 'goldenrod' : (($order->status == 2) ? 'lightseagreen' : 'lightcoral') }}">
                      {{ ($order->status == 1) ? 'Đang vận chuyển': (($order->status == 2) ? 'Đã hoàn thành' : 'Đã huỷ') }}
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td><a href="/admin/orders/{{ $order->id }}">Chi Tiết</a></td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div><!-- card -->
      </div>
    </div>

</div><!-- kt-pagebody -->

@endsection