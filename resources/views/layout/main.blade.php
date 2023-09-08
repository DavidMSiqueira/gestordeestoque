<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- CSS Bootstrap -->

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand"><img src="/img/msc_logo.png" alt="MSC"></a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="/" class="nav-link">Login</a></li>
                <li class="nav-item"><a href="/storage/products" class="nav-link">Estoque</a></li>                
                <li class="nav-item"><a href="/" class="nav-link">Relatorios</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>MSC &copy; 2023</p>
    </footer>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>