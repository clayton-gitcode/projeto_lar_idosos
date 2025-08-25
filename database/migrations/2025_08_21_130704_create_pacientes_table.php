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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date')->nullable();
            $table->integer('age')->nullable();
            $table->enum('sexo',['M','F']);
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('sus')->nullable();
            $table->string('responsavel')->nullable();
            $table->string('doc_resp')->nullable();
            $table->string('telefone_resp')->nullable();
            $table->string('banco')->nullable();
            $table->string('tipo_beneficio')->nullable();
            $table->decimal('valor_mensal', 10, 2)->nullable();
            $table->date('data_recebimento')->nullable();
            $table->string('obs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
