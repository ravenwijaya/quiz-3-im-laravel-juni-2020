<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;
class artikelModel{
    public static function get_all(){
        $items=DB::table('artikel')->get();
        return $items;
    }
    public static function save($data){
        $new_artikel=DB::table('artikel')->insert($data);
        return $new_artikel;
    }
    public static function find($id){
        $artikel=DB::table('artikel')->where('id',$id)->first();
        return $artikel;
    }
    public static function update($id, $request){
      
         $artikel=DB::table('artikel')
                    ->where('id',$id)
                    ->update([
                        'judul'=>$request['judul'],
                        'isi'=>$request['isi'],  
                        'slug'=>strtolower(str_replace(' ', '-',$request['slug'])),
                        'tag'=>$request['tag'],
                        ]);
         return $artikel;
     }
     public static function delete($id){
        
         $artikel=DB::table('artikel')
                    ->where('id',$id)
                    ->delete();
         return $artikel;
     }
}
