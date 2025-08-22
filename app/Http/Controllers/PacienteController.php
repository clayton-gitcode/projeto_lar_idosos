<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRegisterRequest;
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
    public function show(Paciente $paciente)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
