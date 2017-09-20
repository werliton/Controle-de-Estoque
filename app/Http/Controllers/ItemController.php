<?php
/**
 * Created by PhpStorm.
 * User: Letox
 * Date: 20/09/2017
 * Time: 16:50
 */

namespace App\Http\Controllers;


class ItemController extends Controller
{

    public function novo(){
        return view('item.item-add');
    }
}