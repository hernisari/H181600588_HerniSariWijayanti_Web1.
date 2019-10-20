<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listKategoriArtikel=KategoriArtikel::all(); //select * from kategori_artikel
        
        //blade
        return view('kategori_artikel.index', compact ('listKategoriArtikel'));
    }

    public  function show ($id){
        //$kategoriArtikel=KategoriArtikel::where('id,$id)->first();
        $kategoriartikel=kategoriartikel::find($id);

        return view('kategori_artikel.show',compact('kategoriartikel'));
    }

    public function create(){
        return view('kategori_artikel.create');
    }

    public function store(Request $request){
        $input=$request->all();
        
        kategoriartikel::create($input);
        
        return redirect(route('kategori_artikel.index'));
    }   
        

    
}