<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller{
    /**
     * Retorna uma lista de pets cadastrados no banco de dados
     *
     * @return Collection
     */
    public function index(){
        return Pet::get();
    }

    /**
     * Cria um pet no banco de dados
     *
     * @param PetRequest $request
     * @return Pet
     */
    public function store(PetRequest $request){
        $dadosPet = $request->all();
        Pet::create($dadosPet);
    }
}
