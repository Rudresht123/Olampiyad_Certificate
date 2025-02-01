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
        Schema::create('corrective_advice_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('financial_year');
            $table->string('category_name');
            $table->string('position');
            $table->text('description')->nullable();
            $table->enum('is_active',['yes','no'])->default('yes');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corrective_advice_category');
    }
};
