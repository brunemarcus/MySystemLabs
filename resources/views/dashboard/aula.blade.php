<html>
    <head>
        <title>Nova Aula</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .x-footer-dashboard {
                position: relative;
                left: 0;
                bottom: 0;
                width: 100%;
                color: white;
                text-align: center;
            }
        </style>
    </head>
    <body>

        <!-- Header -->
        <x-dashboard.navbar></x-dashboard.navbar>

        @if (session('error'))
            @include('sweetalert::alert')
        @elseif (session('success'))
            @include('sweetalert::alert')
        @endif

        <!-- Aula -->
        <div class="container" style="padding:3%;">
            <x-dashboard.cpaula></x-dashboard.cpaula>
        </div>

        <!-- Footer -->
        <x-dashboard.footer></x-dashboard.footer>

    </body>
</html>
