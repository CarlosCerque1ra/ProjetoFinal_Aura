<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Senai - Login</title>
    <style>
        body{
            overflow-y: hidden;
        }
        a {
            text-decoration: none;
            color: #858585ff;

        }
        a:hover{
            color: #616161ff;
        }
        input:focus{
            border-color: #3d07ffff;
        }
        .link{
            text-decoration: none;
            color: #858585ff;
            font-size: 12px;
        }
        .link:hover{
            color: #D8240B;
        }
    </style>
</head>
<body style="background-color: #d5d5d5;">
    
    <header class="d-flex gap-2" style="background-color: #d5d5d5; height:20%;">
        <a href="https://www.fiesp.com.br/" target="_blank" class="ms-5"><i>FIESP</i></a>
        <a href="https://www.ciesp.com.br/" target="_blank" class="ms-5"><i>CIESP</i></a>
        <a href="https://www.sesisp.org.br/" target="_blank" class="ms-5"><i>SESI</i></a>
        <a href="https://www.sp.senai.br/" target="_blank" class="ms-5"><i>SENAI</i></a>
        <a href="http://fiesp.com.br/instituto-roberto-simonsen-irs/" target="_blank" class="ms-5"><i>IRIS</i></a>
    </header>
    <div style="background-image: url('{{ asset('img/fundo-form.jpg') }}'); background-size: 99.9%; background-repeat: no-repeat;">
        <div style="margin-left: 38%;">
            <div>
                <h1 class="mb-0" style="font-size: 15px; font-family:'Courier New', Courier, monospace">Bem-Vindo ao</h1>
                <h2 class="" style="color: #D8240B; font-size: 28px; font-weight: bold;"><i>PORTAL EDUCACIONAL</i></h2>
                <img src="{{ asset('img/sesisenai.png') }}" class="mb-3" style="max-width: 40%;" alt="Logo">
            </div>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h5 class="mb-5" style="font-weight: normal;">FAÇA LOGIN E CONHEÇA AS NOVIDADES.</h5>
                @if($errors->any())
                    <div class="alert alert-danger" style="width: 335px;">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif
                <div class="input-grup d-flex flex-column mb-3">
                    <label for="cpf">Digite seu CPF: *</label>
                    <input type="text" class="mb-3" name="cpf" id="cpf" placeholder="___.___.___-__" style="max-width: 300px; height: 40px;">
                </div>
                <div class="input-grup d-flex flex-column mb-3">
                    <label for="senha">Digite sua Senha: *</label>
                    <input type="password" class="mb-3" name="senha" id="senha" placeholder="********" style="max-width: 300px; height: 40px;">
                </div>
                <button type="submit" class="btn btn-danger pb-2" style="width: 15%; font-weight: 10px; background-color: #D8240B;">
                    <i class="bi bi-arrow-up-right-square"></i>ENTRAR
                </button>
            </form>

        </div>
        <footer class="mt-3" style="background-color: #d5d5d5;">
            <div class="d-flex justify-content-beetween">
                <div class="gap-0 justify-content-center" style="margin-left: 3%;">
                    <p style="font-size: 11px;">Copyright 2015-2018 © Todos os direitos reservados. Versão - 1.12.2.7 / PP6</p>
                    <p style="font-size: 11px;">O conteúdo do site sesisenaisp.org.br não pode ser editado, copiado ou distribuído sem expressa autorização do Sesi-SP e Senai-SP.</p>
                </div>
                <div class="d-flex gap-4 mt-4" style="margin-left: 15%;">
                    <a class="link" href="#" style="color: #D8240B;">ACESSE TAMBÉM</a>
                    <a class="link" href="https://www.ciesp.com.br/" target="_blank">FIESP</a>
                    <a class="link" href="https://www.ciesp.com.br/" target="_blank">CIESP</a>
                    <a class="link" href="https://www.sesisp.org.br/" target="_blank">SESI</a>
                    <a class="link" href="https://www.sp.senai.br/" target="_blank">SENAI</a>
                    <a class="link" href="http://fiesp.com.br/instituto-roberto-simonsen-irs/" target="_blank">IRIS</a>
                </div>
            </div>
        </footer>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>