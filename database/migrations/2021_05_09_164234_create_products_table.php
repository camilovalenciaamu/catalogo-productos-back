<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size');
            $table->string('comments');
            $table->integer('quantity_stock');
            $table->date('boarding_date');
            $table->string('product_image')->nullable();
            $table->timestamps();

            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')
                ->onDelete('set null')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}