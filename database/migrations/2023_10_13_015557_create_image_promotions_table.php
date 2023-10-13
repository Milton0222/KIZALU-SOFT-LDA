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
        Schema::create('image_promotions', function (Blueprint $table) {
            $table->id();
            $table->text('descricao');
            $table->string('arquivo');
            $table->unsignedBigInteger('servico');
            $table->foreign('servico')->references('servicos')->on('id')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('usuario');
            $table->foreign('usuarrio')->references('users')->on('id')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_promotions');
    }
};
