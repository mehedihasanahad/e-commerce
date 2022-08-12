<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
            ->constrained();
            $table->string('variation', 5000);
            $table->binary('images')->
            comment('could be array of images');
            $table->string('quantity_type')
            ->comment('e.g. piece');
            $table->decimal('quantity');
            $table->decimal('price');
            $table->integer('discount_price');
            $table->boolean('status')
            ->nullable()
            ->comment('active = 1; inactive = 0, draft = -1');
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
        Schema::dropIfExists('product_inventories');
    }
}
