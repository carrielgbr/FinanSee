<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControllerFinanSee extends Controller {

    public function index () {

        return view('Screen-FinanSee');
    }





    public function exibirGrafico(){
        // Obtenha seus dados do banco de dados ou de onde quer que você os tenha
        $dados = [
            ['Task', 'Hours per Day'],
            ['Work', 11],
            ['Eat', 2],
            ['Commute', 2],
            ['Watch TV', 5],
            ['Sleep', 7]
        ];

        return view('Screen-FinanSee', compact('dados'));
    }
}