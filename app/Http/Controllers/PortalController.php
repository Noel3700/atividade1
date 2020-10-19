<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //

        
   
    public $equipas=[
        'Vilarinho',
        'Aves',
        'Benfica'
    ];
        
         
    
    public function index(){
        return view('entrada');
    }
    
    public function listarEquipas(Request $eq){
            if (isset($eq->chave)){
                if(is_numeric($eq->chave)&& $eq->chave=0 && $eq->chave<count($this->equipas)){
                    $equipa= $this->equipas [$eq->chave];
                }
                else{
                    $equipa='Não funciona';
                    }  
                
        return view('listar-equipas', ['equipa'=>$equipa]);
            }
        
            else{
                    return view('listar-equipas', ['equipa'=>$this->equipa]);
                    }  
         ]);
        }
    
    
        
    
     public function listarEquipa(Request $request){
        
         $equipa=$request->chave;
         if($equipa>=0 && $equipa<count ($this->equipas)){
                $equipa =$this->equipas[$request->chave];
         
                 
         }
         else{
          $equipa='Não funciona';
         }
         return view('equipas', ['equipa'=>$equipa]);
     }
}


