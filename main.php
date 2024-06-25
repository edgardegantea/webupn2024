
<!doctype html>
<html lang="en" data-bs-theme="auto">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head><script src="<?= base_url('assets/js/color-modes.js'); ?>"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>UPN212 Teziutlán</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 500px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        .btn {
            border-radius: 0 !important;
            width: 220px;
            height: 50px;
            text-align: center;
            line-height: 30px; /* Ajusta según el alto del botón */
        }

        input { border-radius: 0 !important;}

        /*nav {
            height: 100px !important;
        }*/

        /*
        .navbar-nav .nav-link.active {

            background-color: white;
        }
        */




        .navbar-custom {
            /* height: 100px; */
            background-color: rgb(0, 92, 171);

        }


        .btn-toggle {
            border-radius: 0 !important;
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 30px; /* Ajusta según el alto del botón */
            box-shadow: #0a0e14;
        }

        .footer {
            background-color: #ddd;
            height: 150px;
            padding-top: 20px;
            width: 100%;
        }


        #boton-regresar-arriba {
            display: none; /* Ocultar inicialmente el botón */
            position: fixed;
            bottom: 20px; /* Distancia desde el borde inferior */
            right: 100px; /* Distancia desde el borde derecho */
            z-index: 9999; /* Asegura que esté por encima de otros elementos */
            border: none;
        }


        .btn-largo {
            border: none;
            border-radius: 0 !important;
            width: 300px;
            height: 50px;
            text-align: center;
            line-height: 30px; /* Ajusta según el alto del botón */
            background-color: rgb(0, 92, 171);
            color: white;
        }


        .texto {
            color: rgb(0, 92, 171);
        }

        .btn {
            background-color: rgb(0, 92, 171);
        }

        .contenedor-imagen {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            transition: transform 0.3s ease; /* Agrega una transición suave */
        }

        .contenedor-imagen:hover {
            transform: translateX(-10px) translateY(-10px); /* Mueve ligeramente la imagen cuando el cursor está sobre ella */
        }

        .contenedor-imagen img {
            width: 200px;
            height: auto;
            border-radius: 0px;
            border: none;
        }


    </style>


    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/carousel.css'); ?>" rel="stylesheet">
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </symbol>
</svg>


<?= $this->include('./frontend/template/header'); ?>


<main>

    <div class="">
        <?= $this->renderSection('content') ?>
    </div>


    <div class="contenedor-imagen">
        <a href="<?= base_url('ofertaeducativa') ?>">
        <img src="<?= base_url('assets/img/mascota/buhabuho.png') ?>" alt="Mascotas">
        </a>
    </div>


    <button id="boton-regresar-arriba"><i class="fas fa-arrow-up fa-3x text-primary border-0"></i></button>


    <!-- FOOTER -->
    <footer class="container-fluid footer">
        <div class="row">
            <div class="col-md-4">
                <p>&copy; 2017–2024 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </div>

            <div class="col-md-4 d-flex justify-content-center">
                    <a class="me-5" href="https://www.facebook.com/upn212teziutlan" target="_blank"><i class="fa-brands fa-facebook fa-3x"></i></a>
                    <a href="" class="me-5"><i class="fa-brands fa-youtube fa-3x text-danger"></i></a>
            </div>
        </div>
    </footer>
</main>
<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    // Obtener la URL actual
    var currentUrl = window.location.href;

    // Obtener todos los enlaces del menú
    var navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Iterar sobre cada enlace
    navLinks.forEach(function(navLink) {
        // Comparar la URL actual con el enlace del menú
        if (navLink.href === currentUrl) {
            // Agregar la clase 'active' al enlace seleccionado
            navLink.classList.add('active');
        }
    });
</script>


<script>
    window.onscroll = function() {mostrarBoton()};

    function mostrarBoton() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("boton-regresar-arriba").style.display = "block";
        } else {
            document.getElementById("boton-regresar-arriba").style.display = "none";
        }
    }

    // Smooth scroll al hacer clic en el botón
    document.getElementById("boton-regresar-arriba").addEventListener("click", function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

</script>

</body>
</html>
