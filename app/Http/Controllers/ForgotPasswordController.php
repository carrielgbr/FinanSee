<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Carbon\Carbon; 
use App\Models\User; 
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ForgotPasswordController extends Controller
{
    public function showForgetPasswordForm(): View
    {
        return view('Screen-ForgotPassword');
    }

    public function submitForgetPasswordForm(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('password_resets_token')->create([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);

        Mail::send('Screen-ForgotPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('Mensagem', 'Nos enviamos um email!');
    }

    public function showResetPasswordForm($token): View
    { 
        return view('Screen-ForgotPassword', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets_token')
                              ->where([
                                'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table ('password_resets_token')->where(['email' => $request->email])->delete();

        return redirect('/Screen-Home')->with('message', 'Sua Senha FOi Trocada');
    }
}
