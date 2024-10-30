@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Vizualizare Bilet
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('tickets.index') }}">Inapoi</a>
            </div>
            <div class="form-group">
                <strong>Tip Bilet: </strong> {{ $ticket->tip_bilet }}
            </div>
            <div class="form-group">
                <strong>Pret: </strong> {{ $ticket->pret }}
            </div>
        </div>
    </div>
@endsection

