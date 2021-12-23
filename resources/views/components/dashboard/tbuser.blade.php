<div class="row">
    <div class="col-">
        <div class="col-5 mt-3 mb-3">
            <h5>Usuários</h5>
        </div>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Tipo</th>
                @if($type == 0) <!-- Allow Master -->
                    <th scope="col">Action</th>
                @endif
                </tr>
            </thead>
            <tbody>
                @foreach($userAll as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->nome}}</td>
                    <td>{{$user->email}}</td>
                    @if($user->type_profile == 0)
                        <td>Master</td>
                     @elseif($user->type_profile == 1)
                        <td>Manager Account</td>
                    @else
                        <td>Aluno</td>
                    @endif
                    @if($type == 0)
                        <td>
                            <a class="btn btn-outline-danger" href="{{route('delete.user',$user->id)}}" role="button">
                                Desativar Usuário
                            </a>
                        </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
