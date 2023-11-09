<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthenticationController extends Controller
{

    public function authenticate(Request $request) {

        $validated = $request->validate([
            'email' => 'required|email|min:5|max:100',
            'password' => 'required|min:5|max:60'
        ]);

        if(auth()->attempt(request()->only(['email', 'password']))) {
            return view('Screen-FinanSee');
        }

        return view('Screen-Home');
        
    }

    public function registerIndex() {
        
        return view('Screen-Register');
    }

    public function create(Request $request) {

        $validated = $request->validate([
            'userName' => 'required',
            'email' => 'required|email|min:5|max:100',
            'password' => 'required|min:5|max:60',
            'passwordConfirm' => 'required|min:5|max:60'
        ]);

        try 
        {
            if($request->password == $request->passwordConfirm) {
                DB::table('users')->insert(
                    array(
                        'name' => $request->userName,
                        'email' => $request->email,
                        'password' => Hash::make($request->passwordConfirm),
                        'created_at' => DB::raw('current_timestamp()'),
                        'updated_at' => DB::raw('current_timestamp()')
                    )
                );
    
                return view('Screen-Home');
            }
        }
        catch (Exception $e){
        }

        return $this->registerIndex();
    }
}