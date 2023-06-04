<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = client::all();
        return view('admin.clients',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id_product)
    {
        //
        $client = new client();
        $client->name = $request->name;
        $client->phone_number = $request->phone_number;
        $client->contry = $request->contry;
        $client->city = $request->city;
        $client->code_postal = $request->code_postal;
        $client->email = $request->email;

        $client->save();
        return redirect()->route('store_cmd', ["id_client"=>$client->id , "quantity"=>$request->quantity, "id_product"=>$id_product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(client $client)
    {
        //
    }

    public function client_commands($id){
        $client = client::find($id);
        $client_name = $client->name;
        $cmds = $client->commands;
        return view('admin.client_command', compact('cmds','client_name'));
    }
}
