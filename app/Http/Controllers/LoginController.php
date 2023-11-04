<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Session;
use App\Models\User;

class LoginController extends Controller
{
            /*************************   Index   *************************/

    public function index(){
        if(Session::get('user_id'))
            return redirect('home');
        else
            return view('index');
    }
            /*************************   LogIn   *************************/

    public function login_form()
    {
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('login')->with('error', $error);
    }

    public function do_login_form(){
        if(Session::has('user_id')){
            return redirect('home');
        }
        if(!empty(request('username')) && !empty(request('password'))){
            $user = User::where('username', request('username'))->first();
            if(!$user){
                Session::put('error', 'Username non trovato');
                return redirect('login')->withInput();
            } else {
                if(!password_verify(request('password'), $user->pass_word)){
                    Session::put('error', 'Password errata');
                    return redirect('login')->withInput();
                }
            }
        } else {
            Session::put('error', 'Inserisci username e password');
            return redirect('login')->withInput();
        }
        if(!Session::get('error')){
            Session::put('user_id', $user->id);
            return redirect('home');
        } else {
            return redirect('login')->withInput()->withErrors($error);
        }
    }
            /*************************   SignUp   *************************/

    public function register_form(){
        if(Session::get('user_id'))
        {
            return redirect('home');
        }
        $error = Session::get('error');
        Session::forget('error');
        return view('sign_up')->with('error', $error);
    }

    public function do_register_form(){
        if(Session::has('user_id')) {
            return redirect('home');
        }
        if (!empty(request("username")) && !empty(request("password")) && !empty(request('email')) && !empty(request('name')) &&
            !empty(request('surname')) && !empty(request('confirm_password')))
        {
            # USERNAME
            if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', request('username'))) {
                Session::put('error', 'Username non valido');
                return redirect('sign_up')->withInput();
            } else {
                if(User::where('username', request('username'))->first())
                {
                    Session::put('error', 'Username già in uso');
                    return redirect('sign_up')->withInput();
                }
            }
            # PASSWORD
            if (strlen(request("password")) < 8) {
                Session::put('error', 'Caratteri password insufficienti');
                return redirect('sign_up')->withInput();
            }
            # CONFERMA PASSWORD
            if (request('password') != request('confirm_password')) {
                Session::put('error', 'Le password non coincidono');
                return redirect('sign_up')->withInput();
            }
            # EMAIL
            if (!filter_var(request('email'), FILTER_VALIDATE_EMAIL)) {
                Session::put('error', 'Email non valida');
                return redirect('sign_up')->withInput();
            } else {
                if(User::where('email', request('email'))->first())
                {
                    Session::put('error', 'Email già utilizzata');
                    return redirect('sign_up')->withInput();
                }
            }
            if (!Session::has('error')) {
                $password = password_hash(request('password'), PASSWORD_BCRYPT);

                $user = new User;
                $user->username = request('username');
                $user->pass_word = $password;
                $user->nome = request('name');
                $user->surname = request('surname');
                $user->email = request('email');
                $user->save();
                Session::put('user_id', $user->id);
                return redirect('home');
            }
        }
        else {
            Session::put('error', 'Compila tutti i campi');
        }
        return redirect('sign_up')->withInput();
    }
            /*************************   JS signup check   *************************/
    public function check($field)
    {
        if(empty(request('q'))) {
            return ['exists' => false];
        }
        $user = User::where($field, request('q'))->first();
        return ['exists' => $user ? true : false];
    }

            /*************************   LogOut   *************************/

    public function logout(){
        Session::flush();
        return redirect('login');
    }

}
