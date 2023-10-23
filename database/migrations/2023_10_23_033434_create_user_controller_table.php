<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('UserRequest', function (Blueprint $table) {
            $table->id('carousel_item_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });

        Schema::table('UserRequest', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
         
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_controller');
    }
};
