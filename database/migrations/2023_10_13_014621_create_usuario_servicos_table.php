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
        Schema::create('usuario_servicos', function (Blueprint $table) {
            $table->id();
            $table->text('detalhes');
            $table->date('data_entrada');
            $table->date('data_final');
            $table->double('preco_total')->default(0);
            $table->unsignedBigInteger('cliente');
            $table->unsignedBigInteger('servico');
            $table->foreign('cliente')->references('users')->on('id')->onUpdate('Cascade');
            $table->foreign('servico')->references('servicos')->on('id')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_servicos');
    }
};
