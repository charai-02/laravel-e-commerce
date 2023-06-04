<?php

use App\Http\Controllers\CardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\ProdCmdController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Card;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/conatct_us', function () {
    // return view('products.conatct_us');
    if(Auth::check()){
        $id_user = auth()->user()->id;
        $user = User::find($id_user);
        $allProducts = $user->products;
        $cmd_products_quantity = Card::all()->where('user_id',$id_user);
        $priceT = 0;
        foreach($allProducts as $index => $allproduct){
            $priceT = $priceT + $allproduct->p_price * $cmd_products_quantity[$index]->quantity;
        }
        return view('products.conatct_us',compact('allProducts', 'cmd_products_quantity','priceT'));
    }else{
        return view('products.conatct_us');
    }
})->name('conatct_us');

Route::get('/condition_of_use', function () {
    // return view('products.condition_of_use');
    if(Auth::check()){
        $id_user = auth()->user()->id;
        $user = User::find($id_user);
        $allProducts = $user->products;
        $cmd_products_quantity = Card::all()->where('user_id',$id_user);
        $priceT = 0;
        foreach($allProducts as $index => $allproduct){
            $priceT = $priceT + $allproduct->p_price * $cmd_products_quantity[$index]->quantity;
        }
        return view('products.condition_of_use',compact('allProducts', 'cmd_products_quantity','priceT'));
    }else{
        return view('products.condition_of_use');
    }
})->name('condition_of_use');

Route::get('/return_replacements', function () {
    // return view('products.return_replacements');
    if(Auth::check()){
        $id_user = auth()->user()->id;
        $user = User::find($id_user);
        $allProducts = $user->products;
        $cmd_products_quantity = Card::all()->where('user_id',$id_user);
        $priceT = 0;
        foreach($allProducts as $index => $allproduct){
            $priceT = $priceT + $allproduct->p_price * $cmd_products_quantity[$index]->quantity;
        }
        return view('products.return_replacements',compact('allProducts', 'cmd_products_quantity','priceT'));
    }else{
        return view('products.return_replacements');
    }
})->name('return_replacements');

Route::get('/index/{C?}',function(){
    $products = Product::all();
    // return view('products.welcome',compact('products'));
    if(Auth::check()){
        $id_user = auth()->user()->id;
        $user = User::find($id_user);
        $allProducts = $user->products;
        $cmd_products_quantity = Card::all()->where('user_id',$id_user);
        $priceT = 0;
        foreach($allProducts as $index => $allproduct){
            $priceT = $priceT + $allproduct->p_price * $cmd_products_quantity[$index]->quantity;
        }
        return view('products.welcome',compact('products','allProducts', 'cmd_products_quantity','priceT'));
    }else{
        return view('products.welcome',compact('products'));
    }
})->name('index');
Route::get('about-product/{id}',function($id){
    $product = Product::find($id);
    if(Auth::check()){
        $id_user = auth()->user()->id;
        $user = User::find($id_user);
        $allProducts = $user->products;
        $cmd_products_quantity = Card::all()->where('user_id',$id_user);
        $priceT = 0;
        foreach($allProducts as $index => $allproduct){
            $priceT = $priceT + $allproduct->p_price * $cmd_products_quantity[$index]->quantity;
        }
        return view('products.about_product_with_id',compact('product','allProducts', 'cmd_products_quantity','priceT'));
    }else{
        return view('products.about_product',compact('product'));
    }
})->name('AboutProduct');

Route::get('/products',[ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('product');
Route::get('/inserer', [ProductController::class, 'insert_page'])->name('product_insert');
Route::post('store',[ProductController::class, 'store'])->name('store');
Route::get('edit_product/{id}',[ProductController::class, 'edit'])->name('edit_product');
Route::post('update_product/{id}',[ProductController::class, 'update'])->name('update_product');
Route::get('delete_product/{id}',[ProductController::class, 'destroy'])->name('destroy_product');
Route::get('restore_product/{id}',[ProductController::class, 'restore'])->name('restore_product');
Route::get('product_trash',[ProductController::class, 'trash'])->name('product_trash');
Route::get('ForceDelet_product/{id}',[ProductController::class, 'forcedelete'])->name('ForceDelet_product');

Route::get('user',[UserController::class, 'index'])->middleware(['auth', 'verified'])->name('user');
Route::get('user_commands/{id}',[UserController::class, 'user_commands'])->middleware(['auth', 'verified'])->name('user_commands');

Route::get('add_to_card/{id_product}/{quantity}', [CardController::class , 'store'])->middleware(['auth', 'verified'])->name('add_to_card');
Route::post('cmd_or_card/{id_product}', [CardController::class , 'processForm'])->middleware(['auth', 'verified'])->name('cmd_or_card');
Route::get('add_ProdCard_to_Cmd/', [CardController::class , 'add_ProdCard_to_Cmd'])->middleware(['auth', 'verified'])->name('add_ProdCard_to_Cmd');

Route::get('store_cmd/{id_product}/{quantity}', [CommandController::class , 'store'])->middleware(['auth', 'verified'])->name('store_cmd');

Route::get('store_prodcmd/{id_cmd}/{quantity}/{id_product}', [ProdCmdController::class , 'store'])->name('store_prodcmd');
Route::get('product_commands/{id}',[ProdCmdController::class, 'index'])->middleware(['auth', 'verified'])->name('product_commands');
// Route::get('store_prodcmd_fromCard/{id_cmds}/{quantitys}/{id_products}', [ProdCmdController::class , 'store_prodcmd_fromCard'])->name('store_prodcmd_fromCard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','check_admin_client'])->name('dashboard');




// Route::post('inserer/store',[ProductController::class, 'store'])->name('store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
