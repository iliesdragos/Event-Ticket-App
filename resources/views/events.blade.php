@extends('layoutcos')
@section('title', 'Events')
@section('content')
    <div class="container products">
        <div class="row">
            @foreach($events as $event)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{$event->imagine}}" width="250" height="300">
                        <div class="event-item">
                            {{-- Presupunând că ai un obiect $event în context --}}
                            <a href="{{ route('pagina-home-personalizata', $event->id) }}" class="event-link">{{ $event->titlu }}</a>




                            <p>{{ Str::limit(strtolower($event->descriere), 50)}}</p>
                            <p><strong>Pret Bilet: </strong> {{ $event->pret_bilet}}$</p>
                            <p class="btn-holder"><a href="{{url('add-to-cart/'.$event->id)}}" class="btn btn-warning btn-block text-center" role="button">Pune in cos</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach
                <style>
                    .event-item {
                        /* Stiluri pentru containerul fiecărui eveniment */
                        margin-bottom: 20px;
                        padding: 10px;
                        border: 1px solid #ddd;
                        border-radius: 5px;
                    }

                    .event-link {
                        color: #007bff; /* O culoare albastră plăcută */
                        text-decoration: none; /* Elimină sublinierea implicită */
                        font-size: 1.2em; /* Mărește mărimea fontului */
                        transition: color 0.3s ease; /* Efect de tranziție pentru schimbarea culorii */
                    }

                    .event-link:hover {
                        color: #0056b3; /* Schimbă culoarea la survolarea mouse-ului */
                    }
                </style>
        </div><!-- End row -->

        <!-- Adaugă butonul de logout -->
        <div class="row">
            <div class="col-md-12 text-center">
                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                @endauth
            </div>
        </div>

    </div>
@endsection
