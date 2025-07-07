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
        Schema::create('product_category_masters', function (Blueprint $table) {
            $table->id('category_id');
            $table->string('category_name');
            $table->string('category_img');
            $table->string('category_icon');
            $table->string('category_icon_name');
            $table->date('category_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_category_masters');
    }
};
