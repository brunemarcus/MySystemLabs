<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .x-footer-dashboard {
                position: fixed;
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
        @endif

        <div class="container" style="padding:3%;">
            @if ($type == 0)
                <x-dashboard.master></x-dashboard.master>
            @elseif ($type == 1)
                <x-dashboard.admin></x-dashboard.admin>
            @elseif ($type == 2)
                <x-dashboard.aluno></x-dashboard.aluno>
            @endif
        </div>

        <!-- Footer -->
        <x-dashboard.footer></x-dashboard.footer>

    </body>
</html>
