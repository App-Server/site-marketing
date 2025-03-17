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
        Schema::create('cadastro_marketing', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('whatsapp')->nullable();
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
            $table->integer('anos_experiencia')->nullable();
            $table->string('atuacao')->nullable();
            $table->string('modalidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('nota_fiscal')->nullable();
            $table->string('link_site')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->text('mensagem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cadastro_marketing');
    }
};
