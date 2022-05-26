@extends('layouts.app')

@section('content')
    <div class="card-header">Tarefa {{ $tarefa->tarefa }}</div>

    <div class="card-body">
        <b>Data de Conclusão: </b> {{ $tarefa->data_limite_conclusao }}
        <p><a href='{{ route('tarefa.index') }}' class="btn btn-primary">Voltar</a></p>
    </div>
@endsection
