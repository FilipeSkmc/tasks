@extends('layouts.app')

@section('content')
    <div class="card-header">Editar Tarefa</div>

    <div class="card-body">
        @component('tarefa._components.form_create_edit', ['tarefa' => $tarefa])
        @endcomponent
    </div>
@endsection
