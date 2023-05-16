<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{

    public $clientes = [
        ['nome'=>'José',
        'sobrenome'=>'Santos',
        'cpf'=>'50924231882'],
        ['nome'=>'Maria',
        'sobrenome'=>'Silva',
        'cpf'=>'50525231882']
    ];
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('index',['clientes'=>$this->clientes,'title'=> 'Clientes']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create')->with('title','Criar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = ['nome'=>$request->nome, 'sobrenome'=>$request->sobrenome, 'cpf'=>$request->cpf];
        return view('confirmation',['cliente'=>$cliente,'title'=>'Confirmação','confirmation'=>'Cadastrado com sucesso!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $cliente)
    {
        foreach($this->clientes as $cli){
        
           if($cliente === $cli['nome']){
            
            return view('show',['cliente'=>$cli,'text'=>'Cliente encontrado com sucesso!']);

           } 
        }
         
        return view('show',['text'=>'','msg'=>'Cliente não encontrado']);
        
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $cliente)
    {
        foreach($this->clientes as $cli){
        
            if($cliente === $cli['nome']){
             
             return view('edit',['cliente'=>$cli]);
 
            } 
         }
        return view('edit',['cliente'=>'']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $cliente)
    {
        return view('confirmation',['cliente'=>$cliente,'title'=>'Confirmação','confirmation'=>'Editado com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
