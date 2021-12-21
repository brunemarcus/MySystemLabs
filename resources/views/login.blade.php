<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style type="text/css">
            .x-footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                color: white;
                text-align: center;
            }

            .f-login {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <x-header></x-header>

        <div class="container">
            <div class="row">
                <!-- Formulário de Login -->
                <x-f-login></x-f-login>
            </div>
        </div>

        <!-- Footer -->
        <x-footer></x-footer>
    </body>
</html>
