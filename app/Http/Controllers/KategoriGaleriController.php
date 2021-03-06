<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\KategoriGaleri;
class KategoriGaleriController extends Controller
{
    public function index(){
        //eloquent => ORM (Object Relational Mapping)
        $listKategoriGaleri=KategoriGaleri::all();
           
        //blade
        return view('kategori_galeri.index', compact ('listKategoriGaleri'));
   }
   public function show ($id){
    //$kategoriGaleri=KategoriGaleri::where('id,$id')->first();
     $kategoriGaleri=KategoriGaleri::find($id);
     return view('kategori_galeri.show', compact ('kategoriGaleri'));
     }
    public function create(){
      return view('kategori_galeri.create');
    }
    public function store(Request $request){
        $input=$request->all();
        KategoriGaleri::create($input);
        return redirect(route('kategori_galeri.index'));
    }   
}