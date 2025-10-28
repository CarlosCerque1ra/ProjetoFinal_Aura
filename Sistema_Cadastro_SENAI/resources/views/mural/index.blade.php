<!-- resources/views/users/index.blade.php -->
@extends('layouts.app')

@section('title', 'Página Inicial')

@push('styles')
<style>
  /* hr existente */
  hr {
    border: none;
    height: 1.5px;
    background-color: #000000ff;
  }

  /* Barra de pesquisa grande */
  .search-wrapper { width: 100%; max-width: 760px; }
  .search-input {
    border-radius: 30px 0 0 30px;
    border: 1px solid #d9d9d9;
    padding: 14px 18px;
    height: 48px;
  }
  .search-btn {
    background: #f5f5f5;
    border: 1px solid #d9d9d9;
    border-left: none;
    border-radius: 0 30px 30px 0;
    height: 48px;
    padding: 0 18px;
  }
  .filter-btn {
    color: #333;
    border-radius: 30px;
    background: #f5f5f5;
    border: 1px solid #d9d9d9;
    padding: 10px 20px;
    height: 48px;
  }

  /* Linha de cartões */
  .vacancy-row { display: flex; gap: 20px; flex-wrap: wrap; margin-top: 10px; }
  .vacancy-col { flex: 1 1 calc(50% - 10px); min-width: 280px; }

  /* Cartão com imagem de fundo */
  .vacancy-card {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    height: 260px; /* reduzido */
    background-size: cover;
    background-position: center;
    box-shadow: 0 6px 14px rgba(0,0,0,0.07);
  }
  /* Overlay sutil: reduz opacidade para deixar a imagem mais visível.
     Se preferir sem overlay, comente/remova esta regra. */
  /* .vacancy-card::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(255,255,255,0.28) 65%, rgba(0,0,0,0.08) 100%);
    pointer-events: none;
  } */

  /* Caixa branca com informações (à direita) */
  .info-box {
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
    background: #ffffff;
    width: 300px;
    max-width: 44%;
    padding: 12px 16px;
    border-radius: 10px;
    box-shadow: 0 6px 14px rgba(0,0,0,0.10);
    z-index: 2;
    font-size: 13px;
    color: #222;
    overflow: hidden; /* evita que o conteúdo vaze do box */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.info-box h5 {
    color: #e50914;
    font-weight: 700;
    font-size: 14px;
    margin-bottom: 8px;
}
.info-box hr {
    margin: 8px 0;
    border: none;
    height: 1px;
    background: #e6e6e6;
}
.info-box p {
    margin: 4px 0;
    line-height: 1.4;
}

  /* Botão vermelho menor no canto inferior esquerdo do cartão */
  .vacancy-cta {
    position: absolute;
    left: 12px;
    bottom: 12px;
    background: #e50914;
    border-color: #e50914;
    color: #fff;
    padding: 8px 12px;
    border-radius: 8px;
    z-index: 3;
    font-weight: 600;
    text-decoration: none;
    font-size: 13px;
  }
  .tamanho-card{
    height: 500px;
  }

  /* Responsividade: em telas menores a info-box fica estática abaixo (não flutuante) */
  @media (max-width: 991px) {
    .info-box {
      position: static;
      transform: none;
      width: 100%;
      margin-top: 12px;
      max-width: none;
    }
    .vacancy-card { height: auto; padding: 14px; display: flex; flex-direction: column; gap: 10px; }
    .vacancy-cta { position: static; display: inline-block; margin-top: 8px; }
    .vacancy-col { flex-basis: 100%; }
  }

  /* Centraliza modal e form */
  .modal-dialog-centered { display: flex; align-items: center; min-height: calc(100% - 1rem); }
  .modal-content.centered {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0;
    border-radius: 10px;
    max-width: 560px;
    width: 100%;
  }
  /* torna o header relativo para permitir título absoluto centralizado */
  .modal-header.centered {
    position: relative;
    width: 100%;
    border-bottom: none;
    padding: 1rem 1.25rem 0.25rem;
  }
  /* título central absoluto */
  .modal-title.centered {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    margin: 0;
    font-weight: 700;
  }
  /* botão fechar posicionado no canto direito sem deslocar o título */
  .modal-header.centered .btn-close {
    position: absolute;
    right: 12px;
    top: 12px;
  }

  .modal-body { width: 100%; padding: 0.75rem 1.25rem 1rem; display: flex; justify-content: center; }
  .modal-body form { width: 100%; max-width: 480px; display:flex; flex-direction:column; gap:12px; }

  .modal-body .form-group label { font-weight: 600; margin-bottom: 6px; }
  .modal-body .form-group input[type="text"],
  .modal-body .form-group input[type="email"],
  .modal-body .form-group input[type="file"],
  .modal-body .form-group input[type="tel"] {
    width: 100%;
    padding: 8px 10px;
    border-radius: 7px;
    border: 1px solid #cfcfcf;
    background-color: #e9e9e9;
  }

  .modal-footer.centered { width: 100%; justify-content: center; padding: 0.5rem 1.25rem 1rem; border-top: none; }
</style>
@endpush


@section('content')
    <div class="container mt-4" style="background-color: #ffffffff; border-radius: 15px; padding: 20px;">
        <div>
            <ul class="d-flex justify-content-between list-unstyled">
                <li><a href="{{ route('informacoes.index') }}" class="fw-bold" style="color: #000; margin-left: 70px;">Informações</a></li>
                <li>|</li>
                <li><a href="{{ route('mural.index') }}" class="fw-bold" style="color: #000;">Mural de oportunidades</a></li>
                <li>|</li>
                <li><a href="{{ route('documento_estagio.index') }}" class="fw-bold" style="color: #000; margin-right: 70px;">Documentos de Estágio</a></li>
            </ul>
        </div>
        <hr>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1 style="font-weight: bold;">Mural de Oportunidades</h1>
            <div class="d-flex flex-column gap-2">
                <p style="font-weight: bold;">A escola atua apenas como intermediária na divulgação das oportunidades de estágio, emprego e aprendizagem, não se responsabilizando pelos critérios de seleção definidos pelas empresas.</p>
                <p style="font-weight: bold;">Para as vagas de estágio, é imprescindível que o estudante leia atentamente o Manual de Estágio (Encontrado em <a href="{{ route('documento_estagio.index') }}" style="color: #ff0000;">Documentos de Estágio</a>) antes de comparecer à empresa.</p>
                <p style="font-weight: bold;">Além disso, recomenda-se procurar o Orientador de Estágios para receber as orientações necessárias quanto aos procedimentos e documentos exigidos.</p>
            </div>
        </div>
        <hr>
        <form method="GET" class="d-flex align-items-center gap-3 mb-4">
            <!-- Campo de pesquisa com lupa -->
            <div class="input-group me-3" style="width: 70%;">
                <input type="text" name="busca" id="busca" class="form-control" placeholder="Pesquise aqui..." 
                    style="border-radius: 30px 0 0 30px; border: 1px solid #d9d9d9; padding: 10px;">
                <span class="input-group-text" 
                    style="background: #f5f5f5; border: 1px solid #d9d9d9; border-left: none; border-radius: 0 30px 30px 0;">
                    <i class="bi bi-search"></i>
                </span>
            </div>

            <!-- Botão de filtro -->
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modalFiltro" style="color: #333; border-radius: 30px; background: #f5f5f5; border: 1px solid #d9d9d9; padding: 10px 20px;">
                <i class="bi bi-funnel-fill"></i> Filtrar
            </button>
        </form>

        <!-- cards de vagas -->
        <?php $mensagem = ''; ?>
        <div class="col-sm-12 row">
           <!-- Mensagens de sucesso/erro -->
            @if(session('mensagem'))
                <div class="alert {{ session('tipo') }}">
                    {{ session('mensagem') }}
                </div>
            @endif

            <!-- Erros de validação -->
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif

            @foreach($vagas as $vaga)
                <div class="col-sm-5 mb-2" style="background-color: #d9d9d9; padding: 10px; border-radius: 7px; margin-left:65px; margin-bottom:40px;">
                    <div class="vacancy-card tamanho-card" style="background-image: url('{{ asset('img/fundo_card.jpg') }}');">
                        <div>
                            <div class="info-box d-flex align-items-start justify-content-start"
                                style="margin-right: 10px; min-height:270px; margin-top: 20px; padding:8px; max-width: 400px; min-width: 340px;">
                                <h5>
                                    <i class="bi bi-pin-angle" style="font-size: 25px;"></i>
                                    {{ $vaga->tipo }} - {{ $vaga->titulo }}
                                </h5>
                                <hr>
                                <p><strong>Requisitos:</strong> {{ $vaga->requisitos }}</p>
                                <p><strong>Atividades:</strong> {{ $vaga->atividades }}</p>
                            </div>
                            <p style="font-size: 12px; position: relative; margin-left: 200px; margin-top: 420px;">
                                <strong>Informações adicionais</strong><br>
                                <strong>{{ $vaga->empresa }}</strong><br>
                                <strong>Telefone para contato:</strong> {{ $vaga->telefone }}<br>
                                <strong>Publicado em:</strong> {{ $vaga->publicacao }}
                            </p>
                        </div>
                    </div>
                    @if(auth()->user())
                        <button class="btn btn-danger mt-2 ms-2" data-bs-toggle="modal" data-bs-target="#modalTrabalho-{{ $vaga->id }}">
                            Entrar em contato
                        </button>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-danger mt-2 ms-2">Entrar em contato</a>
                     @endif
                </div>
            @endforeach
        </div>
    </div>




    <!-- modals -->
    @foreach($vagas as $vaga)
        @if($vaga->tipo != 'ESTAGIO')
            <?php $tipo = 'Emprego'; ?>
        @else
            <?php $tipo = 'Estágio'; ?>
        @endif
            <!-- Modal exclusivo para esta vaga -->
            <div class="modal fade" id="modalTrabalho-{{ $vaga->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content centered" role="document" style="background-color: #e9e9e9;">
                        <div class="modal-header centered">
                            <h5 class="modal-title centered mt-4">Enviar dados <?php echo $tipo ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('cadastrar') }}" enctype="multipart/form-data"  class="p-0">
                                @csrf
                                <div class="form-group mb-2 d-flex flex-column">
                                    <label for="nome">Nome:</label>
                                    <input name="nome" id="nome" type="text" value="{{ auth()->user()->nome }}" placeholder="Digite aqui..." required>
                                </div>
                                <div class="form-group mb-2 d-flex flex-column">
                                    <label for="email">Email:</label>
                                    <input name="email" id="email" type="email" placeholder="Digite aqui..." required>
                                </div>
                                <div class="form-group mb-2 d-flex flex-column">
                                    <label for="telefone">Telefone:</label>
                                    <input name="telefone" id="telefone" type="tel" placeholder="Digite aqui..." required>
                                </div>
                                <div class="form-group mb-2 d-flex flex-column">
                                    <label for="atuacao">Área de atuação:</label>
                                    <input name="atuacao" id="atuacao" type="text" placeholder="Digite aqui..." required>
                                </div>
                                <div class="form-group mb-2 d-flex flex-column">
                                    <label for="curriculo">Envie seu currículo:</label>
                                    <input name="curriculo" id="curriculo" type="file" required>
                                </div>
                                <input type="hidden" name="id_aluno" value="{{ auth()->id() }}">
                                <input type="hidden" name="id_vaga" value="{{ $vaga->id ?? 0 }}">
                                <div class="modal-footer centered">
                                    <button type="submit" class="btn btn-danger">Enviar dados</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal de Filtro -->
    <div class="modal" tabindex="-1" id="modalFiltro" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Filtros</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="GET">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filtro[]" value="Emprego" id="emprego" 
                                {{ in_array('Emprego', $checkbox ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label" for="emprego">Emprego</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filtro[]" value="Estagio" id="estagio"
                                {{ in_array('Estagio', $checkbox ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label" for="estagio">Estágio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="filtro[]" value="Aprendizagem" id="aprendizagem"
                                {{ in_array('Aprendizagem', $checkbox ?? []) ? 'checked' : '' }}>
                            <label class="form-check-label" for="aprendizagem">Aprendizagem</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Filtrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
