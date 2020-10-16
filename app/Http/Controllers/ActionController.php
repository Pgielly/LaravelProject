<?php

namespace App\Http\Controllers;
use App\Models\Statue;


use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function addOne(Request $request){
        Statue::addOne($request);
        return redirect('liste');
    }

    public function deleteOne(Request $request){
        Statue::deleteOne($request);
        return redirect('liste');
    }
    public function editOne(Request $request){
        Statue::editOne($request);
        return redirect('liste');
    }

}
