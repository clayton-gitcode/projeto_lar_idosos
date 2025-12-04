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
        Schema::table('pacientes', function (Blueprint $table) {
            $table->date('entrada_no_lar')->nullable();
            $table->date('saida_do_lar')->nullable();
            $table->string('motivo_da_saida')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->dropColumn('entrada_no_lar');
            $table->dropColumn('saida_do_lar');
            $table->dropColumn('motivo_da_saida');
        });
    }
};
