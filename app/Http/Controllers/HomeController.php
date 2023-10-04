<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Lunar\Models\Brand;
use Lunar\Models\Product;

class HomeController extends Controller
{
    protected $brands;

    public function __construct()
    {
        $brands = Brand::all();
        View::share('brands', $brands);
    }

    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function verification()
    {
        return view('verification');
    }

    public function brand(Request $request, $id)
    {
        $brand = Brand::where('id', $id)->firstOrFail();
        return view('brand', compact('brand'));
    }

    public function product(Request $request, $id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        return view('product', compact('product'));
    }
}
