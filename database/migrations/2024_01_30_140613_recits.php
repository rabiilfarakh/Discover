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
        Schema::create('recits', function (Blueprint $table) {
            $table->id('RecitId');
            $table->unsignedBigInteger('UserId');
            $table->foreign('UserId')->references('UserId')->on('users'); 
            $table->string('RecitName');
            $table->timestamp('RecitDate')->useCurrent();
            $table->string('RecitContent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
