@extends('layout')

@section('title', 'Área do Aluno')

@section('content')

<div class="container mt-4">
    <h2 class="mb-3">Minha Área — Inscrições</h2>

    @if(session('mensagem'))
        <div class="alert {{ session('tipo') ?? 'alert-info' }}">
            {{ session('mensagem') }}
        </div>
    @endif

    <hr>

    @if($inscricoes->isEmpty())
        <div class="text-center mt-4">
            <h4>Nenhuma inscrição registrada.</h4>
            <p>Deseja se inscrever em alguma vaga?</p>

            <a href="{{ url('/mural') }}" class="btn btn-primary mt-3">
                Ir para o mural de vagas
            </a>
        </div>
    @else
        <h4>Vagas onde você está inscrito:</h4>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Título da vaga</th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inscricoes as $vaga)
                <tr>
                    <td>{{ $vaga->titulo }}</td>
                    <td>{{ $vaga->tipo }}</td>
                    <td>{{ $vaga->descricao ?? $vaga->atividades ?? $vaga->requisitos }}</td>
                    <td>{{ $vaga->publicacao }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>

@endsection
