@extends('welcome')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{URL::to('/')}}">Trang chủ</a></li>
                    <li class="active">Giỏ hàng của bạn</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <?php
                $content =  Cart::content();
                ?>
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Hình ảnh</td>
                        <td class="description">Sản phẩm</td>
                        <td class="price">Giá</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($content as $key => $v_content)
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}" alt="" width="50px"/></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_content->name}}</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($v_content->price).' '.'VND'}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{URL::to('/update-cart-quantity')}}" method="post">
                                    {{csrf_field()}}

                                <input class="cart_quantity_input" type="text" name="cart_quantity" value="{{$v_content->qty}}" size="2">

                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
                                <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                <?php
                                $subtotal = $v_content->price * $v_content->qty;
                                echo number_format($subtotal)
                                ?>
                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
    <section id="do_action">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Tổng <span>{{Cart::total().' '.'VND'}}</span></li>
                            <li>Thuế<span>{{Cart::tax().' '.'VND'}}</span></li>
                            <li>Phí vận chuyển : <span>Free</span></li>
                            <li>Thành tiền<span>{{Cart::total().' '.'VND'}}</span></li>
                        </ul>
                        <a class="btn btn-default check_out" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#do_action-->
@endsection
