@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Adaugă Bilet Nou</div>
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

            {{ Form::open(['route' => 'tickets.store', 'method' => 'POST']) }}
            <div class="form-group">
                <label for="tip_bilet">Tip Bilet</label>
                <select name="tip_bilet" class="form-control">
                    <option value="VIP" {{ old('tip_bilet') == 'VIP' ? 'selected' : '' }}>VIP</option>
                    <option value="General" {{ old('tip_bilet') == 'General' ? 'selected' : '' }}>General</option>
                    <option value="Acces la backstage" {{ old('tip_bilet') == 'Acces la backstage' ? 'selected' : '' }}>Acces la backstage</option>
                </select>
           </div>
            <div class="form-group">
                <label for="pret">Pret</label>
                <input type="text" name="pret" class="form-control" value="{{ old('pret') }}">
            </div>
            <div class="form-group">
                <input type="submit" value="Adaugă Bilet" class="btn btn-info">
                <a href="{{ route('tickets.index') }}" class="btn btn-default">Cancel</a>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection

