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
        Schema::create('animals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->text('characteristics')->nullable();
            $table->string('movement')->nullable();
            $table->string('reproduction')->nullable();
            $table->string('habitat')->nullable();
            $table->string('food')->nullable();
            $table->string('predator')->nullable();
            $table->foreignUuid('type_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
