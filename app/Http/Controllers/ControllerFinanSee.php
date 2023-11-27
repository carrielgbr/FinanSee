<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerFinanSee extends Controller {

    private $selected = null;

    public function index () {
    
    
        $actions = $this->show();
    
        return view('Screen-FinanSee', [
            "selected" => $this->selected,
            "actions" => $actions
        ]);
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

    public function destroy (Request $request) {

        DB::table('actions')
            ->delete($request->id);
        return redirect()->route('finansee.index');
    }

    public function create (Request $request) {

        return $this->insertSpend($request->selected, $request->Description, $request->Value, $request->Date);
    }

    public function update (Request $request) {

        $date = $request->date;

        if($date == null) {
            $date = date('Y/m/d');
        }

        DB::table('actions')->where('actions.id', $request->id)->update(
            array(
                'updated_at' => $date,
                'value' => $request->value,
                'description' => $request->description
            )
        );
        return redirect()->route('finansee.index');
    }

    private function show () {

        return DB::table('actions')
            ->select('actions.id', 'actions.description', 'actions.value', 'actions.updated_at')
            ->orderBy('actions.updated_at', 'DESC')
            ->where('actions.user_id', auth()->user()->id)
            ->get();
    }

    private function insertSpend ($gain, $text, $value, $date) {

        if($date == null) {
            $date = date('Y/m/d');
        }

        $userId = auth()->user()->id;
        $this->selected = $gain;

        DB::table('actions')->insert(
            array(
                'created_at' => DB::raw('current_timestamp()'),
                'updated_at' => $date,
                'value' => $value,
                'description' => $text,
                'gain' => $gain,
                'user_id' => $userId
            )
        );
        return $this->index();
    }
}