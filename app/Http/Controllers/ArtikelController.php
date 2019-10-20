<?php

namespace App\Http\Controllers;
use App\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listartikel=artikel::all(); //select * from artikel
        
        //blade
        return view('artikel.index', compact ('listartikel'));
    }

    public  function show ($id){
        //$artikel=KategoriArtikel::where('id,$id)->first();
        $artikel=artikel::find($id);

        return view('artikel.show',compact('artikel'));
    }
    public function create(){
        return view('artikel.create');
    }

    public function store(Request $request){
        $input=$request->all();
        
        artikel::create($input);
        
        return redirect(route('artikel.index'));
    }   
}