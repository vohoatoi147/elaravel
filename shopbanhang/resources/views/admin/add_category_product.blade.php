@extends('admin_layout');
@section('admin_content');
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm danh mục sản phẩm
        </header>
        <div class="panel-body">
        <?php
        $message = Session::get('message');
        if ($message){
            echo $message;
            Session::put('message',null);
        }
        ?>
            <div class="position-center">
                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên danh mục</label>
                        <input type="text" class="form-control" name="category_product_name" id="exampleInputEmail1" placeholder="Tên danh mục" data-validation="length" data-validation-length="min4" data-validation-error-msg="Nhập ít nhất 4 kí tự">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả danh mục</label>
                        <textarea style="resize: none" rows="5" class="form-control" name="category_product_desc" id="danhmuc" placeholder="Mô tả danh mục"> </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Hiển thị</label>
                        <select class="form-control input-sm m-bot15" name="category_product_status">
                            <option value="0">Hiển thị</option>
                            <option value="1">Ẩn</option>
                        </select>
                    </div>

                    <button type="submit" name="add_category_product" class="btn btn-info">Thêm  danh mục </button>
                </form>
            </div>

        </div>
    </section>

</div>

@endsection

