<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name',110);
            $table->string('slug',120)->unique();
            $table->text('description')->nullable();
            $table->string('email',100)->unique();
            $table->string('address')->unique();
            $table->string('city');
            $table->string('country');
            $table->string('post_code',5);
            $table->string('phone',15)->unique();
            $table->string('image_cover')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
}
