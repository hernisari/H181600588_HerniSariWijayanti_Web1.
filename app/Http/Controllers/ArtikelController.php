<?php

namespace App\Http\Controllers;
use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listArtikel=Artikel::all(); //select * from artikel
        
        //blade
        return view('Artikel.index', compact ('listArtikel'));
    }

    public  function show ($id){
        //$artikel=KategoriArtikel::where('id,$id)->first();
        $Artikel=Artikel::find($id);

        return view('Artikel.show',compact('Artikel'));
    }

    public function store(Request $request){
        $input=$request->all();
        
        Artikel::create($input);
        
        return redirect(route('Artikel.index'));
    }   
}