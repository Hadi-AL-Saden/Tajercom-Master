<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Auth;
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
        
        Schema::create('product', function (Blueprint $table) {
            
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('catagory_id')->nullable();
            $table->string('product_name');
            $table->string('product_img');
            $table->integer('product_price');
            $table->text('product_dec');
    
            $table->timestamps();
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
