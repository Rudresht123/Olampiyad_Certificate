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
        Schema::create('corrective_advice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('position');
            $table->string('corrective_advice_category');
            $table->text('corrective_advice');
            $table->enum('is_active',['yes','no'])->default('yes');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('financial_year');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corrective_advice');
    }
};
