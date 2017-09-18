<?php
/**
 * Created by PhpStorm.
 * User: Letox
 * Date: 17/09/2017
 * Time: 10:39
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class VendaController extends Controller
{
    public function lista()
    {
        /*$produtos = DB::select('Select * from produto');

       return view('listagem')->with('produtos',$produtos);*/
        //return "Listagem de produtos";
    }


    public function novo()
    {
        return view('venda.venda-add');
    }

    public function realizadas()
    {
        return view('venda.venda-lista');
    }
} 