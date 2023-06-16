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
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->char('ProductID');
            $table->char('ProductName');
            $table->integer('SupplierID');
            $table->char('CategoryID');
            $table->integer('QuantityPerUnit');
            $table->integer('UnitPrice');
            $table->integer('UnitInStock');
            $table->integer('UnitInOrder');
            $table->char('ReorderLevel');
            $table->text('Discontinued');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Products');
    }
};
