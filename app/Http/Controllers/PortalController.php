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
    
    
    
}


