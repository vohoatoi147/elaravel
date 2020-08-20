<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Mail;
use App\Http\Requests;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function send_mail (Request $request){
        //send mail
        $to_name = "Chonhagiau";
        $to_email = "vohoatoi123@gmail.com";//send to this email

        $data = array("name"=>"Chợ nhà giàu","body"=>'Xác nhận đơn hàng'); //body of mail.blade.php
                Mail::send('pages.send_mail',$data,function($message) use ($to_name,$to_email){
                    $message->to($to_email)->subject('hello mấy cưng');//send this mail with subject
                    $message->from($to_email,$to_name);//send from this mail
                });
        return Redirect::to('')->with('message','');

    }
    public function index(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
//        $all_product = DB::table('tbl_product')
//            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
//            ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
//            ->orderby('tbl_product.product_id','desc')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(12)->get();
        return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    }
    public function tim_kiem (Request $request) {
        $keywords = $request->keywords_submit;
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();
        return view('pages.sanpham.tim_kiem')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);

    }
}
