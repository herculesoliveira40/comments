<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="#.png" sizes="32x32" type="image/png">
    <title>@yield('title') :D</title>

    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>


<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="btn btn-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-text" aria-current="page">
            <!-- Login -->
            @include('helpers.modal')
        </a>
    </div>
</nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        
    </div>
    
    <div class="offcanvas-body">
        <div>
            Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists,
            etc.
        </div>
        <div class="dropdown mt-3">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/users"> Users </a></li>
                <li><a class="dropdown-item" href="/comments"> Comments </a></li>
            </ul>
        </div>
    </div>
</div>

<body>
    
<main>    
    <div>                {{-- content --}}
        @yield('content')
    </div>
</main> 
<footer >
    <p class="text-center bg-light text-info"> 2023 &copy; <a href="https://github.com/herculesoliveira40" target="_blank"> <i class="bi bi-github"></i> </a> </strong> </p>
</footer>
</body>
<script type="text/javascript" src="/js/script_modal.js"></script>

</html>
