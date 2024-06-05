<?php

namespace App\Http\Controllers;

use App\Models\Condominio;
use Illuminate\Http\Request;

class CondominioController extends Controller
{
    public function index()
    {
        return Condominio::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'dataFundacao' => 'required|date',
            'numeroEdificios' => 'required|integer',
            'numeroApartamentos' => 'required|integer',
            'sindico' => 'required',
            'telefoneSindico' => 'required',
            'emailSindico' => 'required|email',
            'taxaCondominio' => 'required|numeric',
        ]);

        return Condominio::create($request->all());
    }

    public function show($id)
    {
        return Condominio::find($id);
    }

    public function update(Request $request, $id)
    {
        $condominio = Condominio::find($id);
        $condominio->update($request->all());

        return $condominio;
    }

    public function destroy($id)
    {
        return Condominio::destroy($id);
    }
}
