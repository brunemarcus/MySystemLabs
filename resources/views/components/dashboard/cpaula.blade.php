<div class="row">
    <div class="col-">
        <h3>Adicionar Aula</h3>
        <div class="alert alert-info mt-2" role="alert">
            - Cada aula tem duração de 1 Hora</br>
            - Cada aula tem capacidade de no máximo 10 alunos
        </div>
        @if ($errors->any())
            <div class="alert alert-danger mt-2">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{url('/api/save/event')}}">
            @csrf
            <div class="mb-3">
                <label for="lb_title_classroom" class="form-label">* Titulo Aula</label>
                <input type="text" class="form-control" name="titulo" placeholder="Informe o titulo do evento">
            </div>
            <div class="mb-3">
                <label for="lb_name_teacher" class="form-label">* Nome Professor</label>
                <input type="text" class="form-control" name="nome_professor" placeholder="Informe o nome do professor">
            </div>
            <div class="mb-3">
                <label for="lb_description" class="form-label">* Descrição</label>
                <input type="text" class="form-control" name="description" placeholder="Descricao">
            </div>
            <div class="mb-3">
                <label for="lb_datetime_aula" class="form-label">* Data e Hora da Aula</label>
                <input type="datetime-local" class="form-control" name="date_aula">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">
                    Salvar Aula
                </button>
                <a class="btn btn-primary" href="{{url('/dashboard')}}" role="button">
                    Voltar
                </a>
            </div>
        </div>
    </div>
</div>
