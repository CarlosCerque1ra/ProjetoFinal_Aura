<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('title', 'Página Inicial')

@push('styles')

@endpush

@section('content')
<div class="ms-5 container d-flex align-items-start justify-content-center mt-5 d-none d-md-block" style="height: 100vh;">
    <div class="d-flex justify-content-center">
        <div class="list-group d-none d-md-block"> <!-- Esconde em mobile -->
            <ul style="list-style: none;">
                <a href="#" class="list-group-item list-group-item-action" style="background-color: #E30613; color: #fff; border:none;"><li>Home</li></a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color: #E30613; color: #fff; border:none;"><li>Institucional</li></a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color: #E30613; color: #fff; border:none;"><li>Informações ao alunos</li></a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color: #E30613; color: #fff; border:none;"><li>Horário de atendimento</li></a>
                <a href="{{ route('mural.index') }}" class="list-group-item list-group-item-action" style="background-color: #E30613; color: #fff; border:none;"><li>Procurar vagas</li></a>
            </ul>
        </div>
        <div class="me-5 d-none d-md-block" style="height: 30vh;"> <!-- Esconde em mobile -->
            <img src="{{ asset('img/escola.png') }}" alt="Imagem Senai">
        </div>
    </div>
    <div>
        <div class="d-flex flex-column d-none d-md-block">
            <hr>
            <ul class="d-flex gap-3" style="list-style: none;">
                <li><i class="bi bi-instagram" style="color: #7b7b7bff;"></i></li>
                <li><i class="bi bi-facebook" style="color: #7b7b7bff;"></i></li>
            </ul>
            <hr>
            <div>
                <p style="color: #7b7b7bff;">SENAI Santo André</p>
                <h1>Escola SENAI "A Jacob Lafer"</h1>
                <button type="button" class="btn" style="color: #fff; background: linear-gradient(45deg, #8c050eff, #f34030ff); border:none; border-radius:30px;">CONHEÇA NOSSOS CURSOS</button>
            </div>
        </div>
    </div>
</div>

<!-- Versão Mobile - Só a imagem -->
<div class="d-block d-md-none container mt-4">
    <div class="text-center">
        <img src="{{ asset('img/escola.png') }}" alt="Imagem Senai" class="img-fluid w-100 rounded shadow">
    </div>
</div>

<style>
    @media (max-width: 767.98px) {
        .ms-5.container {
            height: auto !important;
            margin-left: 0 !important;
            padding: 1rem;
        }
        
        .ms-5.container > .d-flex {
            flex-direction: column;
            width: 100%;
        }
    }
</style>
@endsection
