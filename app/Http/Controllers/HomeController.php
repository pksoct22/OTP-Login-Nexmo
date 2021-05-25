<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductManagement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $status = "Pending";
        $productStatus = ProductManagement::where('status',$status)->get();
        $customerDetails = Customer::orderBy('customer_id', 'desc')->take(5)->get();
        $productDetails = Product::orderBy('product_id', 'desc')->take(5)->get();
        return view('home')->with('productDetails',$productDetails)->with('customerDetails',$customerDetails)->with('productStatus',$productStatus);
    }

}
