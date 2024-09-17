<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients.index', [
            'clients' => Client::simplePaginate(10),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {

        Client::create([
            'first_name' => $request->first_name,
            'middle_initial' => $request->middle_initial,
            'last_name' => $request->last_name,
            'loan' => $request->loan,
            'value' => $request->value,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client created successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients.form', [
            'client' => $client,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client)
    {
        $client->update($request->validated());

        return redirect()->route('clients.index')->with('success', 'Client updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client): RedirectResponse
    {
        DB::transaction(function () use ($client) {
            $client->delete();
        });

        return redirect()->route('clients.index')->with('success', 'Client deleted successfully!');
    }
}
