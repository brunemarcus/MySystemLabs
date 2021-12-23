<!-- Manager Account -->
<div class="row">
    <div class="col mb-4">
        <h3>Manager Account</h3>
        <a class="btn btn-outline-success" href="{{url('/dashboard/aula')}}" role="button">
            Adicionar Aula
        </a>
    </div>
</div>

<!-- Manage Accounts -->
<x-dashboard.managercards></x-dashboard.managercards>

<!-- tb users -->
<x-dashboard.tbuser></x-dashboard.tbuser>

<!-- Aulas -->
<x-dashboard.calendario></x-dashboard.calendario>
