<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Requests;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }
    public function showCustomHomePage($id)
    {


        $event = Event::findOrFail($id);  // Obținerea tuturor evenimentelor
        $url = route('pagina-home-personalizata', $event->id);
        return view('pagina_home', compact('event')); // Transmiterea variabilei 'events' către vie


    }
    public function sponsoriParteneri($id)
    {
        // Aici poți prelua datele despre sponsori și parteneri din baza de date sau de unde le ai
        $event = Event::findOrFail($id);
        $url = route('sponsori-parteneri', $event->id);
        return view('sponsori_parteneri', compact('event')); // Creează o pagină blade pentru această secțiune
    }
    public function agenda($id)
    {
        // Aici poți prelua datele despre sponsori și parteneri din baza de date sau de unde le ai
        $event = Event::findOrFail($id);
        $url = route('agenda', $event->id);
        return view('agenda', compact('event')); // Creează o pagină blade pentru această secțiune
    }
    public function contact($id)
    {
        // Aici poți prelua datele despre sponsori și parteneri din baza de date sau de unde le ai
        $event = Event::findOrFail($id);
        $url = route('contact', $event->id);
        return view('contact', compact('event')); // Creează o pagină blade pentru această secțiune
    }
}
