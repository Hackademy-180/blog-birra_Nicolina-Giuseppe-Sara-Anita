<?php

namespace App\Http\Controllers;
use App\Models\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function index(){
        $beers= Beer::all();
        return view("beers.index", compact('beers'));
    }

    public function create(){
        return view("beers.create");
    }
    public function add(Request $request){
        $beer= Beer::create([
            'name'=>$request->name,
            'brewery'=>$request->brewery,
            'style'=>$request->style,
            'info'=>$request->info,
        ]);

    }
}
