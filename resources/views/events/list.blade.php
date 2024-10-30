@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            Lista evenimentelor
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    <a href="/events/create" class="btn btn-default">Adaugare Eveniment Nou</a>
                </div>
            </div>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th width="20">No</th>
                    <th>Titlu</th>
                    <th>Descriere</th>
                    <th>Imagine</th>
                    <th>Data și Ora</th>
                    <th>Adresa</th>
                    <th>Pret Bilet</th>
                    <th>Sponsori</th>
                    <th>Parteneri</th>
                    <th>Date de contact</th>
                    <th>Actiune</th>
                </tr>
                @if (count($events) > 0)
                    @foreach ($events as $key => $event)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $event->titlu }}</td>
                            <td>{{ $event->descriere }}</td>
                            <td>{{ $event->imagine }}</td>
                            <td>{{ $event->data_ora }}</td>
                            <td>{{ $event->adresa }}</td>
                            <td>{{ $event->pret_bilet }}</td>
                            <td>{{ $event->sponsori }}</td>
                            <td>{{ $event->parteneri }}</td>
                            <td>{{ $event->contact }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('events.show', $event->id) }}">Vizualizare</a>
                                <a class="btn btn-primary" href="{{ route('events.edit', $event->id) }}">Modificare</a>
                                {{ Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id], 'style' => 'display:inline']) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5">Nu exista evenimente!</td>
                    </tr>
                @endif
            </table>
            <!-- Introduce nr pagina -->
            {{ $events->render() }}
        </div>
    </div>
@endsection

