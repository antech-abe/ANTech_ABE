<?php

namespace App\Http\Controllers\paginas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function index(){
        return view('perfil.perfil');
    }
}