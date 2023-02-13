@extends('admin.layout.master')

@section('title', 'Bookings')


@section('body')

<div class="kt-pagebody">

    <div class="row row-sm">
      
      <div class="col-lg-12">
        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Danh Sách Đặt Lịch</h6>
          <p class="mg-b-20 mg-sm-b-30">Danh Sách Đặt Chỗ</p>

          <div class="table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Họ Và Tên</th>
                  <th>Điện Thoại</th>
                  <th>  Dịch Vụ Làm Đẹp Spa </th>
                  <th></th>
                  <th>Chi Nhánh</th>
                  <th>Ngày Đặt</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

                @foreach ($bookings as $item)
                {{-- @php
                dd($item)
                @endphp --}}
                  <tr>
                    <td>{{ $item->id_book }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->spa?->name }}</td>
                    <td>{{ $item->date_time?->name }}<br/>{{ $item->date_time?->date_time }}</td>
                    <td>{{ $item->room?->name }}</td>
                    <td>{{ $item->updated }}</td>
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