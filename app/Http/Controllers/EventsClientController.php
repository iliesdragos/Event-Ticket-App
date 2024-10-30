<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;


class EventsClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function cart()
    {
        return view('cart');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addToCart($id)
    {
        $events = Event::find($id);
        if (!$events) {
            abort(404);
        }
        $cart = session()->get('cart');
        // dacă cart este gol se pune primul product
        if (!$cart) {
            $cart = [
                $id => [
                    "titlu" => $events->titlu,
                    "quantity" => 1,
                    "pret_bilet" => $events->pret_bilet,
                    "imagine" => $events->imagine
                ]];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Event adaugat cu succes in cos!');
        }
        // daca cart nu este gol at verificam daca produsul exista pt a incrementa cantitate
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Event adaugat cu succes in cos!');
        }
        // daca item nu exista in cos at addaugam la cos cu quantity = 1
        $cart[$id] = [
            "titlu" => $events->titlu,
            "quantity" => 1,
            "pret_bilet" => $events->pret_bilet,
            "imagine" => $events->imagine
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Event adaugat cu succes in cos!');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cos modificat cu succes');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Event sters cu succes!');
        }
    }
}
