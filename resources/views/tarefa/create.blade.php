@extends('layouts.app')

@section('content')
    <div class="card-header">Adicionar Tarefa</div>

    <div class="card-body">
        @component('tarefa._components.form_create_edit')
        @endcomponent
    </div>
@endsection
