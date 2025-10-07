<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('title', 'Página Inicial')

@push('styles')

@endpush


@section('content')

    <div>
        <div>
            <ul class="d-flex justify-content-between list-unstyled">
                <li>Informações</li>
                <li>|</li>
                <li>Mural de oportunidades</li>
                <li>|</li>
                <li>Documentos de Estágio</li>
            </ul>
        </div>
        <hr>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="font-weight: bold;">Mural de Oportunidades</h1>
            <div class="d-flex flex-column gap-2">
                <p style="font-weight: bold;">A escola atua apenas como intermediária na divulgação das oportunidades de estágio, emprego e aprendizagem, não se responsabilizando pelos critérios de seleção definidos pelas empresas.</p>
                <p style="font-weight: bold;">Para as vagas de estágio, é imprescindível que o estudante leia atentamente o Manual de Estágio (Encontrado em <a href="#" style="color: #ff0000;">Documentos de Estágio</a>) antes de comparecer à empresa.</p>
                <p style="font-weight: bold;">Além disso, recomenda-se procurar o Orientador de Estágios para receber as orientações necessárias quanto aos procedimentos e documentos exigidos.</p>
            </div>
        </div>
        <hr>
        <div class="d-flex align-items-center gap-3 mb-4">
            <!-- Campo de pesquisa com lupa -->
            <div class="input-group me-3" style="width: 70%;">
                <input type="text" class="form-control" placeholder="Pesquise aqui..." 
                    style="border-radius: 30px 0 0 30px; border: 1px solid #d9d9d9; padding: 10px;">
                <span class="input-group-text" 
                    style="background: #f5f5f5; border: 1px solid #d9d9d9; border-left: none; border-radius: 0 30px 30px 0;">
                    <i class="bi bi-search"></i>
                </span>
            </div>

            <!-- Botão de filtro -->
            <button class="btn" style="color: #333; border-radius: 30px; background: #f5f5f5; border: 1px solid #d9d9d9; padding: 10px 20px;">
                <i class="bi bi-funnel-fill"></i> Filtrar
            </button>
        </div>

        <div class="d-flex col-sm-12">
            <div class="col-sm-6">
                <div class="card text-bg-dark">
                    <div class="card-img-overlay">
                        <h5 class="card-title" style="color: #ff0000;"><i class="bi bi-pin-angle">EMPREGO - MONTADOR DE MÓVEIS(Nº016/2025)</i></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-bg-dark">
                    <img src="..." class="card-img" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title" style="color: #ff0000;"><i class="bi bi-pin-angle">EMPREGO - MONTADOR DE MÓVEIS(Nº016/2025)</i></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
