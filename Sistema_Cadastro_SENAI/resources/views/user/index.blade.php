@extends('layouts.app')

@section('content')
<div class="container-fluid p-0" style="background:#f5f5f5;min-height:100vh;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight:bold;color:#e30613;font-size:2rem;">SENAI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Processo Seletivo</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">O SENAI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Para a sua empresa</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Unidades</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Transparência</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Fale conosco</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person"></i> SOU ALUNO</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row m-0">
        <div class="col-md-3 col-12 bg-danger text-white p-4" style="min-height:400px;">
            <ul class="nav flex-column">
                <li class="nav-item mb-3"><a class="nav-link text-white fw-bold" href="#">Home</a></li>
                <li class="nav-item mb-3"><a class="nav-link text-white" href="#">Institucional</a></li>
                <li class="nav-item mb-3"><a class="nav-link text-white" href="#">Informações aos Alunos</a></li>
                <li class="nav-item mb-3"><a class="nav-link text-white" href="#">Horário de Atendimento</a></li>
                <li class="nav-item mb-3"><a class="nav-link text-white" href="#">Procure vagas</a></li>
            </ul>
        </div>
        <div class="col-md-9 col-12 p-4">
            <div class="card shadow-sm mb-4">
                <img src="https://santandre.senai.br/images/unidades/sa.jpg" class="card-img-top" alt="Escola SENAI A. Jacob Lafer">
                <div class="card-body">
                    <h5 class="card-title">SENAI Santo André</h5>
                    <h2 class="fw-bold">Escola SENAI "A. Jacob Lafer"</h2>
                    <a href="#" class="btn btn-danger mt-3">CONHEÇA NOSSOS CURSOS</a>
                </div>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <span class="me-2">Fale conosco</span>
                <span class="badge bg-danger">Estamos online</span>
            </div>
        </div>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Homepage</title>
</head>
<body>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
