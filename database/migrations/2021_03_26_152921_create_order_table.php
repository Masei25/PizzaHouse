<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id();

            $table->string('order_number');
            $table->enum('status', ['pending', 'processing', 'completed', 'declined']);
            $table->float('grand_total');
            $table->integer('item_count');
            $table->boolean('is_paid')->default(false);
            $table->enum('payment_method', ['pay_on_delivery', 'card'])->default('pay_on_delivery');

            $table->string('shipping_firstname');
            $table->string('shipping_lastname');
            $table->string('shipping_address');
            $table->string('shipping_apartment')->nullable;
            $table->string('shipping_city');
            $table->string('shipping_country');
            $table->string('shipping_state');
            $table->string('shipping_postal');
            $table->string('shipping_phone');

            $table->string('billing_fullname');
            $table->string('billing_address');
            $table->string('billing_city');
            $table->string('billing_country');
            $table->string('billing_state');
            $table->string('billing_postal');
            $table->string('billing_phone');

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
        Schema::dropIfExists('order');
    }
}
