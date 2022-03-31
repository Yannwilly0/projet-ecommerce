<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
//use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function showCategory()
    {
        return view('admin.category.category');
    }

    // public function addCategory(Request $request){

    //     $validateData = $request->validate([
    //    'category_name' => 'required|unique:categories|max:255',
    //     ]);

    //     $category = new Category();
    //     $category->category_name=$request->category_name;
    //     $category->save();

    //     $notification=array(
    //         'message'=>'Category Added Successfully',
    //         'alert-type'=>'success'
    //     );

    //     return Redirect()->back()->with($notification);
    // }

    public function showSubcategory()
    {
        return view('admin.category.subcategory');
    }

    public function showBrand()
    {
        return view('admin.category.brand');
    }
}
