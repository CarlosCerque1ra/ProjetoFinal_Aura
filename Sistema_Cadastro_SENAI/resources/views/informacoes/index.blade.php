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
    
    .titulo{
        text-align: center;
    }

  /* Estilização visual do modal conforme design fornecido */
  #vagaModal .modal-dialog {
    max-width: 720px;
    margin: 1.5rem auto;
  }

  #vagaModal .modal-content {
    border-radius: 14px;
    background: #ffffff;
    box-shadow: 0 10px 30px rgba(0,0,0,0.25);
    
    overflow: hidden;
  }

  #vagaModal .modal-header {
    padding-top: 18px;
    padding-bottom: 8px;
  }

  #vagaModal .modal-title {
    font-size: 1.6rem;
    font-weight: 800;
    letter-spacing: 0.5px;
    color: #111827;
  }

  /* Botão fechar grande em X preto */
  #vagaModal .btn-close {
    background: transparent;
    border: none;
    width: auto;
    height: auto;
    padding: 0.25rem 0.5rem;
    line-height: 1;
  }

  #vagaModal .btn-close::after {
    content: "✕";
    font-size: 1.6rem;
    color: #000;
    font-weight: 700;
  }

  /* Inputs estilizados: fundo cinza, bordas arredondadas */
  #vagaModal .form-control,
  #vagaModal textarea.form-control {
    background: #efefef;
    border: 1px solid #bfbfbf;
    border-radius: 10px;
    padding: 10px 14px;
    box-shadow: none;
  }

  #vagaModal label {
    font-weight: 700;
    font-size: 0.85rem;
    margin-bottom: 6px;
    display: block;
  }

  #vagaModal .modal-body {
    padding: 1rem 2rem 1.5rem 2rem;
  }

  /* Botão de envio vermelho centralizado com cantos arredondados */
  #vagaModal .modal-footer {
    border-top: none;
    padding: 1rem 2rem 2rem 2rem;
    display: flex;
    justify-content: center;
  }

  #vagaModal .modal-footer .btn-success {
    background: #ff0000 !important;
    border: none !important;
    width: 220px;
    border-radius: 8px !important;
    box-shadow: none !important;
  }

  /* Ajustes responsivos */
  @media (max-width: 576px) {
    #vagaModal .modal-dialog { max-width: 92%; }
    #vagaModal .modal-title { font-size: 1.2rem; }
    #vagaModal .modal-footer .btn-success { width: 100%; }
  }


</style>
@endpush 


