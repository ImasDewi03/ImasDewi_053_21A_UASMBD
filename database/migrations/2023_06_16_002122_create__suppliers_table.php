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
        Schema::create('Supliers', function (Blueprint $table) {
            $table->id();
            $table->integer('SupplierID' );
            $table->char('CompanyName');
            $table->char('ContactName');
            $table->char('Address');
            $table->char('City');
            $table->char('Region');
            $table->integer('PostalCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Supliers');
    }
};
