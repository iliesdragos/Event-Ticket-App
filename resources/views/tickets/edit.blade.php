@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Modificare Informații Bilet</div>
        <div class="panel-body">
            <!-- Există înregistrări în tabela bilete -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Eroare:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Populez câmpurile formularului cu datele aferente din tabela bilete -->
            {!! Form::model($ticket, ['method' => 'PATCH','route' => ['tickets.update', $ticket->id]]) !!}
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
                <input type="text" name="pret" class="form-control" value="{{ $ticket->pret }}">
            </div>
            <div class="form-group">
                <input type="submit" value="Salvare Modificări" class="btn btn-info">
                <a href="{{ route('tickets.index') }}" class="btn btn-default">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

