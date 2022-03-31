<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Subcategory;
use App\Models\HomeCategory;
use App\Models\SubSubcategory;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Image;

class CategoryController extends Controller
{
    public function imagesAccueil()
    {
        $category = Category::latest()->get();
        //return view('admin.images-accueil', compact('category'));
        return view('admin.images_accueil', compact('category'));
    }

    public function showCategory()
    {
        $category = Category::latest()->get();
        return view('admin.category.category', compact('category'));
    }

    public function storeCategory(Request $request){

        $request->validate([
    		'category_name_en' => 'required',
    		'category_name_fr' => 'required',
    		'category_icon' => 'required',
    	],[
    		'category_name_en.required' => 'Input Category English Name',
    		'category_name_fr.required' => 'Input Category French Name',
    	]);

        Category::insert([
            'category_name_en' => $request->category_name_en,
            'category_name_fr' => $request->category_name_fr,
            'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
            'category_slug_fr' => str_replace(' ', '-',$request->category_name_fr),
            'category_icon' => $request->category_icon,

        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

		return redirect()->back()->with($notification);
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.category', compact('category'));
    }


    public function updateCategory(Request $request, $id)
    {
        Category::findOrFail($id)->update([
            'category_name_en' => $request->category_name_en,
            'category_name_fr' => $request->category_name_fr,
            'category_slug_en' => strtolower(str_replace(' ', '-',$request->category_name_en)),
            'category_slug_fr' => str_replace(' ', '-',$request->category_name_fr),
            'category_icon' => $request->category_icon,

        ]);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);

    }

    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Category Deleted Successfully',
            'alert-type'=>'danger'
             );
           return Redirect()->back()->with($notification);
    }

    /*-----------------------------------------------------------------*/
    // Brand
    public function showBrand()
    {
        // $brand = Brand::all();
        $brand = Brand::latest()->get();
        return view('admin.category.brand',compact('brand'));
    }

    public function storeBrand(Request $request){

        $request->validate(
            [
                'brand_name_en' => 'required',
                'brand_name_fr' => 'required',
                'brand_image' => 'required',
            ],
            [
                'brand_name_en.required' => 'Customize message',
            ]);
        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(143,73)->save('media/brand/'.$name_gen);
        $save_url = 'media/brand/'.$name_gen;

        Brand::insert([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_fr' => $request->brand_name_fr,
            'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
            'brand_slug_fr' => str_replace(' ', '-',$request->brand_name_fr),
            'brand_image' => $save_url,
        ]);

        $notification=array(
            'message'=>'Brand Successfully Inserted',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    public function editBrand($id){
        $brand = Brand::findOrFail($id);
        return view('admin.category.edit_brand',compact('brand'));

    }

    public function updateBrand(Request $request){
        $brand_id = $request->id;
    	$old_image = $request->old_image;

    	if ($request->file('brand_image')) {

            unlink($old_image);
            $image = $request->file('brand_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(143,73)->save('media/brand/'.$name_gen);
            $save_url = 'media/brand/'.$name_gen;

            Brand::findOrFail($brand_id)->update([
                'brand_name_en' => $request->brand_name_en,
                'brand_name_fr' => $request->brand_name_fr,
                'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
                'brand_slug_fr' => str_replace(' ', '-',$request->brand_name_fr),
                'brand_image' => $save_url,

                ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);

            }

            else{

            Brand::findOrFail($brand_id)->update([
            'brand_name_en' => $request->brand_name_en,
            'brand_name_fr' => $request->brand_name_fr,
            'brand_slug_en' => strtolower(str_replace(' ', '-',$request->brand_name_en)),
            'brand_slug_fr' => str_replace(' ', '-',$request->brand_name_fr),


            ]);

            $notification = array(
                'message' => 'Brand Updated Successfully',
                'alert-type' => 'info'
            );

            return redirect()->back()->with($notification);
        }
    }

    public function destroyBrand($id) {

        $brand = Brand::findOrFail($id);
    	$image = $brand->brand_image;
    	unlink($image);

    	Brand::findOrFail($id)->delete();

        $notification=array(
            'message'=>'Brand Deleted Successfully',
            'alert-type'=>'danger'
        );
        return Redirect()->back()->with($notification);
    }

    /*-----------------------------------------------------------------*/

    //  SubCategory
    public function showSubcategory()
    {
        $category = Category::orderBy('category_name_fr','ASC')->get();
    	$subcategory = SubCategory::latest()->get();
    	return view('admin.category.subcategory',compact('subcategory','category'));
    }

    public function storeSubcategory(Request $request){

        $request->validate([
    		'category_id' => 'required',
    		'subcategory_name_en' => 'required',
    		'subcategory_name_fr' => 'required',
    	],[
    		'category_id.required' => 'Please select Any option',
    		'subcategory_name_en.required' => 'Input SubCategory English Name',
    	]);

	   SubCategory::insert([
		'category_id' => $request->category_id,
		'subcategory_name_en' => $request->subcategory_name_en,
		'subcategory_name_fr' => $request->subcategory_name_fr,
		'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
		'subcategory_slug_fr' => str_replace(' ', '-',$request->subcategory_name_fr),


    	]);

	    $notification = array(
			'message' => 'SubCategory Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
    }

    public function editSubcategory($id)
    {
        $categories = Category::orderBy('category_name_fr','ASC')->get();
    	$subcategory = SubCategory::findOrFail($id);
        return view('admin.category.subcategory', compact('category', 'subcategory'));
    }


    public function updateSubcategory(Request $request)
    {
        $subcat_id = $request->id;

    	 SubCategory::findOrFail($subcat_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name_en' => $request->subcategory_name_en,
            'subcategory_name_fr' => $request->subcategory_name_fr,
            'subcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subcategory_name_en)),
            'subcategory_slug_fr' => str_replace(' ', '-',$request->subcategory_name_fr),

    	]);

	    $notification = array(
			'message' => 'SubCategory Updated Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    }

    public function destroySubcategory($id)
    {
        $subcategory = Subcategory::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Category Deleted Successfully',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    /*-----------------------------------------------------------------*/
    //  SubCategory
    public function showSubSubCategory(){

        $category = Category::orderBy('category_name_fr','ASC')->get();
        $subcategory = SubCategory::orderBy('subcategory_name_fr','ASC')->get();
        $subsubcategory = SubSubCategory::latest()->get();

        return view('admin.category.subsubcategory',compact('category', 'subcategory', 'subsubcategory'));

    }


    public function getSubCategory($category_id){

        $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name_fr','ASC')->get();
        return json_encode($subcat);
    }


      public function getSubSubCategory($subcategory_id){

       $subsubcat = SubSubCategory::where('subcategory_id',$subcategory_id)->orderBy('subsubcategory_name_fr','ASC')->get();
       return json_encode($subsubcat);
    }


    public function storeSubSubCategory(Request $request){

        $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name_en' => 'required',
            'subsubcategory_name_fr' => 'required',
        ],[
            'category_id.required' => 'Please select Any option',
            'subsubcategory_name_en.required' => 'Input SubSubCategory English Name',
        ]);



        SubSubCategory::insert([
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'subsubcategory_name_en' => $request->subsubcategory_name_en,
        'subsubcategory_name_fr' => $request->subsubcategory_name_fr,
        'subsubcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subsubcategory_name_en)),
        'subsubcategory_slug_fr' => str_replace(' ', '-',$request->subsubcategory_name_fr),

        ]);

        $notification = array(
            'message' => 'Sub-SubCategory Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

   } // end method

   public function editSubSubCategory($id){

       $category = Category::orderBy('category_name_fr','ASC')->get();
       $subcategory = SubCategory::orderBy('subcategory_name_fr','ASC')->get();
       $subsubcategory = SubSubCategory::findOrFail($id);

       return view('admin.category.subsubcategory',compact('category','subcategory','subsubcategory'));

   }

   public function updateSubSubCategory(Request $request){

       $subsubcategory = $request->id;

       SubSubCategory::findOrFail($subsubcategory)->update([
       'category_id' => $request->category_id,
       'subcategory_id' => $request->subcategory_id,
       'subsubcategory_name_en' => $request->subsubcategory_name_en,
       'subsubcategory_name_fr' => $request->subsubcategory_name_fr,
       'subsubcategory_slug_en' => strtolower(str_replace(' ', '-',$request->subsubcategory_name_en)),
       'subsubcategory_slug_fr' => str_replace(' ', '-',$request->subsubcategory_name_fr),


       ]);

       $notification = array(
           'message' => 'Sub-SubCategory Update Successfully',
           'alert-type' => 'warning'
       );

       return redirect()->back()->with($notification);

   } // end method


   public function destroySubSubCategory($id){

       SubSubCategory::findOrFail($id)->delete();
        $notification = array(
           'message' => 'Sub-SubCategory Deleted Successfully',
           'alert-type' => 'danger'
       );

       return redirect()->back()->with($notification);

   }

    /*-----------------------------------------------------------------*/
    // Select Categories to be displayed on main page
    public function selectCategory(Request $request)
    {
        $request->validate([
    		'category_id' => 'required',
    	],
        [
    		'category_id.required' => 'Please select Any option',
    	]);

        $image1 = $request->file('top_left');
    	$name_gen1 = hexdec(uniqid()).'.'.$image1->getClientOriginalExtension();
    	Image::make($image1)->resize(700,981)->save('media/homecategory/'.$name_gen1);
    	$save_top_left_url = 'media/homecategory/'.$name_gen1;

        $image2 = $request->file('bottom_left');
    	$name_gen2 = hexdec(uniqid()).'.'.$image2->getClientOriginalExtension();
    	Image::make($image2)->resize(700,981)->save('media/homecategory/'.$name_gen2);
    	$save_bottom_left_url = 'media/homecategory/'.$name_gen2;

        $image3 = $request->file('center');
    	$name_gen3 = hexdec(uniqid()).'.'.$image3->getClientOriginalExtension();
    	Image::make($image3)->resize(700,981)->save('media/homecategory/'.$name_gen3);
    	$save_center_url = 'media/homecategory/'.$name_gen3;

        $image4 = $request->file('top_right');
    	$name_gen4 = hexdec(uniqid()).'.'.$image4->getClientOriginalExtension();
    	Image::make($image4)->resize(700,981)->save('media/homecategory/'.$name_gen4);
    	$save_top_right_url = 'media/homecategory/'.$name_gen4;

        $image5 = $request->file('bottom_right');
    	$name_gen5 = hexdec(uniqid()).'.'.$image5->getClientOriginalExtension();
    	Image::make($image5)->resize(700,981)->save('media/homecategory/'.$name_gen5);
    	$save_bottom_right_url = 'media/homecategory/'.$name_gen5;

	    HomeCategory::insert([
            'category_id' => $request->category_id,

            'top_left' => $save_top_left_url,
            'bottom_left' => $save_bottom_left_url,
            'center' => $save_center_url,
            'top_right' => $save_top_right_url,
            'bottom_right' => $save_bottom_right_url,

        ]);

        $notification = array(
			'message' => 'SubCategory Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    }

    public function ManageProduct(){

		$products = Product::latest()->get();
		return view('backend.product.product_view',compact('products'));
	}

    

}
