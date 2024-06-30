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
            $table->string('name');
            $table->string('company');
            $table->string('jop_title');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->string('website_name');
            $table->string('type_partner');
            $table->text('notes');
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
