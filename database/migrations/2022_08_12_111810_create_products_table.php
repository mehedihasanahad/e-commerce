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
            $table->string('name');
            $table->longText('description');
            $table->string('SKU');
            $table->binary('image');
            $table->foreignId('product_cateogy_id')
            ->constrained('product_categories');
            $table->decimal('price');
            $table->string('discount_type');
            $table->integer('discount_amount');
            $table->string('tags', 1000);
            $table->string('template')
            ->nullable()
            ->comment('single product template');
            $table->string('vat');
            $table->integer('status')
            ->comment('publish = 1; inactive = 0; draft = -1;');
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
