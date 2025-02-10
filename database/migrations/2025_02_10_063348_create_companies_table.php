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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('bse_id');
            $table->string('nse_id');
            $table->float('market_cap');
            $table->float('stock_price');
            $table->float('stock_high');
            $table->float('stock_low');
            $table->float('stock_p/e');
            $table->float('book_value');
            $table->float('dividend_yield');
            $table->float('roce');
            $table->float('roe');
            $table->float('face_value');
            $table->string('about',65,535)->change();
            $table->binary('report');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
