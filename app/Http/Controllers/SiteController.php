<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteModel;
use App\Http\Requests\StoreCadastroMarketing;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function create()
    {
        return view('site.create');
    }

    public function store(StoreCadastroMarketing $request)
    {
        // Verifica se já existe um cadastro com o mesmo email
        $existe = \App\Models\SiteModel::where('email', $request->email)->exists();
    
        if ($existe) {
            return redirect()->back()->with('error', 'Este email já está cadastrado.');
        }
    
        // Criando o registro apenas se o email não existir
        $cadastroMarketing = \App\Models\SiteModel::create($request->validated());
    
        // Usando sessão para enviar a mensagem de sucesso
        return redirect()->route('site.price')->with('success', 'Parabéns! Cadastro realizado com sucesso!');
    } 

    public function show($id)
    {
        
    }
}
