<?php

use App\Models\Produk;
use App\Models\Address;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('home.index');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/oldproducts', [ProductController::class, 'indexold']);

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/signin', function () {
    return view('account.index');
})->name('login');

Route::post('/signin', [LoginController::class, 'authenticate']);

Route::get('/signup', function () {
    return view('account.signup');
});

Route::post('/signup', [SignupController::class, 'store']);

Route::get('/payment', function () {
    $user = Auth::user();

    $address = Address::where('user_id', $user->id)->first();

    return view('payment.index', [
        "address" => $address,
    ]);
})->middleware('auth');


Route::get('/contactus', function () {
    return view('contactus.index');
});

Route::get('/address', function () {
    $user = Auth::user();

    $addresses = Address::where('user_id', $user->id)->get();
    return view('address.index', [
        "address" => $addresses,
    ]);
})->middleware('auth');

Route::get('/profile', function () {
    return view('profile.index');
})->middleware('auth');

Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/address', [AddressController::class, 'value'])->middleware('auth');

Route::get('/products/{produk}', [ProductController::class, 'show']);
Route::get('/productsold/{produk}', [ProductController::class, 'showold']);

Route::post('/email', [EmailController::class, 'email']);

Route::get('/category/{category}', [ProductController::class, 'category']);

Route::get('/cart', [CartController::class, 'index'])->middleware('auth');
Route::post('/cart', [CartController::class, 'addCart'])->middleware('auth');
Route::delete('/cart/{cart}', [CartController::class, 'deleteCart'])->middleware('auth');
Route::put('/cart', [CartController::class, 'updateCart'])->middleware('auth');

Route::post('/payment', [PaymentController::class, 'addPayment']);
