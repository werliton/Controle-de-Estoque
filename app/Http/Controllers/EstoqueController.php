<?php
/**
 * Created by PhpStorm.
 * User: Letox
 * Date: 20/09/2017
 * Time: 18:10
 */

namespace App\Http\Controllers;


class EstoqueController extends Controller
{
    public function transacoes(){
        return view('estoque.estoque-listagem');
    }
}