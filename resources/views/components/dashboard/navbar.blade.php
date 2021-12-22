<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-size: 16px;color:blue;">{{$nome;}}</a>
        <div id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-outline-primary" role="button" href="{{route('logout.user')}}">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
