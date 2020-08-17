<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function login_checkout () {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.checkout.login_checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function add_customer ( Request $request){
        $data = array();
        $data['customer_name'] = $request->customer_name ;
        $data['customer_email'] = $request->customer_email ;
        $data['customer_password'] = md5($request->customer_password) ;
        $data['customer_phone'] = $request->customer_phone ;
        $customer_id = DB::table('tbl_customers')->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        return Redirect('/checkout');
    }
    public function checkout (){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.checkout.show_checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function save_checkout_customer (Request $request) {
        $data = array();
        $data['shipping_name'] = $request->shipping_name ;
        $data['shipping_email'] = $request->shipping_email ;
        $data['shipping_address'] = $request->shipping_address ;
        $data['shipping_notes'] = $request->shipping_notes ;
        $data['shipping_phone'] = $request->shipping_phone ;
        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id',$shipping_id);
        return Redirect('/payment');
    }
    public function payment () {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.checkout.payment')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function order_place (){
        $data = array();
        $data['shipping_name'] = $request->shipping_name ;
        $data['shipping_email'] = $request->shipping_email ;
        $data['shipping_address'] = $request->shipping_address ;
        $data['shipping_notes'] = $request->shipping_notes ;
        $data['shipping_phone'] = $request->shipping_phone ;
        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
    }
    public function logout_checkout () {
        Session::flush();
        return Redirect('/login-checkout');
    }
    public function login_customer ( Request $request) {
        $email = $request->email_account;
        $password = md5($request->password_account);
        $result = DB::table('tbl_customers')->where('customer_email',$email )->where('customer_password',$password)->first();
        if ($result){
            Session::put('customer_id',$result->customer_id);
            return Redirect('/checkout');
        }else{
            return Redirect('/login-checkout');
        }
    }
}
