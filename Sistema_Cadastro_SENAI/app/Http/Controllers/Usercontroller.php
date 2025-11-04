<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
        $termo = trim($request->input('busca', ''));
        $checkbox = $request->input('filtro', []);

        // Pega o usuário logado (se tiver)
        $user = auth()->user();

        // Começa a query
        $query = DB::table('vagas');

        // 🔍 Filtro por termo
        if ($termo) {
            $query->where(function ($q) use ($termo) {
                $q->where('empresa', 'like', "%{$termo}%")
                ->orWhere('titulo', 'like', "%{$termo}%")
                ->orWhere('requisitos', 'like', "%{$termo}%");
            });
        }

        // ✅ Filtro por checkbox
        if (!empty($checkbox)) {
            $query->whereIn('tipo', $checkbox);
        }

        // 🧠 Pega o tipo do usuário pelo banco (caso o Auth não tenha carregado)
        if ($user) {
            $userData = DB::table('users')->where('id', $user->id)->first();
        } else {
            $userData = null;
        }

        // 🔒 Filtragem de visibilidade
        if (!$userData || $userData->conta !== 'admin') {
            // Se for aluno ou visitante → só vagas visíveis (visibilidade = 1)
            $query->where('visibilidade', 1);
        }
        // Se for admin → vê tudo (não aplica filtro)

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

    public function cadastrar(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'atuacao' => 'required|string|max:255',
            'id_aluno' => 'required|integer',
            'id_vaga' => 'required|integer',
            'curriculo' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // opcional, apenas arquivos permitidos
        ]);

        if ($request->hasFile('curriculo')) {
            $file = $request->file('curriculo');
            $path = $file->store('curriculos', 'public');
            $validated['curriculo'] = $path;
        }

        DB::table('inscritos')->insert($validated);

        return redirect()->back()->with([
            'mensagem' => 'Cadastro realizado com sucesso!',
            'tipo' => 'alert-success' // ou 'alert-danger' para erros
        ]);
    }

    public function vaga(Request $request){
        // Validação dos dados
        $validated = $request->validate([
            'empresa' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'responsavel' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'tipo' => 'required|string|max:100',
            'requisitos' => 'required|string|max:255',
            'atividades' => 'required|string|max:255',
            'init_expediente' => 'required|date_format:H:i:s',
            'fim_expediente' => 'required|date_format:H:i:s',
            'beneficios' => 'required|string|max:255',
            'publicacao' => 'required|string',
            'visibilidade' => 'required|in:0,1',
        ], [
            'init_expediente.date_format' => 'O início do expediente deve estar no formato HH:MM:SS.',
            'fim_expediente.date_format' => 'O fim do expediente deve estar no formato HH:MM:SS.',
        ]);

        // Inserir no banco
        DB::table('vagas')->insert($validated);

        return redirect()->back()->with([
            'mensagem' => 'Cadastro realizado com sucesso!',
            'tipo' => 'alert-success'
        ]);
    }


    public function atualizarVaga(Request $request, $id)
    {
        // Validação dos dados
        $validated = $request->validate([
            'empresa' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefone' => 'required|string|max:20',
            'responsavel' => 'required|string|max:255',
            'titulo' => 'required|string|max:255',
            'tipo' => 'required|string|max:100',
            'requisitos' => 'required|string|max:255',
            'atividades' => 'required|string|max:255',
            'init_expediente' => 'required|date_format:H:i:s',
            'fim_expediente' => 'required|date_format:H:i:s',
            'beneficios' => 'required|string|max:255',
            'publicacao' => 'required|string',
            'visibilidade' => 'required|in:0,1',
        ], [
            'init_expediente.date_format' => 'O início do expediente deve estar no formato HH:MM:SS.',
            'fim_expediente.date_format' => 'O fim do expediente deve estar no formato HH:MM:SS.',
        ]);

        // Atualizar no banco
        DB::table('vagas')->where('id', $id)->update($validated);

        return redirect()->back()->with([
            'mensagem' => 'Vaga atualizada com sucesso!',
            'tipo' => 'alert-success'
        ]);
    }
    public function excluirVaga(Request $request, $id)
    {
        // Excluir do banco
        DB::table('vagas')->where('id', $id)->delete();

        return redirect()->back()->with([
            'mensagem' => 'Vaga excluída com sucesso!',
            'tipo' => 'alert-success'
        ]);
    }
}
