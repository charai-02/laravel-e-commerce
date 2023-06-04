<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\command;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
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
    public function store(Request $request, $id_product, $quantity)
    {
        $user_id = auth()->user()->id;
        $cmd = new Command();
        $cmd->user_id = $user_id;
        $cmd->save();
        return redirect()->route('store_prodcmd', ["id_cmd"=>$cmd->id, "quantity"=>$quantity, "id_product"=>$id_product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(command $command)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(command $command)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, command $command)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(command $command)
    {
        //
    }
}
