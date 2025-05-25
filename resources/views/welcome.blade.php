<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Styles / Scripts -->
    {{--     @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    
       
    @endif --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

    {{-- Navbar bootsatp --}}
    <!-- Bootstrap 5 -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container bg-transparent">
            <a class="navbar-brand fw-bold" href="#">Nanhonia Travel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Visão</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex ms-lg-auto">
                <a href="#" class="btn btn-outline-primary me-2">Login</a>
                <a href="#" class="btn btn-primary">Registar</a>
            </div>
        </div>
    </nav>



    {{-- Hero Section --}}
    <section class="hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ asset('video/6268786 Woman Passport 3840X2160.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="hero-content container">
            <div class="row">
                <div class="col-md-12">
                    <h1>NANHONIA TRAVEL</h1>
                    <p class="lead">AGÊNCIA DE VIAGENS & TURISMO, RENT A CAR</p>

                </div>
                <div class="col-md-12">
                    <a href="#" class="btn btn-primary btn-lg">Reservar</a>

                </div>
            </div>
        </div>
    </section>


    {{-- Services --}}
    <section class="services">
        <div class="container">
            <div class="row">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('images/services/travel-adventure-with-baggage.jpg') }}"
                                class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h1 class="card-title text-dark">Nossos Serviços</h1>
                                {{-- List of services with divs --}}
                                <div class="row mt-3">
                                    <div class="col-md-12 mb-3">
                                        <ul class="list-unstyled shadow-sm p-3">
                                            <h5>Agência de viagens</h5>
                                            <li><b>Passagens Aéreas:</b> Reservas e emissão de bilhetes nacionais e
                                                internacionais.
                                            </li>

                                        </ul>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

    {{--  <section class="places">
        <div class="container">
            <h2 class="text-center mb-4">Nossos Serviços</h2>
            <div class="row">
                <div class="card-group gap-4">

                    <div class="card custom-card">
                        <img src="https://img.freepik.com/free-photo/crossroad-car-safari-scene_23-2151822322.jpg?uid=R22963724&ga=GA1.1.138227323.1748126761&semt=ais_hybrid&w=740"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Agência de viagens</h5>
                            <h3 class="card-subtitle">Card subtitle</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, reprehenderit? Earum
                                molestiae, dignissimos quasi pariatur soluta accusamus repellendus quisquam accusantium
                                asperiores vitae, incidunt voluptas eius minima consequuntur nisi. Inventore, ab?
                            </p>
                        </div>
                    </div>
                    <div class="card custom-card">
                        <img src="https://img.freepik.com/free-photo/crossroad-car-safari-scene_23-2151822322.jpg?uid=R22963724&ga=GA1.1.138227323.1748126761&semt=ais_hybrid&w=740"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Turismo</h5>
                            <h3 class="card-subtitle">Card subtitle</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, reprehenderit? Earum
                                molestiae, dignissimos quasi pariatur soluta accusamus repellendus quisquam accusantium
                                asperiores vitae, incidunt voluptas eius minima consequuntur nisi. Inventore, ab?
                            </p>

                        </div>
                    </div>
                    <div class="card custom-card">
                        <img src="https://img.freepik.com/free-photo/crossroad-car-safari-scene_23-2151822322.jpg?uid=R22963724&ga=GA1.1.138227323.1748126761&semt=ais_hybrid&w=740"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h3 class="card-subtitle">Card subtitle</h3>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, reprehenderit? Earum
                                molestiae, dignissimos quasi pariatur soluta accusamus repellendus quisquam accusantium
                                asperiores vitae, incidunt voluptas eius minima consequuntur nisi. Inventore, ab?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- Footer --}}
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">© 2023 Nanhonia Travel. Todos os direitos reservados.</p>
            <p class="mb-0">Desenvolvido por <a href="#" class="text-white">Seu Nome</a></p>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-7+9z4b1e8f2a5c8d6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>


</body>

</html>
