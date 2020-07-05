<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\artikelModel;
class artikelController extends Controller
{
    public function index(){
    
        $items=artikelModel::get_all();
        return view('item.artikel',compact('items'));
    }
    public function create(){
        return view('item.artikelform');
    }
    public function store(Request $request){
      
          $data=$request->all();
          $data["slug"]=strtolower(str_replace(' ', '-',$data["slug"]));
          unset($data["_token"]);
           $items=artikelModel::save($data);
           if($items){
               return redirect('/artikel');
           }
       }
    public function show($id){
        $artikel=artikelModel::find($id);
        $tag= explode(" ", $artikel->tag);
       // dd($tag);
        //dd($tanya);
        return view('item.artikelshow',compact('artikel','tag'));
    }
    public function edit($id){
        $artikel=artikelModel::find($id);
        return view('item.artikeledit',compact('artikel'));
    }
    public function update($id,Request $request){
        $artikel=artikelModel::update($id,$request->all());
        return redirect('/artikel');
    }
    public function delete($id){
        $artikel=artikelModel::delete($id);
        return redirect('/artikel');
    }

}
