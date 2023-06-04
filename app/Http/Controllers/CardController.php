<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Command;
use App\Models\prod_cmd;
use App\Models\User;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
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
        //
        $user_id = auth()->user()->id;
        $card = new Card();
        $card->user_id = $user_id;
        $card->product_id = $id_product;
        $card->quantity = $quantity;
        $card->save();
        return redirect()->route('AboutProduct' ,$id_product);
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        //
    }

    public function processForm(Request $request, $id_product)
    {
        $action = $request->input('action');
        if ($action === 'card') {
            return redirect()->route('add_to_card', ["id_product"=>$id_product, "quantity"=>$request->quantity]);
        } elseif ($action === 'cmd') {
            return redirect()->route('store_cmd', ["id_product"=>$id_product, "quantity"=>$request->quantity]);
        }
    }

    public function add_ProdCard_to_Cmd()
    {
        $id_user = auth()->user()->id;
        $user = User::find($id_user);
        $allProducts = $user->products;
        $cmd_products_quantity = Card::all()->where('user_id',$id_user);
        $cmd = new Command();
        $cmd->user_id = $id_user;
        $cmd->save();   
        $id_cmd = $cmd->id;


        $prodcmd = new prod_cmd();
        $product_id = 0;
        foreach ($allProducts as $index => $allproduct) {
            $prodcmd = new prod_cmd(); // Assuming 'Prodcmd' is your model class
            $prodcmd->product_id = $allproduct->id;
            $prodcmd->command_id = $id_cmd;
            $prodcmd->quantity = $cmd_products_quantity[$index]->quantity;
            $prodcmd->save();
            $product_id = $allproduct->id;
        }
        Card::truncate();
        return redirect()->route('AboutProduct', $product_id);
    }
}
