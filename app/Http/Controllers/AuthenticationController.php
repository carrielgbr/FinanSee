<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthenticationController extends Controller
{

    private $auth = null;
    private $created = null;

    public function loginIndex () {

        return view('Screen-Home', [
            "auth" => $this->auth
        ]);
    }

    public function authenticate(Request $request) {

        $validated = $request->validate([
            'email' => 'required|email|min:5|max:100',
            'password' => 'required|min:5|max:60'
        ]);

        if(auth()->attempt(request()->only(['email', 'password']))) {
            return redirect()->route('finansee.index');
        } else {
            $this->auth = false;
        }

        return view('Screen-Home', [
            "auth" => $this->auth
        ]);
        
    }

    public function registerIndex() {
        
        return view('Screen-Register', [
            "created" => $this->created
        ]);
    }

    public function create(Request $request) {

        $validated = $request->validate([
            'email' => 'required|email|min:5|max:100',
            'password' => 'required|min:5|max:60',
            'passwordConfirm' => 'required|min:5|max:60'
        ]);

        try 
        {
            if($request->password == $request->passwordConfirm) {
                DB::table('users')->insert(
                    array(
                        'email' => $request->email,
                        'password' => Hash::make($request->passwordConfirm),
                        'created_at' => DB::raw('current_timestamp()'),
                        'updated_at' => DB::raw('current_timestamp()')
                    )
                );
                return view('Screen-Home', [
                    "auth" => $this->auth
                ]);
            }
        }
        catch (Exception $e){ }
        $this->$created = false;
        return $this->registerIndex();
    }
}