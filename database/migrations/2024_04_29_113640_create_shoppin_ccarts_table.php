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
        Schema::create('shoppin_ccarts', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->softDeletes();
            $table->text('book_name');
            $table->integer('price');
            $table->text('quantity');
            $table->text('total');
            $table->text('shipping');
            $table->text('governorate');
            $table->text('phone');
            $table->text('finaltotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shoppin_ccarts');
    }
};
