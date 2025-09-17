<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRegisterRequest;
use App\Http\Requests\UpdatePacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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
        /**
         * Recupera todos os pacientes do banco de dados, ordenados pelo nome em ordem crescente,
         * e retorna a view 'pacientes.list' com a lista de pacientes.
         *
         * @return \Illuminate\View\View Retorna a view com os pacientes listados.
         */
        $pacientes = Paciente::orderBy('name','asc')->simplePaginate(10);
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
        
        // Valida os dados recebidos da requisição
        $data = $request->validated();

        // Se uma foto foi enviada, armazena o arquivo e salva o caminho em 'photo'
        if($file = $request->photo){
            $data['photo'] = $file->store('photos','public');
        }
        
        // Atualiza o modelo Paciente com os dados validados e salva no banco de dados
        $paciente->fill($data)->save();

        // Redireciona para o dashboard com uma mensagem de sucesso
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
