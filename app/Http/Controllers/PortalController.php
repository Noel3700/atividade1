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
        return view('bemvindo');
    }
    
    public function listarEquipas(Request $eq){
        if (isset($eq->chave)){
            if(is_numeric($eq->chave)&& $eq->chave>=0 && $eq->chave<count($this->equipas)){
                $equipa= $this->equipas [$eq->chave];
            }
            else{
                $equipa='Não funciona';
            }  

            return view('equipas', ['equipa'=>$equipa]);
            }

        else{
            return view('equipas', ['equipas'=>$this->equipas]);
        }  

        }
    
    
   public function mostrarform(){
       return view('contacto');
   }     
    
     public function processarform(Request $r){
         $nome = $r->nome;
         $morada = $r->morada;
         $automovrl = $r->automovel;
         return view('form-enviado',[
             'nome'=>$nome,
             'morada'=>$morada,
             'automovel'=>$automovel
         ]);
     }
    
    
}


