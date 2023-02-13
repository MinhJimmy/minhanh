@extends('admin.layout.master')

@section('title', 'Product')


@section('body')

<style>
  .element-image {
    width: 10rem;
    height: auto;
  }
  .element-image > img {
    width: 100%;
    height: 100%;
    /* object-fit: cover; */
  }
</style>

<div class="kt-pagebody">

  <div class="content-wrapper">
    <div class="content-left">
      <button class="btn btn-default btn-block mg-b-20" id="insert_category" data-href="{{ route('admin.product.create') }}" style="cursor: pointer">Thêm Sản Phẩm</button>

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

      {{-- <label class="content-left-label">Options</label>
      <ul class="nav mg-t-1-force">
      <li class="nav-item">
        <a href="" class="nav-link">
        <i class="icon ion-ios-folder-outline"></i>
        <span>...</span>
        </a>
      </li><!-- nav-item -->
      </ul> --}}
    </div><!-- content-left -->

    <div class="content-body" id="action-fetch-response">
      <table class="table table-striped mg-b-0 mg-t-20">
        <thead>
          <tr>
            <th class="wd-5p">
              {{-- <label class="ckbox mg-b-0">
                <input type="checkbox">
                <span></span>
              </label> --}}
              
            </th>
            <th>Tên</th>
            <th>Hình</th>
            <th>Giá</th>
            <th>Giá Sale</th>
            <th></th>
            <th class="hidden-xs-down">Thông Tin Sản Phẩm Kem </th>
            <th>Thời Gian</th>
            <th class="wd-5p"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products['all'] as $product)
            <tr>
              <td class="valign-middle">
                <label class="ckbox mg-b-0">
                  {{-- <input type="checkbox"><span></span> --}}
                  {{ $product->id_product }}
                </label>
              </td>
              <td>
                <span class="pd-l-3">{{ $product->name }}</span>
              </td>
              <td>
                <span class="pd-l-3 element-image">
                  <img src="public/frontend/shop/images/home/{{ $product->img }}" alt="{{ $product->name }}">
                </span>
              </td>
              <td>
                <span class="pd-l-3">{{ $product->price }}</span>
              </td>
              <td>
                <span class="pd-l-3">{{ $product->pricesale }}</span>
              </td>
              <td>
                <span class="pd-l-3">{{ $product->number }}</span>
              </td>
              <td class="hidden-xs-down" width="30%">{!! $product->detail ?? '<small><i>no description</i></small>' !!}</td>
              <td>
                <span class="pd-l-3" width="15%">{{ $product->created ?? '...' }}</span>
              </td>
              <td class="dropdown">
                <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                <div class="dropdown-menu dropdown-menu-right pd-10">
                  <nav class="nav nav-style-1 flex-column actions" data-id="{{ $product->id_product }}">
                    {{-- <a href="" class="nav-link">Info</a>
                    <a href="" class="nav-link">Download</a>
                    <a href="" class="nav-link">Rename</a>
                    <a href="" class="nav-link">Move</a>
                    <a href="" class="nav-link">Copy</a> --}}
                    <a href="#" class="nav-link" data-option="edit">Sửa</a>
                    <a href="#" class="nav-link" data-option="delete">Xóa</a>
                  </nav>
                </div><!-- dropdown-menu -->
              </td>
            </tr>
          @endforeach
        </tbody>
        
        <script>
          $(document).ready(function () {
            
            $(document).on('click', '.actions a', function (event) {
              event.preventDefault();

              var id = $(this).parent().attr('data-id'),
                option = $(this).attr('data-option');

              console.log(id, option);
              switch (option) {
                case 'edit':
                  edit_view(id);
                  break;
                case 'delete':
                  delete_category(id);
                  break;
                default:
                  break;
              }
            });

            function edit_view(id) {
              $.ajax({
                url: "admin/product/edit/" + id,
                success: function (response) {
                  $('#action-fetch-response').html(response);
                },
                error: function (data) {
                  //console.log(data.responseText);
                }
              });
              return;
            }

            function delete_category(id) {
              $.ajax({
                url: "admin/product/delete/" + id,
                success: function (response) {
                  window.location.reload();
                },
                error: function (data) {
                  //console.log(data.responseText);
                }
              });
              return;
            }

          });
        </script>

      </table>
    </div><!-- content-body -->
  </div><!-- content-wrapper -->

</div><!-- kt-pagebody -->

@endsection