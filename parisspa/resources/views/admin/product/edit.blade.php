
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Chỉnh Sửa</h6>
    <p class="mg-b-20 mg-sm-b-30">Cập Nhật Sản Phẩm</p>

    <div class="form-layout">
        <form action="{{ route('admin.product.update', $data->id_product) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mg-b-25">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Tên Sản Phẩm: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="name" placeholder="" value="{{ $data->name }}">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Danh Mục: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="id_catalog" id="id_catalog">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id_catalog }}" {{ $data->id_catalog == $category->id_catalog ?? 'selected' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Hình Ảnh: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="img" placeholder="" value="{{ $data->img }}">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Giá: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="price" placeholder="" value="{{ $data->price }}">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Gía Sale: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="pricesale" placeholder="" value="{{ $data->pricesale }}">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Số Lượng: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="number" placeholder="" value="{{ $data->number }}">
                    </div>
                </div><!-- col-4 -->
                
                <div class="col-lg-8">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">: </label>
                        <textarea rows="4" class="form-control" name="detail" placeholder="Enter your description">{!! $data->detail !!}</textarea>
                    </div>
                </div><!-- col-8 -->
            </div><!-- row -->

            <div class="form-layout-footer">
                <button class="btn btn-default mg-r-5" type="submit">Cập Nhật</button>
                <button class="btn btn-secondary">Hủy Bỏ    </button>
            </div><!-- form-layout-footer -->
        </form>
    </div><!-- form-layout -->
</div><!-- card -->