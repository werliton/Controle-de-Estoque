<?php
/**
 * Created by PhpStorm.
 * User: Letox
 * Date: 20/09/2017
 * Time: 15:24
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $login = $request->input('login');
        $senha = $request->input('senha');

        // Chamar layouts
        // ADMIN
        if($login == 'admin'){
            return redirect()->action('HomeController@index');
        }
        if($login == 'atendente'){
            return redirect()->action('HomeController@atendente');
        }

        if($login == 'caixa'){
            return redirect()->action('HomeController@caixa');
        }

        //return redirect()->action('HomeController@index');
    }
}