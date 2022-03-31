<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\Category;
use App\Models\Brand; 
use App\Models\Product;
use App\Models\Slider;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $data['slides'] = Slider::get();
        return view('pages.index',['data'=>$data]);
    }

    public function showCart()
    {
        return view('pages.cart');
    }

    public function showWishlist()
    {
        return view('pages.wishlist');
    }

    public function showShop()
    {
        //$categories = Category::orderBy('category_name_en','ASC')->get();
        $categories = DB::table('categories')
        ->leftJoin('sub_categories','categories.id','sub_categories.category_id')
        ->select('categories.category_name_fr','subcategory_name_fr')
        ->get();

        $data['categories'] = $categories->groupby('category_name_fr');
        //print_r($data['categories']['Clothing']);

        
        return view('pages.shop',['data'=>$data]);
    }

    public function showCheckout()
    {
        return view('pages.checkout');
    }

    public function showNewitems()
    {
        return view('pages.newitems');
    }

    public function showCollections()
    {
        return view('pages.collections');
    }

    public function showCollectionItems()
    {
        return view('pages.collection-items');
    }

    public function showBlogs()
    {
        return view('pages.blogs');
    }

    public function showBlogDetails()
    {
        return view('pages.blog-details');
    }

    public function showProductDescription()
    {
        return view('pages.product-description');
    }
}