@section('content')
    <div class="sec1 container mt-5">
        <div class="estagio">
            <div>
                <ul class="d-flex list-unstyled gap-5 d-flex-row justify-content-between pt-3">
                    <li class="mt-3"><a href="{{ route('informacoes.index') }}" style="color: #000;">Informações</a></li>
                    <li class="mt-3">|</li>
                    <li class="mt-3"><a href="{{ route('mural.index') }}" style="color: #000;">Mural de oportunidades</a></li>
                    <li class="mt-3">|</li>
                    <li class="mt-3"><a href="{{ route('documento_estagio.index') }}" style="color: #000;">Documentos de Estágio</a></li>
                </ul>
            </div>
        </div>
        <hr>

        <!-- Parte dois -->
        <div class="sec2 text-center d-flex flex-column justify-content-center">
            <h1>Estágio/Emprego</h1>
            <br>
        </div>

        <!-- 2 Part -->
        <div class="par_2" style="padding: 30px;">
            <h5 class="align-items-center d-flex">Atenção, alunos e ex-alunos!</h5>
            <p><br>Se você está em busca de uma oportunidade no mercado de trabalho — seja estágio, vaga efetiva ou aprendizagem — nossa escola disponibiliza o Mural de Oportunidades, onde divulgamos as vagas encaminhadas por empresas parceiras.<br> <br>
            Fique à vontade para consultar o mural sempre que quiser! E, caso tenha dúvidas ou precise de orientação, entre em contato com nosso Orientador de Estágios, professor Thales Trocoletto, que está à disposição para ajudar.</p>
        </div>

        <!-- 3 Part -->
         <div class="sec2 text-center d-flex flex-column justify-content-center">
            <h2 style="font-weight: bold; font-size:30px;">Orientação de Estágios <br> Profº Tales Trocoletto</h2>
            <p>Email:<a href=""  style="color:#ff0000;"> estagio118@sp.senai.br</a></p>
            <hr>

        </div>

        <!-- 4 part -->
         <div class="par_2" style="padding: 30px;">
            <h1 class="text-center d-flex flex-column justify-content-center mb-1">Cadastro de Vagas - Empresas</h1>
            <br>
            <p><br>Convidamos as empresas que desejarem divulgar oportunidades de estágio, emprego efetivo ou aprendizagem a preencherem o formulário clicando no botão abaixo:<br>A participação das empresas é super importante para o desenvovimento profissional de todos os estudantes dos cursos SENAI-SP.</p>
        </div>

        <!-- Botão para abrir o modal -->
    <div class="container text-center">
      <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#vagaModal" style="background-color: #ff0000; color: white; font-weight: bold; height: 35px; width: 300px; border-radius: 8px; margin:20px;">
        Cadastrar Vaga
      </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="vagaModal" tabindex="-1" aria-labelledby="vagaModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg"> <!-- modal-lg para maior espaço -->
        <div class="modal-content">
          <div class="modal-header position-relative">
            <button type="button" class="btn-close position-absolute end-0 top-50 translate-middle-y" data-bs-dismiss="modal" aria-label="Fechar"></button>
            <h5 class="modal-title titulo mx-auto text-center" id="vagaModalLabel">Adicionar Nova Vaga</h5>
          </div>
          <div class="modal-body">
            <form>
              <!-- Nome da Empresa -->
              <div class="mb-3">
                <label for="empresa" class="form-label">Nome da Empresa</label>
                <input type="text" class="form-control" id="empresa" required>
              </div>

              <!-- E-mail para contato -->
              <div class="mb-3">
                <label for="email" class="form-label">E-mail para Contato</label>
                <input type="email" class="form-control" id="email" required>
              </div>

              <!-- Telefone para contato -->
              <div class="mb-3">
                <label for="telefone" class="form-label">Telefone para Contato</label>
                <input type="tel" class="form-control" id="telefone">
              </div>

              <!-- Nome do Responsável -->
              <div class="mb-3">
                <label for="responsavel" class="form-label">Nome do Responsável</label>
                <input type="text" class="form-control" id="responsavel">
              </div>

              <!-- Título da Vaga -->
              <div class="mb-3">
                <label for="tituloVaga" class="form-label">Título da Vaga</label>
                <input type="text" class="form-control" id="tituloVaga" required>
              </div>

              <!-- Tipo de Vaga -->
              <div class="mb-3">
                <label for="tipoVaga" class="form-label">Tipo de Vaga</label>
                <select class="form-select" id="tipoVaga" required>
                  <option value="">Selecione...</option>
                  <option value="emprego">Emprego</option>
                  <option value="estagio">Estágio</option>
                  <option value="aprendizagem">Aprendizagem</option>
                </select>
              </div>

              <!-- Requisitos -->
              <div class="mb-3">
                <label for="requisitos" class="form-label">Requisitos</label>
                <textarea class="form-control" id="requisitos" rows="3"></textarea>
              </div>

              <!-- Atividades -->
              <div class="mb-3">
                <label for="atividades" class="form-label">Atividades</label>
                <textarea class="form-control" id="atividades" rows="3"></textarea>
              </div>

              <!-- Horário -->
              <div class="mb-3">
                <label for="horario" class="form-label">Horário</label>
                <input type="text" class="form-control" id="horario">
              </div>

              <!-- Benefícios (incluindo salário) -->
              <div class="mb-3">
                <label for="beneficios" class="form-label">Benefícios (incluir salário se desejar)</label>
                <textarea class="form-control" id="beneficios" rows="3"></textarea>
              </div>

              <!-- Botões -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

            </div>



        @endsection



