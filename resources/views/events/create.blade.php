@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Adaugă Eveniment Nou</div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ Form::open(array('route' => 'events.store', 'method' => 'POST')) }}
            <div class="form-group">
                <label for="titlu">Titlu</label>
                <input type="text" name="titlu" class="form-control" value="{{ old('titlu') }}">
            </div>
            <div class="form-group">
                <label for="descriere">Descriere</label>
                <textarea name="descriere" class="form-control" rows="3">{{ old('descriere') }}</textarea>
            </div>
            <div class="form-group">
                <label for="imagine">Imagine</label>
                <input type="text" name="imagine" class="form-control" value="{{ old('imagine') }}">
            </div>
            <div class="form-group">
                <label for="data_ora">Data și Ora</label>
                <input type="datetime-local" name="data_ora" class="form-control" value="{{ old('data_ora') }}">
            </div>
            <div class="form-group">
                <label for="adresa">Adresa</label>
                <input type="text" name="adresa" class="form-control" value="{{ old('adresa') }}">
            </div>
            <div class="form-group">
                <label for="pret_bilet">Pret Bilet</label>
                <input type="text" name="pret_bilet" class="form-control" {{ old('pret_bilet') }}>
            </div>
                <div class="form-group">
                    <label for="sponsori">Sponsori</label>
                    <input type="text" name="sponsori" class="form-control" value="{{ old('sponsori') }}">
                </div>
                <div class="form-group">
                    <label for="parteneri">Parteneri</label>
                    <input type="text" name="parteneri" class="form-control" value="{{ old('parteneri') }}">
                </div>
                <div class="form-group">
                    <label for="contact">Date de contact</label>
                    <input type="text" name="contact" class="form-control" value="{{ old('contact') }}">
                </div>
            <div class="form-group">
                <input type="submit" value="Adauga Eveniment" class="btn btn-info">
                <a href="{{ route('events.index') }}" class="btn btn-default">Cancel</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
