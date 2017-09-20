<?php
/**
 * Created by PhpStorm.
 * User: Letox
 * Date: 20/09/2017
 * Time: 15:24
 */

namespace App\Http\Controllers;


class LoginController extends Controller
{

    public function index()
    {
        return view('login.login');
    }

    public function login()
    {
        return redirect()->action('HomeController@index');
    }
}