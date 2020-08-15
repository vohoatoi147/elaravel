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
}
