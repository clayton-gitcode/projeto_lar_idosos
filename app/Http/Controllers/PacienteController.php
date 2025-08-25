<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRegisterRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PacienteRegisterRequest $request)
    {
                      
        Paciente::query()->create($request->validated());

        return to_route('dashboard')->with(['message'=>'Paciente Cadastrado !']);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $pacientes = Paciente::orderBy('name','asc')->get();
        return view('pacientes.list', [
            'pacientes' => $pacientes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        $paciente->fill($request->validated())->save();

        return to_route('dashboard')->with(['message'=>'Paciente atualizado!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        
        return to_route('dashboard')->with('message','Deletado com sucesso!');
    }

    public function imprimir(Paciente $paciente){

        return view('pacientes.imprimir', compact('paciente'));
    }
}
