<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_subcategory_masters', function (Blueprint $table) {
            $table->id('subcategory_id');
            $table->string('subcategory_name');
            $table->string('subcategory_hidden_name');
            $table->string('subcategory_img');
            $table->date('subcategory_date');
            $table->string('category_name');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                ->references('category_id')
                ->on('product_category_masters')
                ->cascadeOnDelete();
            $table->timestamps();

            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_subcategory_masters');
    }
};
