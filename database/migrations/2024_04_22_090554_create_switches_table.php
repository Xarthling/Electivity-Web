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
        Schema::create('switches', function (Blueprint $table) {
            $table->id();
            $table->integer('switchId');
            $table->tinyInteger('state')->nullable();
            $table->unsignedBigInteger('boardid')->nullable();
            $table->foreign('boardid')->references('id')->on('boards')->onDelete('set null');
            $table->string('name', 50);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('switches');
    }
};
