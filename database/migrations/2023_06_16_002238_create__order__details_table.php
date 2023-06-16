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
        Schema::create('Order_Details', function (Blueprint $table) {
            $table->id();
            $table->integer('OrderID');
            $table->char('ProductID');
            $table->float('UnitPrice');
            $table->integer('Quantity');
            $table->float('Discount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Order_Details');
    }
};
