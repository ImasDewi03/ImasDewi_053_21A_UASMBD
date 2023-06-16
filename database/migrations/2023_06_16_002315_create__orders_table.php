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
        Schema::create('Orders', function (Blueprint $table) {
            $table->id();
            $table->integer('OrderID');
            $table->Integer('CustomerID');
            $table->Integer('EmployeeID');
            $table->datetime('OrderDate');
            $table->date('RequiredDate');
            $table->date('ShippedDate');
            $table->char('ShipVia');
            $table->float('Freight');
            $table->char('ShippedName');
            $table->char('ShippedAddress');
            $table->char('ShipCity');
            $table->char('ShipRegion');
            $table->integer('ShipPostalCode');
            $table->char('ShipCountry');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Orders');
    }
};
