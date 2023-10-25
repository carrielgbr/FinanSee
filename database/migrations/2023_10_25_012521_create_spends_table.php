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
        Schema::create('spends', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('value');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('spend_categories_id');
            $table->foreign('spend_categories_id')->references('id')->on('spend_categories');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spends');
    }
};
