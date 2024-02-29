<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function faq(){
        return view('faq');
    }
    public function pricing(){
        return view('pricing');
    }
    public function product_detail(){
        return view('product-detail');
    }
    public function products(){
        return view('products');
    }
    public function shipping(){
        return view('shippincal');
    }
    public function signup(){
        return view('sign-up');
    }
    public function login(){
        return view('sign-in');
    }
    public function userdashboard()
{
    $warehouses = Warehouse::all();
    $products = Product::all();

    $notifications = DB::table('user_notifications')
        ->where('self', 1)
        ->get();

    return view('userdashboard', ['warehouses' => $warehouses, 'products' => $products, 'notifications' => $notifications]);
}

    public function editproduct($product_id)
    {
    $product = Product::find($product_id);


    return view('changeproductstatus', ['product' => $product]);
    }
    public function warehousedashboard()
    {
    $warehouses = Warehouse::all();
    $products = Product::all();
    $notifications = DB::table('user_notifications')
    ->where('self', 0)
    ->get();

return view('warehousedashboard', ['warehouses' => $warehouses, 'products' => $products, 'notifications' => $notifications]);
    }
    public function purchasereport(){
        return view('purchasereport');
    }
    public function userprofile(){
        return view('userprofile');
    }

}
