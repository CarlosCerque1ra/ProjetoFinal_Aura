<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'Sistema')</title>

	<!-- Bootstrap CSS (CDN) -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- ...existing code... (adicione outros CSS se precisar) -->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">Mural Vagas</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="mainNavbar">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item"><a class="nav-link" href="{{ url('/mural') }}">Mural</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/area_aluno') }}">Área do Aluno</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/informacoes') }}">Informações</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/documento-estagio') }}">Documento de Estágio</a></li>
				</ul>

				<ul class="navbar-nav ms-auto">
					@guest
						<li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Entrar</a></li>
					@else
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-bs-toggle="dropdown">
								{{ Auth::user()->nome ?? Auth::user()->email ?? 'Usuário' }}
							</a>
							<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
								<li><a class="dropdown-item" href="{{ url('/area-aluno') }}">Minha Área</a></li>
								<li>
									<form method="POST" action="{{ url('/logout') }}" class="d-inline">
										@csrf
										<button type="submit" class="dropdown-item">Sair</button>
									</form>
								</li>
							</ul>
						</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>

	<main class="py-4">
		<div class="container">
			<!-- Título da página -->
			@if(View::hasSection('title'))
				<div class="mb-3">
					<h1 class="h4">@yield('title')</h1>
				</div>
			@endif

			<!-- Mensagens de sessão (flash) -->
			@if(session('mensagem'))
				<div class="alert {{ session('tipo') ?? 'alert-info' }}">
					{{ session('mensagem') }}
				</div>
			@endif

			<!-- Conteúdo específico da view -->
			@yield('content')
		</div>
	</main>

	<footer class="bg-light text-muted py-3 mt-4">
		<div class="container text-center small">
			&copy; {{ date('Y') }} Mural Vagas — Todos os direitos reservados
		</div>
	</footer>

	<!-- Bootstrap JS (CDN) -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<!-- ...existing code... (adicione outros scripts se precisar) -->
</body>
</html>