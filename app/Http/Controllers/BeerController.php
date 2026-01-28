<?php

namespace App\Http\Controllers;

use App\Models\Beer;
use App\Models\Category;
use App\Mail\ContactMail;

use Illuminate\Http\Request;
use App\Http\Requests\BeerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        $categories= Category::all();
        return view("beers.create", compact('categories'));
    }
    public function add(BeerRequest $request)
    {
        $beer= Beer::create([
            'name' => $request->name,
            'brewery' => $request->brewery,
            'style' => $request->style,
            'info' => $request->info,
            "img" => $request->file("img") ? $request->file("img")->store("image", "public") : "/media/default.jpg",
            "user_id" => Auth::user()->id,
        ]);
        $beer->categories()->attach($request->categories);
        return redirect(route("beer_index"))->with("status", "Birra creata correttamente!");
    }

    public function detail(Beer $beer)
    {
        return view("beers.detail", compact('beer'));
    }



    public function edit()
    {
        $categories= Category::all();
        return view("beers.edit", compact('beer'));
    }

    public function update(Beer $beer, Request $request)
    {
        $beer->update([
            'name' => $request->name,
            'brewery' => $request->brewery,
            'style' => $request->style,
            'info' => $request->info,
            "img" => $request->file("img") ? $request->file("img")->store("image", "public") : "/media/default.jpg",
        ]);
        $beer->categories()->detach();
        $beer->categories()->attach($request->categories);
        return redirect(route("beer_detail", compact('beer')));
    }
    public function destroy(Beer $beer)
    {
        $beer->categories()->detach();
        $beer->delete();
        return redirect(route('beer_index'));
    }

    public function lavora()
    {
        return view("lavora.lavora-con-noi");
    }
    public function send(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $mex = $request->mex;
        Mail::to($email)->send(new ContactMail($name, $email, $mex));

        return redirect(route("home"))->with("message", "mail inviata con successo");
    }
}
