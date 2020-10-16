<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statue extends Model
{
    use HasFactory;
    public static function addOne($request){
        $statue = new Statue();

        $statue->name= $request->name; 
        $statue->creation_date= $request->creation_date; 
        $statue->origin_country= $request->origin_country; 
        $statue->price= $request->price; 
        $statue->creator= $request->creator; 

        $statue->save();
        return;
    }

    public static function retrieveOne(){
        return Statue::All();
    }
    public static function deleteOne($request){
        Statue::destroy($request->id);
        return;
    }
    public static function obtainOne($request){
        return Statue::find($request->id);
    }
    public static function editOne($request){
        // dd($request);
        $statue = Statue::find($request->id);
        // dd($request);

        $statue->name = $request->name;
        $statue->creation_date = $request->creation_date;
        $statue->origin_country = $request->origin_country;
        $statue->price = $request->price;
        $statue->creator = $request->creator;
        
        $statue->save();
        return;
    }
}
