<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BeerController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function index()
    {
        $beers = Beer::all();
        return view("beers.index", compact('beers'));
    }

    public function create()
    {
        return view("beers.create");
    }
    public function add(Request $request)
    {
        Beer::create([
            'name' => $request->name,
            'brewery' => $request->brewery,
            'style' => $request->style,
            'info' => $request->info,
            "img" => $request->file("img") ? $request->file("img")->store("image", "public") : "/media/default.jpg",
            // "user_id" => Auth::user()->id,
        ]);
        return redirect(route("beer_index"))->with("status", "Birra creata correttamente!");
    }

    public function detail(Beer $beer)
    {
        return view("beers.detail", compact('beer'));
    }



    public function edit()
    {
        return view("beers.edit", compact('beer'));
    }

    public function update(Beer $beer, Request $request){
        $beer->update([
            'name' => $request->name,
            'brewery' => $request->brewery,
            'style' => $request->style,
            'info' => $request->info,
            "img" => $request->file("img") ? $request->file("img")->store("image", "public") : "/media/default.jpg",
        ]);
        return redirect(route("beer_detail", compact('beer')));

    }
    public function destroy(Beer $beer){
        $beer->delete();
        return redirect(route('beer_index'));
    }
}
