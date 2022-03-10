<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('restaurant_id')->constrained()->onDelete('cascade');
            $table->string('customer_name',80);
            $table->string('customer_surname',80);
            $table->string('customer_email',100);
            $table->string('customer_address');
            $table->string('customer_city',100);
            $table->string('customer_country');
            $table->string('customer_post_code',5);
            $table->string('customer_phone',15);
            $table->string('customer_comment',150)->nullable();
            $table->boolean('accepted');
            $table->decimal('tot_price',6,2);
            $table->string('payment_token');
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
        Schema::dropIfExists('orders');
    }
}
