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
use App\Produto;

class ProdutoController extends Controller
{
    public function lista()
    {
        $produtos = Produto::all();
        return view('listagem')->with('produtos',$produtos);
    }

    public function mostra($id){
    	$produto = Produto::find($id);
    	return view('detalhe')->with('produto',$produto);
    }

    public function novo()
    {
        return view('produto.produto-add');
    }

    public function adiciona()
    {
        Produto::create(Request::all());
        return redirect('/produtos')->withInput();
    }
} 