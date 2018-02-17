<?php

namespace App\Http\Controllers;


Use App;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->where('featured', '=', 1)->get();
        $laptops = Product::orderBy('id','desc')->limit(10)->latest()->get();
        $phone = DB::table('products')->take(8)->get();
        $latest = DB::table('products')->latest()->take(8)->get();
        $banner = DB::table('products')->where('is_banner', '=', 1)->limit(3)->get();





        return view('home', compact('products' , 'laptops','phone','latest','banner'));
    }

    public function search($searchKey)
    {
        $products = App\Product::search($searchKey)->get();
        return view('search',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

}
