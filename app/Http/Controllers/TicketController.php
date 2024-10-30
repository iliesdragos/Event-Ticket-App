<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket; // Asigură-te că ai importat modelul Event
use App\Http\Requests;
class TicketController extends Controller
{
    public function index(Request $request)
    {
        $tickets = Ticket::orderBy('pret', 'ASC')->paginate(5);
        $value = ($request->input('page', 1) - 1) * 5;
        return view('tickets.list', compact('tickets'))->with('i', $value);
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tip_bilet' => 'required|in:VIP,General,Acces la backstage',
            'pret' => 'required',
            // Alte reguli de validare pot fi adăugate aici
        ]);

        Ticket::create($request->all());
        return redirect()->route('tickets.index')->with('success', 'Your ticket added successfully!');
    }

    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.show', compact('ticket'));
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.edit', compact('ticket'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tip_bilet' => 'required|in:VIP,General,Acces la backstage',
            'pret' => 'required',
            // Alte reguli de validare pot fi adăugate aici
        ]);

        Ticket::find($id)->update($request->all());
        return redirect()->route('tickets.index')->with('success', 'Ticket updated successfully');
    }

    public function destroy($id)
    {
        Ticket::find($id)->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket removed successfully');
    }
}
