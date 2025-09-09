<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('title', 'Página Inicial')

<!-- Estilos adicionais específicos para esta página --> 
@push('styles') 
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #d4d4d4ff;
    }

    .sec1{
        font-size: 1 rem;
        font-weight: bold;
        background-color: #fefefeff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h1{
        font-weight: bold;
    }

    h5{
        font-weight: bold;
    }


</style>
@endpush 


@section('content')
    <div class="sec1 container mt-5">
        <div class="estagio">
            <div>
                <ul class="d-flex list-unstyled gap-5 d-flex-row justify-content-center pt-3">
                    <li class="mt-3">Informações</li>
                    <li class="mt-3">|</li>
                    <li class="mt-3">Mural de oportunidades</li>
                    <li class="mt-3">|</li>
                    <li class="mt-3">Documentos de Estágio</li>
                </ul>
            </div>
        </div>
        <hr>

        <!-- Parte dois -->
        <div class="sec2 text-center my-5 d-flex flex-column justify-content-center">
            <h1>Estágio/Emprego</h1>
            <br>
            <h5 class="align-items-center d-flex">Atenção, alunos e ex-alunos!</h2>
            <p>Se você está em busca de uma oportunidade no mercado de trabalho — seja estágio, vaga efetiva ou aprendizagem — nossa escola disponibiliza o Mural de Oportunidades, onde divulgamos as vagas encaminhadas por empresas parceiras.

Fique à vontade para consultar o mural sempre que quiser! E, caso tenha dúvidas ou precise de orientação, entre em contato com nosso Orientador de Estágios, professor Thales Trocoletto, que está à disposição para ajudar.</p>
    </div>
</div>
    


    @endsection



