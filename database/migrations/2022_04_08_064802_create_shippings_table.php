<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->string("name", 25);
            $table->string("email", 190)->unique();
            $table->string("mobile", 11)->unique();            
            $table->string("address", 255);
            $table->string("total_price", 20);
            $table->string("order-status")->default('Pending..');
            $table->string("payment_type", 25)->default('Pending..');
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
        Schema::dropIfExists('shippings');
    }
}
