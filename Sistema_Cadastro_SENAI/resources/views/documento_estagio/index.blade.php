@extends('layouts.app')

@section('title', 'Página Inicial')

@push('styles')
<style>
    p{
        text-align: left;
        display: flex;
    }
     
    .container {
       
    } 
</style>

@endpush


@section('content')

    <div class="container my-4 container" style="background-color: #ffffffff; border-radius: 15px; padding: 20px;">
        <div>
            <ul class="d-flex justify-content-between list-unstyled">
                <li><a href="{{ route('informacoes.index') }}" class="fw-bold" style="color: #000;">Informações</a></li>
                <li>|</li>
                <li><a href="{{ route('mural.index') }}" class="fw-bold" style="color: #000;">Mural de oportunidades</a></li>
                <li>|</li>
                <li><a href="{{ route('documento_estagio.index') }}" class="fw-bold" style="color: #000;">Documentos de Estágio</a></li>
            </ul>
        </div>
        <hr>
        <div class="d-flex flex-column justify-content-center ">
            <h1 class="align-self-center mb-4" style="font-weight: bold; align-self-center;">Documentos de Estágio</h1>
            <div class="d-flex flex-column gap-3">
                <div class="align-items-left ms-3 ">
                    <h2 class="mb-4" style="font-weight: bold; font-size:25px;">Documentos de Estágio para alunos dos Cursos Técnicos</h2>
                    <p style="font-weight: bold;">Acesse o&nbsp;<a href="https://cronos-media.sesisenaisp.org.br/api/media/1-0/files?file=arq_153_240821_0d8be49d-94e4-41be-8a98-083852d15dc8.pdf&disposition=false " style="color: #ff0000; text-decoration: underline; font-weight: normal;" target="_blank;"> Regulamento de Estágio (Cursos Técnicos)</a></p>
                    <p style="font-weight: bold;">Acesse o&nbsp;<a href="https://cronos-media.sesisenaisp.org.br/api/media/1-0/files?file=arq_153_240612_a7c7341e-e6bc-4dae-b78e-a03ac8e088f0.docx" style="color: #ff0000; text-decoration: underline; font-weight: normal;" target="_blank;">Termo de Compromisso de Estágio Curso Técnico - Aluno Maior</a></p>
                    <p style="font-weight: bold;">Acesse o&nbsp;<a href="https://cronos-media.sesisenaisp.org.br/api/media/1-0/files?file=arq_153_240612_120333a5-2231-444c-aa9c-d42bf5fcb918.docx" style="color: #ff0000; text-decoration: underline; font-weight: normal;" target="_blank;">Termo de Compromisso de Estágio Curso Técnico - Aluno Menor</a></p>
                    <p style="font-weight: bold;">Acesse o&nbsp;<a href="https://cronos-media.sesisenaisp.org.br/api/media/1-0/files?file=arq_153_240614_bfa514cc-6609-458b-b56f-d948f8624c81.docx" style="color: #ff0000; text-decoration: underline; font-weight: normal;" target="_blank;">Termo de Compromisso de Estágio com agente integração - Aluno Maior</a></p>
                    <p style="font-weight: bold;">Acesse o&nbsp;<a href="https://cronos-media.sesisenaisp.org.br/api/media/1-0/files?file=arq_153_240614_2a8bdffc-0669-4402-b74e-cb9d593a3267.docx" style="color: #ff0000; text-decoration: underline; font-weight: normal;" target="_blank;">Termo de Compromisso de Estágio com agente integração - Aluno Menor</a></p>
                    <p style="font-weight: bold;">Acesse o&nbsp;<a href="https://cronos-media.sesisenaisp.org.br/api/media/1-0/files?file=arq_153_250417_530fbc66-c7fe-4a70-aed7-026534351c6d.docx" style="color: #ff0000; text-decoration: underline; font-weight: normal;" target="_blank;">Termo Aditivo de TCE - Aluno Menor</a></p>
                    <p style="font-weight: bold;">Acesse o&nbsp;<a href="https://cronos-media.sesisenaisp.org.br/api/media/1-0/files?file=arq_153_250417_b8b80554-c5d5-422c-b0d1-a8a2a4478ba3.docx" style="color: #ff0000; text-decoration: underline; font-weight: normal;" target="_blank;">Termo Aditivo de TCE - Aluno Maior</a></p>
                </div>
            </div>
        </div>
        <hr>
    </div>
    @endsection
