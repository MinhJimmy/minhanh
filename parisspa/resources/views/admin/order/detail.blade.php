@extends('admin.layout.master')

@section('title', 'Orders')


@section('body')

<style>
  .element-image {
    width: 2rem;
    /* height: auto; */
  }
  .element-image > img {
    width: 100%;
    height: 100%;
    /* object-fit: cover; */
  }
</style>

<div class="kt-pagebody">

    <div class="row row-sm">
      <div class="col-lg-1">
        @if ($status == 1)
        <form action="admin/orders/update/{{ $id }}" method="post">
          @csrf
          <button class="btn btn-success btn-block mg-b-20" id="confirm" style="cursor: pointer" name="submit" type="submit" value="confirm">Hoàn thành</button>
          <button class="btn btn-danger btn-block mg-b-20" id="cancel" style="cursor: pointer" name="submit" type="submit" value="cancel">Huỷ bỏ</button>
        </form>
        @endif
        @if ($status == 0)
          <button class="btn btn-danger btn-block mg-b-20" disabled>Đã Huỷ</button>
        @endif
        @if ($status == 2)
          <button class="btn btn-success btn-block mg-b-20" disabled>Đã Hoàn Thành</button>
        @endif
  
        <script>
          $(document).ready(function () {
            
            $(document).on('click', '#insert_category', function (event) {
              event.preventDefault();
  
              var href = $(this).attr('data-href');
              create_view(href);
            });
  
            function create_view(href)
            {
              $.ajax({
                // type: "method",
                url: href,
                // data: "data",
                // dataType: "dataType",
                success: function (response) {
                  $('#action-fetch-response').html(response);
                },
                error: function (data) {
                }
              });
              return;
            }
  
          });
        </script>
      </div><!-- content-left -->
      <div class="col-lg-11">
        <div class="card pd-20 pd-sm-40">
          <h4 >CHI TIẾT ĐƠN HÀNG</h4>
          <h5 class="mg-b-20 mg-sm-b-30">Danh sách số thứ tự {{ $id }}</h5>

          <div class="table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>STT</th>
                  {{-- <th>Hình ảnh</th> --}}
                  <th>Thông Tin Sản Phẩm</th>
                  <th>Giá Tiền</th>
                  <th>Số Lượng</th>
                  <th>Tổng Cộng</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $total = 0;
                @endphp
                @foreach ($items as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    {{-- <td>
                      <span class="pd-l-3 element-image">
                        <img src="public/frontend/shop/images/home/{{ $item->img }}" alt="{{ $item->name }}">
                      </span>
                    </td> --}}
                    <td>{{ $item->name }}</td>
                    <td>${{ $item->pricesale }}</td>
                    <td>{{ $item->product_qty }}</td>
                    <td>${{ $item->pricesale * $item->product_qty }}</td>
                    @php
                      $total += $item->pricesale * $item->product_qty;
                    @endphp
                  </tr>
                @endforeach

              </tbody>
              <tfoot>
                <th colspan="2"><div style="text-align: right">Tổng Tiền</div></th>
                <th colspan="3"><div style="text-align: left">${{ $total }}</div></th>
              </tfoot>
            </table>
          </div>
        </div><!-- card -->
      </div>
    </div>

</div><!-- kt-pagebody -->

@endsection