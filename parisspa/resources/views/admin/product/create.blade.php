
<div class="card pd-20 pd-sm-40">
    <h6 class="card-body-title">Tạo</h6>
    <p class="mg-b-20 mg-sm-b-30">Thêm Sản Phẩm</p>

    <div class="form-layout">
        <form action="{{ route('admin.product.insert') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row mg-b-25">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Tên Sản Phẩm: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="name" placeholder="">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Mục Lục: <span class="tx-danger">*</span></label>
                        <select class="form-control" name="id_catalog" id="id_catalog">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id_catalog }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Hình ảnh: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="file" name="img" placeholder="">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Giá: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="price" placeholder="">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Giá Khuyến Mại: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="pricesale" placeholder="">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">Số Lượng: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="number" placeholder="">
                    </div>
                </div><!-- col-4 -->
                
                <div class="col-lg-8">
                    <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Điền Thông Tin Sản Phẩm: </label>
                        <textarea rows="4" class="form-control" name="detail" placeholder="Nhập Thông Tin Sản Phẩm:"></textarea>
                    </div>
                </div><!-- col-8 -->
            </div><!-- row -->

            <div class="form-layout-footer">
                <button class="btn btn-default mg-r-5" type="submit">Thêm</button>
                <button class="btn btn-secondary">Hủy Bỏ</button>
            </div><!-- form-layout-footer -->
        </form>
    </div><!-- form-layout -->
</div><!-- card -->