@extends('welcome')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="active">Thanh toán</li>
                </ol>
            </div><!--/breadcrums-->



            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p>Vui lòng điền thông tin</p>
                            <div class="form-one">
                                <form action="{{URl::to('/save-checkout-customer')}}" method="post">
                                    {{csrf_field()}}
                                    <input type="text" name="shipping_email" placeholder="Email">
                                    <input type="text" name="shipping_name" placeholder="Họ và tên">
                                    <input type="text" name="shipping_address" placeholder="Địa chỉ">
                                    <input type="text" name="shipping_phone" placeholder="Phone">
                                    <textarea  name="shipping_notes"   placeholder="Ghi chú đơn hàng" rows="5"></textarea>
                                    <input type="submit" value="Gửi" name="send_oder" class="btn btn-primary btn-sm">
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="review-payment">
                <h2>Xem lại giỏ hàng</h2>
            </div>

        </div>
    </section> <!--/#cart_items-->

@endsection
