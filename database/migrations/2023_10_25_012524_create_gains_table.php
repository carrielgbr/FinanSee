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
        Schema::create('gains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('value');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gains_categories_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('gains_categories_id')->references('id')->on('gains_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gains');
    }
};
