<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- fonte do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- css da aplicação  -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>

</html>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand"><img src="/img/logo.jpg" alt="HDC Events"></a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/"
                            class="nav-link fs-5 {{ request()->is('/') ? 'fw-bold text-primary ' : '' }}">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create"
                            class="nav-link fs-5 {{ request()->is('events/create') ? 'fw-bold text-primary ' : '' }}">Criar
                            Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/products/create"
                            class="nav-link fs-5 {{ request()->is('products/create') ? 'fw-bold text-primary ' : '' }}">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact/create"
                            class="nav-link fs-5 {{ request()->is('contact/create') ? 'fw-bold text-primary ' : '' }}">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- diretiva para adicionar conteúdos dinamicamente-->
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    @if (session('msg'))
                        <div class="col-6 alert alert-{{session('msg')['color']}} mt-2 alert-dismissible fade show" role="alert">
                            <strong>{{session('msg')['text']}}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>HDC events &copy; 2026 </p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
</body>
