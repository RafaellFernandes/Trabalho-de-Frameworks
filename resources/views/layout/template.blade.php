<!doctype html>
<html>
  <head>
    <meta charset=" utf-8 ">
    <meta name=" viewport " content=" width=device-width, initial-scale=1 ">
    <meta name=" description " content=" ">
    <meta name=" author " content="Aula Frameworks PHP">
    <title>Aula Frameworks PHP</title>

    <!-- Bootstrap core CSS -->
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>


<!-- Custom styles for this template -->
<link href="{{asset('css/dashboard.css')}} " rel="stylesheet ">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow ">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 " href="# ">Sistema 1.0</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed " type="button " data-bs-toggle="collapse " data-bs-target="#sidebarMenu " aria-controls="sidebarMenu " aria-expanded="false " aria-label="Toggle navigation ">
            <span class="navbar-toggler-icon "></span>
        </button>
        
        <ul class="navbar-nav px-3 ">
            <li class="nav-item text-nowrap ">
                <a class="nav-link " href="# ">Sair</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid ">
        <div class="row ">
            <nav id="sidebarMenu " class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse ">
                <div class="position-sticky pt-3 ">
                    <ul class="nav flex-column ">
                        <li class="nav-item ">
                            <a class="nav-link active " aria-current="page " href="# ">
                                <span data-feather="home "></span>
                                Aula
                            </a>
                        </li>                        
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 ">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
                    <h1 class="h2 ">@yield('title')</h1>                    
                </div>
                @yield('container')
            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js " integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js
    " integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha " crossorigin="anonymous "></script>    
</body>

</html>