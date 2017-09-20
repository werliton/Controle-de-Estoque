<?php
/**
 * Created by PhpStorm.
 * User: Letox
 * Date: 20/09/2017
 * Time: 16:41
 */

namespace App\Http\Controllers;


class FuncionarioController extends Controller
{

    public function novo()
    {
        return view('funcionario.funcionario-add');
    }
}