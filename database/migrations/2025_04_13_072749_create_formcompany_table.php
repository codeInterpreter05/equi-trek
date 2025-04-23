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
        Schema::create('formcompany', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('about'); // 3–5 lines
            $table->decimal('market_cap', 15, 2)->nullable();
            $table->decimal('current_price', 10, 2)->nullable();
            $table->string('high_low')->nullable(); // store as string like "1500 / 900"
            $table->decimal('stock_pe', 10, 2)->nullable();
            $table->decimal('book_value', 10, 2)->nullable();
            $table->decimal('dividend_yield', 5, 2)->nullable();
            $table->decimal('roce', 5, 2)->nullable();
            $table->decimal('roe', 5, 2)->nullable();
            $table->decimal('face_value', 10, 2)->nullable(); // Added face_value
            $table->string('url')->nullable(); // Added url
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formcompany');
    }
};
