@if(isset($tarefa->id))
    <form method='post' action="{{ route('tarefa.update', ['tarefa' => $tarefa->id]) }}">
        @csrf
        @method('PUT')
@else
    <form method='post' action="{{ route('tarefa.store') }}">
        @csrf
@endif
        <div class="mb-3">
            <label class="form-label">Tarefa</label>
            <input type="text" class="form-control" name="tarefa" value='{{ $tarefa->tarefa ?? '' }}'>
        </div>
        <div class="mb-3">
            <label class="form-label">Data Conclusão</label>
            <input type="date" class="form-control" name="data_limite_conclusao" value='{{ $tarefa->data_limite_conclusao ?? '' }}'>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href='{{ url()->previous() }}' class="btn btn-light">Voltar</a>
    </form>
