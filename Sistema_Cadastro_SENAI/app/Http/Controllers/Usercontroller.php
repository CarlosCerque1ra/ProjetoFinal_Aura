<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $termo = trim($request->input('busca', ''));
        $checkbox = $request->input('filtro', []); // array de checkboxes

        $query = DB::table('vagas');

        // Filtro por termo
        if ($termo) {
            $query->where(function($q) use ($termo) {
                $q->where('empresa', 'like', "%{$termo}%")
                ->orWhere('titulo', 'like', "%{$termo}%")
                ->orWhere('requisitos', 'like', "%{$termo}%");
            });
        }

        // Filtro por checkbox
        if (!empty($checkbox)) {
            $query->whereIn('tipo', $checkbox); // só pega os tipos selecionados
        }

        $vagas = $query->orderBy('empresa')->get();

        return view('mural.index', compact('vagas', 'termo', 'checkbox'));
    }


    public function documento_estagio()
    {
        return view('documento_estagio.index');
    }

    public function informacoes()
    {
        return view('informacoes.index');
    }

    public function pagInit()
{
    return view('pag_init.index'); // ou qualquer view
}

}
