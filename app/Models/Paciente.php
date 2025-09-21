<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Paciente extends Model
{
    /** @use HasFactory<\Database\Factories\PacienteFactory> */
    use HasFactory;

     protected $fillable = [
        'name',
        'birth_date',
        'age',
        'sexo',
        'rg',
        'cpf',
        'sus',
        'responsavel',
        'doc_resp',
        'telefone_resp',
        'banco',
        'tipo_beneficio',
        'valor_mensal',
        'data_recebimento',
        'obs',
        'photo',
    ];

    /**
     * Acessor para o atributo birthDate.
     *
     * Este método formata a data de nascimento do paciente para o formato 'd/m/Y'.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function birthDate(): Attribute
    {
        return Attribute::make(
            // get: fn ($value) => \Carbon\Carbon::parse($value)->format('d/m/Y'),
        );
    }
}
