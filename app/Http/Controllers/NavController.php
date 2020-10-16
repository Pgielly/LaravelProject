<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statue;

class NavController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function list(){
        $result = Statue::retrieveOne();
        return view('list', ['statues'=>$result]);
    }
    public function add(){
        return view('add');
    }

    public function obtainOne(Request $request){
        $statue = Statue::obtainOne($request);
        return view('edit', ['statue' => $statue]);
    }
}
