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
        Schema::create('join_us', function (Blueprint $table) {
            $table->id();
            // $table->string('filename');
            // $table->string('filepath');
            $table->string('name')->nullable();
            $table->string('company')->nullable();
            $table->string('jop_title')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('website_name')->nullable();
            $table->string('type_partner')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('join_us');
    }
};
