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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('shop_id')->constrained('shops');
            $table->string('name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('x_id')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('race')->default(0);
            $table->integer('sex')->default(0);
            $table->text('self_introduction')->nullable();
            $table->string('x_url')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
