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
            $table->string('name', length: 50);
            $table->date('birth_date')->nullable();
            $table->integer('age')->nullable();
            $table->enum('sexo',['M','F']);
            $table->string('rg', length:20)->nullable();
            $table->string('cpf', length:11)->nullable();
            $table->string('sus', length: 100)->nullable();
            $table->string('responsavel', length: 100)->nullable();
            $table->string('doc_resp', length: 20)->nullable();
            $table->string('telefone_resp', length: 20)->nullable();
            $table->string('banco', length: 20)->nullable();
            $table->string('tipo_beneficio', length: 50)->nullable();
            $table->decimal('valor_mensal', 10, 2)->nullable();
            $table->date('data_recebimento')->nullable();
            $table->string('obs', length: 150)->nullable();
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
