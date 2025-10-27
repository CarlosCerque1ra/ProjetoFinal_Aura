<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Busca todas as vagas no banco usando o Query Builder do Laravel
        $vagas = DB::table('vagas')->get();

        // Retorna a view e envia as vagas
        return view('mural.index', compact('vagas'));
    }
}
