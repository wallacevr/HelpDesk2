<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EmpresaController extends Controller
{
    //
    public function index(){
        if(Auth::user()->nivel_id==1){
            return view('Empresas.index');
        }else{
           return redirect("dashboard");
        }
}
}
