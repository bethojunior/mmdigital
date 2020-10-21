@extends('layouts.page')
@section('css')
    {{--    <link rel="stylesheet" href="{{ asset('css/home/init.css') }}">--}}
@endsection
@section('title', 'Painel ')
@section('content_header')
    <h1 class="m-0 text-dark">Listagem de Agendamentos</h1>
@stop

@section('content')
    @include('includes.alerts')
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Local</th>
            <th scope="col">Tipo de atendimento</th>
            <th scope="col">Paciente</th>
            <th scope="col">Contato</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <th scope="row">{{ $schedule->local }}</th>
                    <td>{{ $schedule->type }}</td>
                    <td>{{ $schedule->name }}</td>
                    <td>{{ $schedule->contact }}</td>
                    <td class="update" id="{{ $schedule->id }}"><span class="badge badge-info">{{ $schedule->status }}</span></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('js')
    <script src="{{ asset('js/controllers/Schedule/ScheduleController.js') }}"></script>
    <script src="{{ asset('js/modules/schedule/init.js') }}"></script>
@endsection

