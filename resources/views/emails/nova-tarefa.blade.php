@component('mail::message')
# {{ $tarefa }}

Data para Conclusão: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Ver Tarefa
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
