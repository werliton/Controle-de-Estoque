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
    private $titulo = "Materiais";
    public function lista()
    {
        $produtos = Produto::all();
        return view('listagem')
            ->with('produtos',$produtos)
            ->with('titulo',$this->titulo);
    }

    public function mostra($id){
    	$produto = Produto::find($id);
    	return view('detalhe')->with('produto',$produto);
    }

    public function novo()
    {
        return view('produto.produto-add')
            ->with('titulo',$this->titulo);
    }

    public function novo_atendente()
    {
        return view('produto.atendente.produto-add')
            ->with('titulo',$this->titulo);
    }

    public function adiciona()
    {
        Produto::create(Request::all());
        return redirect('/produtos')->withInput();
    }
} 