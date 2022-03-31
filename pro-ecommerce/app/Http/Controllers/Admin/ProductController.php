<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Brand;
use App\Models\Product;
use App\Models\MultiImg;
use Carbon\Carbon;
use Image;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexProduct()
    {
        $product = Product::latest()->get();
		return view('admin.product.all',compact('product'));
    }

    public function stockProduct()
    {
        $product = Product::latest()->get();
		return view('admin.product.stock',compact('product'));
    }

    /**
     * For Showing Subcategory with ajax
     *
     * @return \Illuminate\Http\Response
     */
    public function getSubCategory($category_id){
        $cat = DB::table('subcategories')->where('category_id',$category_id)->get();
        return json_encode($cat);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct()
    {
        $category = Category::latest()->get();
		$brand = Brand::latest()->get();

		return view('admin.product.create',compact('category','brand'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeProduct(Request $request)
    {

        $image = $request->file('product_thumbnail');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(700,981)->save('media/product/thumbnail/'.$name_gen);
    	$save_url = 'media/product/thumbnail/'.$name_gen;

        $image2 = $request->file('hover_thumbnail');
    	$name_gen2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
    	Image::make($image2)->resize(700,981)->save('media/product/thumbnail/'.$name_gen2);
    	$save_url2 = 'media/product/thumbnail/'.$name_gen2;

        $product_id = Product::insertGetId([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            //'subsubcategory_id' => $request->subsubcategory_id,
            'subsubcategory_id' =>1,
            'product_name_en' => $request->product_name_en,
            'product_name_fr' => $request->product_name_fr,
            'product_slug_en' =>  strtolower(str_replace(' ', '-', $request->product_name_en)),
            'product_slug_fr' => strtolower(str_replace(' ', '-', $request->product_name_fr)),
            'product_code' => $request->product_code,

            'product_qty' => $request->product_qty,
            'product_tags_en' => $request->product_tags_en,
            'product_tags_fr' => $request->product_tags_fr,
            'product_size_en' => $request->product_size_en,
            'product_size_fr' => $request->product_size_fr,
            'product_color_en' => $request->product_color_en,
            'product_color_fr' => $request->product_color_fr,

            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp_fr' => $request->short_descp_fr,
            'short_descp_en' => $request->short_descp_en,
            'product_detail_fr' => $request->product_detail_fr,
            'product_detail_en' => $request->product_detail_en,

            //'video_link' => $request->video_link,
            'video_link' => 'link',

            'hot_deal' => $request->hot_deal,
            'best_rated' => $request->best_rated,
            'new_collection' => $request->new_collection,
           // 'hot_new' => $request->hot_new,
            'deal_of_week' => $request->deal_of_week,
            'best_seller' => $request->best_seller,
            'electronics' => $request->electronics,
            'jewellery' => $request->jewellery,

            'product_thumbnail' => $save_url,
           // 'hover_thumbnail' => $save_url2,

            'status' => 1,
            'created_at' => Carbon::now(),

        ]);

        // Multiple Image Upload Start

      $images = $request->file('multi_img');
      foreach ($images as $img) {
      	$make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
    	Image::make($img)->resize(700,981)->save('media/product/multi-image/'.$make_name);
    	$uploadPath = 'media/product/multi-image/'.$make_name;

    	MultiImg::insert([

    		'product_id' => $product_id,
    		'photo_name' => $uploadPath,
    		'created_at' => Carbon::now(),

    	]);

      }

      // End of Multiple Image Upload Start

       $notification = array(
			'message' => 'Product Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.product')->with($notification);

    }

    public function ManageProduct(){

		$products = Product::latest()->get();
		return view('backend.product.product_view',compact('products'));
	}


	public function EditProduct($id){

		$multiImgs = MultiImg::where('product_id',$id)->get();

		$category = Category::latest()->get();
		$brand = Brand::latest()->get();
		$subcategory = SubCategory::latest()->get();
		$subsubcategory = SubSubCategory::latest()->get();
		$product = Product::findOrFail($id);
		return view('admin.product.edit',compact('category','brand','subcategory','subsubcategory','product','multiImgs'));

	}


	public function productDataUpdate(Request $request){

		$product_id = $request->id;

        Product::findOrFail($product_id)->update([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'subsubcategory_id' => $request->subsubcategory_id,
            'product_name_en' => $request->product_name_en,
            'product_name_fr' => $request->product_name_fr,
            'product_slug_en' =>  strtolower(str_replace(' ', '-', $request->product_name_en)),
            'product_slug_fr' => strtolower(str_replace(' ', '-', $request->product_name_fr)),
            'product_code' => $request->product_code,

            'product_qty' => $request->product_qty,
            'product_tags_en' => $request->product_tags_en,
            'product_tags_fr' => $request->product_tags_fr,
            'product_size_en' => $request->product_size_en,
            'product_size_fr' => $request->product_size_fr,
            'product_color_en' => $request->product_color_en,
            'product_color_fr' => $request->product_color_fr,

            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp_fr' => $request->short_descp_fr,
            'short_descp_en' => $request->short_descp_en,
            'product_detail_fr' => $request->product_detail_fr,
            'product_detail_en' => $request->product_detail_en,

            'hot_deal' => $request->hot_deal,
            'best_rated' => $request->best_rated,
            'new_collection' => $request->new_collection,
            'hot_new' => $request->hot_new,
            'deal_of_week' => $request->deal_of_week,
            'best_seller' => $request->best_seller,
            'electronics' => $request->electronics,
            'jewellery' => $request->jewellery,

            'status' => 1,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
			'message' => 'Product Updated Without Image Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.product')->with($notification);


	} // end method


    // Multiple Image Update
	public function multiImageUpdate(Request $request) {
		$imgs = $request->multi_img;

		foreach ($imgs as $id => $img) {
            $imgDel = MultiImg::findOrFail($id);
            unlink($imgDel->photo_name);

            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(700,981)->save('media/product/multi-image/'.$make_name);
            $uploadPath = 'media/product/multi-image/'.$make_name;

            MultiImg::where('id',$id)->update([
                'photo_name' => $uploadPath,
                'updated_at' => Carbon::now(),

            ]);

        } // end foreach

       $notification = array(
			'message' => 'Product Image Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

	} // end mehtod

    // Product Main Thumbnail Update //
    public function thumbnailImageUpdate(Request $request) {
        $pro_id = $request->id;
        $oldImage = $request->old_img;
        unlink($oldImage);

        $image = $request->file('product_thumbnail');
    	$name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    	Image::make($image)->resize(700,981)->save('media/product/thumbnail/'.$name_gen);
    	$save_url = 'media/product/thumbnail/'.$name_gen;

        $image2 = $request->file('hover_thumbnail');
    	$name_gen2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
    	Image::make($image2)->resize(700,981)->save('media/product/thumbnail/'.$name_gen2);
    	$save_url2 = 'media/product/thumbnail/'.$name_gen2;

    	Product::findOrFail($pro_id)->update([
    		'product_thumbnail' => $save_url,
    		'hover_thumbnail' => $save_url2,
    		'updated_at' => Carbon::now(),

    	]);

         $notification = array(
			'message' => 'Product Image Thumbnail Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    } // end method


    // Multi Image Delete //
    public function multiImageDelete($id) {

     	$oldimg = MultiImg::findOrFail($id);
     	unlink($oldimg->photo_name);
     	MultiImg::findOrFail($id)->delete();

     	$notification = array(
			'message' => 'Product Image Deleted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method

    public function productInactive($id) {

     	Product::findOrFail($id)->update(['status' => 1]);

     	$notification = array(
			'message' => 'Product Active',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    }

    public function productActive($id) {

        Product::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'Product Inactive',
            'alert-type' => 'danger'
        );

        return redirect()->back()->with($notification);

     }

    public function productDelete($id) {

        $product = Product::findOrFail($id);
        unlink($product->product_thumbnail);
        Product::findOrFail($id)->delete();

        $images = MultiImg::where('product_id',$id)->get();
        foreach ($images as $img) {
            unlink($img->photo_name);
            MultiImg::where('product_id',$id)->delete();
        }

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// end method

// product Stock
public function productStock() {

    $product = Product::latest()->get();

    return view('admin.product.product_stock',compact('product'));

    }
}
