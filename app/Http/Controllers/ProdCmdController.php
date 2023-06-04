<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Models\prod_cmd;
use Illuminate\Http\Request;

class ProdCmdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        //
        $cmd_product = Command::find($id);
        $quantity = prod_cmd::all()->where('command_id',$id);
        $cmd_products = $cmd_product->products;
        if (count($quantity) == 1) {
            foreach ($quantity as $prod_cmd) {
                $cmd_products_quantity = $prod_cmd->quantity;
            }
        }else{
            $cmd_products_quantity = $quantity;
        }
        
        // return view('admin.prods_commanded', compact('cmd_products', 'quantities'));
        return view('admin.prods_commanded', compact('cmd_products', 'cmd_products_quantity' , 'quantity'));
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
    public function store(Request $request,$id_cmd, $quantity, $id_product)
    {
        //
        $prodcmd = new prod_cmd();
        $prodcmd->product_id = $id_product;
        $prodcmd->command_id = $id_cmd;
        $prodcmd->quantity = $quantity;
        $prodcmd->save();
        return redirect()->route('AboutProduct', $id_product);
    }

    /**
     * Display the specified resource.
     */
    public function show(prod_cmd $prod_cmd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prod_cmd $prod_cmd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prod_cmd $prod_cmd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prod_cmd $prod_cmd)
    {
        //
    }

    // public function store_prodcmd_fromCard(Request $request,$id_cmds, $quantitys, $id_products)
    // {
    //     $prodcmd = new prod_cmd();
    //     $product_id = 0;
    //     foreach (array_map(null, $id_cmds, $quantitys, $id_products) as [$id_cmd, $quantity, $id_product]) {
    //         $prodcmd = new prod_cmd(); // Assuming 'Prodcmd' is your model class
    //         $prodcmd->product_id = $id_product;
    //         $prodcmd->command_id = $id_cmd;
    //         $prodcmd->quantity = $quantity;
    //         $prodcmd->save();
    //         $product_id = $id_product;
    //     }
    //     return $id_product;
    //     // return redirect()->route('AboutProduct', $product_id);
    // }
}
