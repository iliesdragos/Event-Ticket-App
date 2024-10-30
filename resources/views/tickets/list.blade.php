@extends('layouts.app')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="panel panel-default">
        <div class="panel-heading">
            Lista Biletelor
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    <a href="{{ route('tickets.create') }}" class="btn btn-default">Adaugare Bilet Nou</a>
                </div>
            </div>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th width="20">No</th>
                    <th>Tip Bilet</th>
                    <th>Pret</th>
                    <th>Actiune</th>
                </tr>
                @if (count($tickets) > 0)
                    @foreach ($tickets as $key => $ticket)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $ticket->tip_bilet }}</td>
                            <td>{{ $ticket->pret }}</td>
                            <td>
                                <a class="btn btn-success" href="{{ route('tickets.show', $ticket->id) }}">Vizualizare</a>
                                <a class="btn btn-primary" href="{{ route('tickets.edit', $ticket->id) }}">Modificare</a>
                                {{ Form::open(['method' => 'DELETE', 'route' => ['tickets.destroy', $ticket->id], 'style' => 'display:inline']) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="3">Nu exista bilete!</td>
                    </tr>
                @endif
            </table>
            <!-- Introduce nr pagina -->
            {{ $tickets->render() }}
        </div>
    </div>
@endsection

