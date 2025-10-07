<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SENAI')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body { background: #dadadaff; }

        li { list-style: none; 
        
        }

        i{
            cursor: pointer;
            color: white;
        }

        .cimah {
            background-color: #FF0000;
            color: white;
        }

        .cimah a { color: white; }

        a { text-decoration: none; }

        .baixoh {
            background-color: #fff;
            height: 90px;
            display: flex;
            align-items: end;
            justify-content: center;
            border-bottom: #FF0000 3px solid;
        }

        .baixoh a { color: black; }

        header {
        position: sticky;
        top: 0;
        z-index: 1000; /* Garante que fique acima do conteúdo */
        background: white; /* Ou a cor do seu header */
        }
        /* Footer styles similar to SENAI design */
        .senai-footer-top { background: #e70012; min-height: 46px; }
        .senai-footer-mid { background: #b2222b; }
        .senai-footer-mid h5 { color: #fff; }
        .senai-footer-mid p { color: #fff; opacity: 0.95; }
        .senai-footer-bottom { background: #e70012; }
        .footer-links a { text-decoration: none; }
        @media (max-width: 768px) {
            .senai-footer-mid .row > [class*='col-'] { text-align: center; }
        }
    </style>

    @stack('styles') <!-- Para estilos adicionais -->
</head>
<body>
    <header>
        <div class="container-fluid p-0">
            <div class="cimah d-flex justify-content-end p-1"> 
                <ul class="nav flex-row gap-2">
                    <li class="nav-item">FIESP</li>
                    <li class="nav-item">CIESP</li>
                    <li class="nav-item">SESI</li>
                    <li class="nav-item">SENAI</li>
                    <li class="nav-item me-2">IRS</li>
                    <li class="nav-item"><a href=""><i class="bi bi-facebook"> |</i></a></li>
                    <li class="nav-item"><a href=""><i class="bi bi-twitter"> |</i></a></li>
                    <li class="nav-item"><a href=""><i class="bi bi-youtube"> |</i></a></li>
                    <li class="nav-item"><a href=""><i class="bi bi-linkedin"> |</i></a></li>
                    <li class="nav-item"><a href=""><i class="bi bi-instagram"> |</i></a></li>
                    <li class="nav-item"><a href=""><i class="bi bi-whatsapp me-3"></i></a></li>  
                </ul>
            </div>
            <div class="baixoh d-flex flex-row align-items-end" style="height:70px;">
                <img src="{{ asset('img/senai.png') }}" alt="logo" style="height:50px; width:auto; margin-right:30px; margin-left:10px;">
                <div class="d-flex justify-content-center w-100">
                    <ul class="nav flex-row gap-4 align-items-end mb-0">
                        <li class="nav-item"><a href="">Cursos</a></li>
                        <li class="nav-item"><a href="">Processo Seletivo</a></li>
                        <li class="nav-item"><a href="">O SENAI</a></li>
                        <li class="nav-item"><a href="">Para a sua empresa</a></li>
                        <li class="nav-item"><a href="">Unidades</a></li>
                        <li class="nav-item"><a href="">Transparência</a></li>
                        <li class="nav-item"><a href="">Fale conosco</a></li>
                        <li class="nav-item d-flex align-items-center" style="gap:8px;">
                            <i class="bi bi-search" style="font-size:1.5rem;"></i>
                            <span style="border-left:2px solid #222; height:24px; margin:0 8px;"></span>
                            <i class="bi bi-person" style="font-size:1.5rem;"></i>
                            <span class="ms-1">SOU ALUNO</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="container mt-5">
        @yield('content') <!-- Aqui entra o conteúdo da página -->
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts') <!-- Para scripts adicionais -->

    <footer class="mt-5">
        @stack('footer')

        <!-- Top bright red strip -->
        <div class="senai-footer-top w-100">
            <div class="container d-flex justify-content-center py-2">
                <!-- social icons could go here -->
                 <ul class="nav flex-row gap-4">
                    <li class="nav-item"><a href=""><i class="bi bi-facebook"></i></a></li>
                    <li></li>
                    <li class="nav-item"><a href=""><i class="bi bi-twitter"></i></a></li>
                    <li></li>
                    <li class="nav-item"><a href=""><i class="bi bi-youtube"></i></a></li>
                    <li></li>  
                    <li class="nav-item"><a href=""><i class="bi bi-linkedin"></i></a></li>
                    <li></li>
                    <li class="nav-item"><a href=""><i class="bi bi-instagram"></i></a></li>
                    <li></li>
                    <li class="nav-item"><a href=""><i class="bi bi-whatsapp me-3"></i></a></li>  
                </ul>
            </div>
        </div>

        <!-- Middle main footer (dark red) -->
        <div class="senai-footer-mid w-100 text-white">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <h5 class="fw-bold" style="font-size: 17px;">EDIFÍCIO SEDE FIESP</h5>
                        <p class="mb-1">Av. Paulista, 1313, São Paulo/SP</p>
                        <p class="mb-0">CEP 01311-923</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <h5 class="fw-bold">CENTRAL DE RELACIONAMENTO</h5>
                        <p class="mb-1">(11) 3322-0050 (Telefone/WhatsApp)</p>
                        <p class="mb-0">0800-055-1000 (Interior de SP, somente telefone fixo)</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <ul class="nav justify-content-center flex-wrap gap-4 footer-links">
                            <li class="nav-item"><a href="#" class="text-white fw-bold">Unidades</a></li>
                            <li class="nav-item"><a href="#" class="text-white fw-bold">O SENAI</a></li>
                            <li class="nav-item"><a href="#" class="text-white fw-bold">Perguntas Frequentes</a></li>
                            <li class="nav-item"><a href="#" class="text-white fw-bold">Fale Conosco</a></li>
                            <li class="nav-item"><a href="#" class="text-white fw-bold">Transparência</a></li>
                            <li class="nav-item"><a href="#" class="text-white fw-bold">Para a sua empresa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom copyright bright red strip -->
        <div class="senai-footer-bottom w-100 text-white text-center py-3">
            <div class="container">
                <small>Copyright 2025 © Todos os direitos reservados.</small>
            </div>
        </div>
    </footer>
</body>
</html>
