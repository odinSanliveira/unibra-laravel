<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{   
    protected $objInfo;
    //criando objeto para teste
    public function __construct(){
        $this->objInfo = new Info();
    }
    /* Mantendo todas as funções para possível uso futuro */
    public function index()
    {   //retorna todas as informações do banco de dados;
        return Info::all();

        //dd -> função var_dump laravel
        //usando para retornar dados do bd
    //    dd($this->objInfo->all());
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {   //possibilita a introdução de valores nas tabelas da database;
        Info::create($request->all());
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
