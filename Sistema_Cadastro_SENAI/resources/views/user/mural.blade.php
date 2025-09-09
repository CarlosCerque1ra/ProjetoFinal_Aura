<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('title', 'Página Inicial')

@push('styles')

@endpush


@section('content')

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
    <h1 style="font-weight: bold;">Mural de Oportunidades</h1>
    <p>A escola atua apenas como intermediária na divulgação das oportunidades de estágio, emprego e aprendizagem, não se responsabilizando pelos critérios de seleção definidos pelas empresas.
        Para as vagas de estágio, é imprescindível que o estudante leia atentamente o Manual de Estágio (Encontrado em Documentos de Estágio) antes de comparecer à empresa.
         Além disso, recomenda-se procurar o Orientador de Estágios para receber as orientações
        necessárias quanto aos procedimentos e documentos exigidos.
    </p>
    <hr>
    <div>
        <input type="text" placeholder="pesquise aqui..." class="d-flex">
        <button style="color: #d9d9d9;"><i class="bi bi-funnel-fill"></i>Filtrar</button>
    </div>
   
    <div class="d-flex col-sm-12">
        <div class="col-sm-6">
            <div>
                <div>
                    <i class="bi bi-pin-angle" style="color: #FF0000;">EMPREGO - MONTADOR DE MÓVEIS(Nº016/2025)</i>
                    <hr>
                    <p>
                        <strong>Requisitos:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis commodi nesciunt quae saepe voluptate eveniet accusantium eos libero maiores necessitatibus corrupti animi, eius qui iste voluptatem, inventore dolor? Commodi, suscipit!
                        <strong>Atividades:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quidem, iusto quas quia tempora, laborum voluptatibus nesciunt consequatur unde neque asperiores! Voluptatem, unde harum hic esse temporibus veritatis vel amet.
                    </p>
                    <p>
                        <strong>Horário:</strong> 08:00 às 18:00.
                        <strong>Beneficios:</strong> salário a combinar. Vale transporte.
                    </p>
                </div>
                <div>
                    <p><strong>Informações adicionais</strong></p>
                    <p>
                        <strong>NAH PLAN FÁBRICA DE MÓVEIS PLANEJADOS</strong>
                        <strong>Enviar curriculo para:</strong> nahplan.scs@gmail.com
                        <strong>Telefone para contato:</strong> 11948808055
                        <strong>Falar com:</strong> Franciélli
                        <strong>Publicado em:</strong> 09/09/2025
                    </p>
                </div>
            </div>
            <div class="d-flex">
                <button class="btn" style="color: #FF0000;">Entre em contato</button>
                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                <button class="btn btn-warning"><i class="bi bi-pencil"></i></button>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
                <div>
                    <i class="bi bi-pin-angle" style="color: #FF0000;">EMPREGO - MONTADOR DE MÓVEIS(Nº016/2025)</i>
                    <hr>
                    <p>
                        <strong>Requisitos:</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis commodi nesciunt quae saepe voluptate eveniet accusantium eos libero maiores necessitatibus corrupti animi, eius qui iste voluptatem, inventore dolor? Commodi, suscipit!
                        <strong>Atividades:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quidem, iusto quas quia tempora, laborum voluptatibus nesciunt consequatur unde neque asperiores! Voluptatem, unde harum hic esse temporibus veritatis vel amet.
                    </p>
                    <p>
                        <strong>Horário:</strong> 08:00 às 18:00.
                        <strong>Beneficios:</strong> salário a combinar. Vale transporte.
                    </p>
                </div>
                <div>
                    <p><strong>Informações adicionais</strong></p>
                    <p>
                        <strong>NAH PLAN FÁBRICA DE MÓVEIS PLANEJADOS</strong>
                        <strong>Enviar curriculo para:</strong> nahplan.scs@gmail.com
                        <strong>Telefone para contato:</strong> 11948808055
                        <strong>Falar com:</strong> Franciélli
                        <strong>Publicado em:</strong> 09/09/2025
                    </p>
                </div>
            </div>
            <div class="d-flex">
                <button class="btn" style="color: #FF0000;">Entre em contato</button>
                <button class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                <button class="btn btn-warning"><i class="bi bi-pencil"></i></button>
            </div>
        </div>
    </div>
    @endsection
