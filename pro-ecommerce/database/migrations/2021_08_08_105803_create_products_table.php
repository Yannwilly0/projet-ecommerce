<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('subsubcategory_id');
            $table->string('product_name_en');
            $table->string('product_name_fr');
            $table->string('product_slug_en');
            $table->string('product_slug_fr');
            $table->string('product_code');
            $table->string('product_qty');
            $table->string('product_tags_en');
            $table->string('product_tags_fr');
            $table->string('product_size_en')->nullable();
            $table->string('product_size_fr')->nullable();
            $table->string('product_color_en');
            $table->string('product_color_fr');
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->string('short_descp_en');
            $table->string('short_descp_fr');
            $table->string('product_detail_fr');
            $table->string('product_detail_en');
            $table->string('video_link');
            $table->string('product_thumbnail');
            $table->integer('hot_deal')->nullable();
            $table->integer('best_rated')->nullable();
            $table->integer('new_collection')->nullable();;
            $table->integer('deal_of_week')->nullable();
            $table->integer('best_seller')->nullable();
            $table->integer('electronics')->nullable();
            $table->integer('jewellery')->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
