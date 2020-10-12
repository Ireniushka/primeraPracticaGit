<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empresa;

class EmpresaController extends Controller
{
    public function index(){
        $empresas =empresa::latest()->paginate(3);
        return view('empresas.index', compact('empresas'));
    }
}
