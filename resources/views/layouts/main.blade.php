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
                <a href="/" class="navbar-brand"></a>
                    <img src="/img/cavalo.jpg" alt="HDC Events">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Criar Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Entrar e Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- diretiva para adicionar conteúdos dinamicamente-->
    @yield('content')
    <footer>
        <p>HDC events &copy; 2026 </p>
    </footer>
</body>
