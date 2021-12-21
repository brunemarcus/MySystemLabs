<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>


        <div class="container">
            <div class="row">
               <h4>Welcome {{ $nome; }}</h4>
               <a href="{{route('logout.user')}}">Logout</a>
            </div>
        </div>

    </body>
</html>
