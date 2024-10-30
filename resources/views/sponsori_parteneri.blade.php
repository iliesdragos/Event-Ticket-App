@extends('layouts.main_layout')

@section('content')
    <div class="event-details-container">
        <h2 class="event-title">{{ $event->titlu }}</h2>
        <p class="event-info"><strong>Sponsori:</strong> {{ $event->sponsori }}</p>
        <p class="event-info"><strong>Parteneri:</strong> {{ $event->parteneri }}</p>

        <a href="{{ route('pagina-home-personalizata', $event->id) }}" class="back-button">Înapoi la Home Page</a>
    </div>

    <style>
        .event-details-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #F8F9FA; /* Gri deschis */
            border: 1px solid #E5E5E5;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .event-title {
            color: #34568B; /* Albastru închis */
            font-size: 1.5em;
        }

        .event-info {
            margin-bottom: 15px;
        }

        .back-button {
            display: inline-block;
            padding: 10px 15px;
            background-color: #34568B; /* Albastru închis */
            color: white;
            border-radius: 4px;
            text-decoration: none;
            font-size: 1em;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .back-button:hover {
            background-color: #1E3A6F; /* O nuanță mai închisă de albastru la hover */
        }
    </style>
@endsection
