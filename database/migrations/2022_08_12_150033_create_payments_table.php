<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_detail_id')
            ->constrained();
            $table->foreignId('user_id')
            ->constrained();
            $table->decimal('amount');
            $table->integer('payment_type')
            ->comment('cash = 1; online = 2; wallet = 3');
            $table->string('account_no')->nullable();
            $table->string('provider')->nullable();
            $table->integer('status')
            ->comment('success = 1; failed = 2; cancel = 3; in_progress = -1');
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
        Schema::dropIfExists('payments');
    }
}
