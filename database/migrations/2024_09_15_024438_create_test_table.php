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
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 191)->nullable();
            $table->string('middle_initial', 191)->nullable();
            $table->string('last_name', 191)->nullable();
            $table->decimal('loan', 10, 2);
            $table->decimal('value', 10, 2);
            $table->string('ltv', 191)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test');
    }
};
