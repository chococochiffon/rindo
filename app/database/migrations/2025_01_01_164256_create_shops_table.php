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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name',64);
            $table->string('title',128)->nullable();
            $table->text('detail')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->boolean('is_sunday_start')->default(true);
            $table->json('business_days')->nullable();
            $table->json('business_hour')->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
