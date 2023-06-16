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
        Schema::create('Employee', function (Blueprint $table) {
            $table->integer('EmployeeID');
            $table->char('LastName');
            $table->char('FirstName');
            $table->char('Title');
            $table->char('TitleofCourtesy');
            $table->date('BirthDate');
            $table->date('HireDate');
            $table->char('Address');
            $table->char('City');
            $table->char('Region');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Employee');
    }
};
