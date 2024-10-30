@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Vizualizare Eveniment
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('events.index') }}">Inapoi</a>
            </div>
            <div class="form-group">
                <strong>Titlu: </strong> {{ $event->titlu }}
            </div>
            <div class="form-group">
                <strong>Descriere: </strong> {{ $event->descriere }}
            </div>
            <div class="form-group">
                <strong>Imagine: </strong> {{ $event->imagine }}
            </div>
            <div class="form-group">
                <strong>Data și Ora: </strong> {{ $event->data_ora }}
            </div>
            <div class="form-group">
                <strong>Adresa: </strong> {{ $event->adresa }}
            </div>
            <div class="form-group">
                <strong>Pret Bilet: </strong> {{ $event->pret_bilet }}
            </div>
            <div class="form-group">
                <strong>Sponsori: </strong> {{ $event->sponsori }}
            </div>
            <div class="form-group">
                <strong>Parteneri: </strong> {{ $event->parteneri }}
            </div>
            <div class="form-group">
                <strong>Date de contact: </strong> {{ $event->contact }}
            </div>
        </div>
    </div>
@endsection

