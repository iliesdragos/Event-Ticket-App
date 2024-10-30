@extends('layouts.main_layout')

@section('content')
    <div class="event-details-container">
        <h1 class="event-title">{{ $event->titlu }}</h1>
        <img class="event-image" src="{{ $event->imagine }}" alt="{{ $event->titlu }}">
        <p class="event-description">{{ $event->descriere }}</p>
        <p class="event-info"><strong>Adresa:</strong> {{ $event->adresa }}</p>
        <p class="event-info"><strong>Pret Bilet:</strong> {{ $event->pret_bilet }}$</p>
        <a href="{{ route('sponsori-parteneri', $event->id) }}" class="btn-sponsori-parteneri">Sponsori și Parteneri</a>
        <a href="{{ route('contact', $event->id) }}" class="btn-sponsori-parteneri">Contact</a>
        <a href="{{ url('/') }}" class="back-button">Înapoi la Cumparare</a>
    </div>

    <style>
        .btn-sponsori-parteneri {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: darkseagreen; /* Albastru închis */
            color: white;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }


        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #34568B; /* Albastru închis */
            color: white;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        .event-details-container {
            max-width: 800px;
            margin: auto;
            background: #f8f8f8;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .event-title {
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
        }

        .event-image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .event-description {
            color: #555;
            font-size: 1.1em;
            margin-top: 20px;
        }

        .event-info {
            color: #666;
            margin-top: 10px;
            font-size: 1em;
        }
    </style>
@endsection
