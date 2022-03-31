<?php
use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SlidesController;
use App\Http\Controllers\Pages\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'prevent-back-history'], function(){

 
    Route::get('/', [HomeController::class, 'index']);

    // Admin Auth Section
    Route::group(['prefix'=>'admin', 'middleware'=>['admin:admin']], function () {
        Route::get('/login', [AdminController::class, 'loginForm']);
        Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
    });

    Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware('auth:admin');

    // Vendor Auth Section
    Route::group(['prefix'=>'vendor', 'middleware'=>['vendor:vendor']], function () {
        Route::get('/login', [VendorController::class, 'loginForm']);
        Route::post('/login', [VendorController::class, 'store'])->name('vendor.login');
    });

    Route::middleware(['auth:sanctum,vendor', 'verified'])->get('/vendor/dashboard', function () {
        return view('vendor.dashboard');
    })->name('dashboard')->middleware('auth:vendor');

    // User Auth Section
    Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.dashboard',compact('user'));
    })->name('dashboard');

    Route::get('/home', [UserAuthController::class, 'index']);
    Route::get('/user/logout', [UserAuthController::class, 'userLogout'])->name('user.logout');
    //Route::get('/', [IndexController::class, 'index']);
    Route::get('/user/logout', [IndexController::class, 'userLogout'])->name('user.logout');
    Route::get('/user/profile', [IndexController::class, 'userProfile'])->name('user.profile');
    Route::post('/user/profile/store', [IndexController::class, 'userProfileStore'])->name('user.profile.store');
    Route::get('/user/change/password', [IndexController::class, 'userChangePassword'])->name('change.password');
    Route::post('/user/password/update', [IndexController::class, 'userPasswordUpdate'])->name('user.password.update');


    // Vendor Routes
    Route::get('/vendor/logout', [VendorController::class, 'destroy'])->name('vendor.logout');

    /*----------------------------------------Protected Admin Routes--------------------------------------------------*/

    Route::middleware(['auth:admin'])->group(function(){

        Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
        Route::get('admin/home', [AdminController::class, 'index'])->name('home');
        //Route::get('/admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');

        // All Categories Routes
        Route::prefix('/categories')->group(function () {
            // Admin All Category Routes
            Route::get('/category', [CategoryController::class, 'showCategory'])->name('category');
            Route::post('/add/category', [CategoryController::class, 'storeCategory'])->name('add.category');
            Route::get('/delete/category/{id}', [CategoryController::class, 'destroyCategory'])->name('delete.category');
            Route::get('/edit/category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');
            Route::post('/update/category/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');
            Route::post('/select/category', [CategoryController::class, 'selectCategory'])->name('select.category');


            Route::post('/add/homecategory', [CategoryController::class, 'selectCategory'])->name('add.home.category');

            // Admin All Sub->Category Routes
            Route::get('/subcategory', [CategoryController::class, 'showSubcategory'])->name('subcategory');
            Route::post('/add/subcategory', [CategoryController::class, 'storeSubcategory'])->name('add.subcategory');
            Route::get('/delete/subcategory/{id}', [CategoryController::class, 'destroySubcategory'])->name('delete.subcategory');
            Route::get('/edit/subcategory/{id}', [CategoryController::class, 'editSubcategory'])->name('edit.subcategory');
            Route::post('/update/subcategory', [CategoryController::class, 'updateSubcategory'])->name('update.subcategory');

            // Admin All Sub->Sub Category Routes
            Route::get('/subsubcategory', [CategoryController::class, 'showSubSubcategory'])->name('subsubcategory');
            Route::get('/subcategory/ajax/{category_id}', [CategoryController::class, 'getSubCategory'])->name('ajax.subcategory');
            Route::get('/subsubcategory/ajax/{subcategory_id}', [CategoryController::class, 'getSubSubCategory'])->name('ajax.subsubcategory');
            Route::post('/add/subsubcategory', [CategoryController::class, 'storeSubSubcategory'])->name('add.subsubcategory');
            Route::get('/edit/subsubcategory/{id}', [CategoryController::class, 'editSubSubcategory'])->name('edit.subsubcategory');
            Route::post('/update/subsubcategory', [CategoryController::class, 'updateSubSubcategory'])->name('update.subsubcategory');
            Route::get('/delete/subsubcategory/{id}', [CategoryController::class, 'destroySubSubcategory'])->name('delete.subsubcategory');

            Route::get('/brand', [CategoryController::class, 'showBrand'])->name('all.brand');
            Route::post('/add/brand', [CategoryController::class, 'storeBrand'])->name('add.brand');
            Route::get('/delete/brand/{id}', [CategoryController::class, 'destroyBrand'])->name('delete.brand');
            Route::get('/edit/brand/{id}', [CategoryController::class, 'editBrand'])->name('edit.brand');
            Route::post('/update/brand', [CategoryController::class, 'updateBrand'])->name('update.brand');
        });


        Route::get('/images/accueil', [CategoryController::class, 'imagesAccueil'])->name('images.accueil');
        Route::get('/images/accueil/edit', [SlidesController::class, 'edit_home'])->name('images.accueil.edit');
        Route::post('/images/accueil/edit/post', [SlidesController::class, 'edit_home_slider'])->name('images.accueil.edit.post');

        // Coupons All
        Route::prefix('/coupon')->group(function () {
            Route::get('/view', [CouponController::class, 'indexCoupon'])->name('coupon');
            Route::post('/store/coupon', [CouponController::class, 'storeCoupon'])->name('add.coupon');
            Route::get('/edit/coupon/{id}', [CouponController::class, 'editCoupon'])->name('edit.coupon');
            Route::post('/update/coupon/{id}', [CouponController::class, 'updateCoupon'])->name('update.coupon');
            Route::get('/delete/coupon/{id}', [CouponController::class, 'destroyCoupon'])->name('delete.coupon');
        });

        // Admin Products All Routes

        Route::prefix('product')->group(function(){
            Route::get('/view', [ProductController::class, 'indexProduct'])->name('all.product');
            Route::get('/stock', [ProductController::class, 'stockProduct'])->name('stock.product');
            Route::get('/show', [ProductController::class, 'createProduct'])->name('show.product');
            Route::post('/store', [ProductController::class, 'storeProduct'])->name('add.product');
            Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
            Route::post('/data/update', [ProductController::class, 'productDataUpdate'])->name('update.product');
            Route::post('/image/update', [ProductController::class, 'multiImageUpdate'])->name('update.product.image');
            Route::post('/thumbnail/update', [ProductController::class, 'thumbnailImageUpdate'])->name('update.product.thumbnail');
            Route::get('/multiimg/delete/{id}', [ProductController::class, 'multiImageDelete'])->name('product.multiimg.delete');
            Route::get('/inactive/{id}', [ProductController::class, 'productInactive'])->name('inactive.product');
            Route::get('/active/{id}', [ProductController::class, 'productActive'])->name('active.product');
            Route::get('/delete/{id}', [ProductController::class, 'productDelete'])->name('delete.product');
        });

    });

    /*----------------------------------------Protected User Routes--------------------------------------------------*/
    /* Frontend Pages Routes */
    // Route::get('login', [LoginController::class,'showUserLoginForm'])->name('login.view');
    // Route::get('register', [RegisterController::class,'showUserRegisterForm'])->name('register');

    Route::get('cart', [HomeController::class, 'showCart'])->name('cart');
    Route::get('wishlist', [HomeController::class, 'showWishlist'])->name('wishlist');
    Route::get('shop', [HomeController::class, 'showShop'])->name('shop');
    Route::get('product/description', [HomeController::class, 'showProductDescription'])->name('product.description');
    Route::get('checkout', [HomeController::class, 'showCheckout'])->name('checkout');
    Route::get('newitems', [HomeController::class, 'showNewitems'])->name('newitems');
    Route::get('collections', [HomeController::class, 'showCollections'])->name('collections');
    Route::get('collection/items', [HomeController::class, 'showCollectionItems'])->name('collection.items');
    Route::get('blogs', [HomeController::class, 'showBlogs'])->name('blogs');
    Route::get('blog/details', [HomeController::class, 'showBlogDetails'])->name('blog.details');

});
