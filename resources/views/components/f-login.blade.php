<div class="f-login mt-3">
    <form method="post" action="{{route('auth.user')}}">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('error'))
            @include('sweetalert::alert')
        @elseif (session('success'))
            @include('sweetalert::alert')
        @endif
        @csrf
        <div class="form-group mb-2">
            <label for="l-email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Informe seu email">
        </div>
        <div class="form-group mb-2">
            <label for="l-senha">Senha</label>
            <input type="password" class="form-control" name="password" placeholder="Informe sua senha">
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>
