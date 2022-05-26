@extends('layouts.app')

@section('content')
    <div class="card-header">Tarefas</div>

    <div class="card-body">
        <p><a href='{{ route('tarefa.create')}}' class="btn btn-success">Adicionar</a></p>
        <table class="table table-hover">
            <tbody>
                <th>Tarefa</th>
                <th>Conclusão</th>
                <th colspan="2">Ações</th>
            </tbody>
            @foreach ($tarefas as $tarefa)
                <tr>
                    <td>{{ $tarefa->tarefa }}</td>
                    <td>{{ date('d/m/Y', strtotime($tarefa->data_limite_conclusao)) }}</td>
                    <td><a href="{{ route('tarefa.edit', ['tarefa' => $tarefa->id]) }}">Editar</a></td>
                    <td>Excluir</td>
                </tr>
            @endforeach
            
        </table>
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Anterior</a></li>
            @for($i = 1; $i <= $tarefas->lastPage(); $i++)
                <li class="page-item {{ $tarefas->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $tarefas->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item"><a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Próximo</a></li>
        </ul>
    </div>
@endsection
