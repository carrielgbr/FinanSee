<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerFinanSee extends Controller {

    public function index () {

        return view('Screen-FinanSee');
    }

    public function exibirGrafico () {
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

    public function create (Request $request) {

        if($request->selected == 0) {
            return $this->insertSpend($request->Description, $request->Value, $request->Date);
        }
        return "Ganho";
    }

    private function insertSpend ($text, $value, $date = null  ) {

        DB::table('spends')->insert(
            array(

            )
        );
    }

}