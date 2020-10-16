<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    
    public function index(){
        return view('entrada');
    }
    
    public function listarEquipas(){
            $equipas=[
                'Vilarinho',
                'Aves',
                'Benfica'
            ];
         return view('equipas',[
             'equipas'=>$equipas
         ]);
        }
    
    
        
    
     public function listarEquipa(Request $request){
            $equipas1=[
                'Vilarinho',
                'Aves',
                'Benfica'
            ];
         $equipa=$request->chave;
         if($equipa>=0 && $equipa<count ($equipas1)){
                $equipa = $equipas1[$request->chave];
         
                 
         }
         else{
          $equipa='Não funciona meu caro parceiro da guerra naval de 1892';
         }
         return view('equipas', ['equipa'=>$equipa]);
     }
}


