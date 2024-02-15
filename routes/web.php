<?php

use App\Mail\CheckoutMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Main\CartController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Sellers\MainController;
use App\Http\Controllers\Main\OrdersController;
use App\Http\Controllers\Sellers\ItemsController;
use App\Http\Controllers\Main\PaymentController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Main\CheckoutController;
use App\Http\Controllers\Main\MainController as Main;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'show'])->middleware('guest');

Auth::routes();

Route::get('/emails', function (){
    Mail::to('email@gmail.com')->send(new CheckoutMail());
    return new CheckoutMail();
})->middleware('guest');

Route::namespace('Main')->prefix('menu')->group(function() {
    Route::get('/', [Main::class, 'index'])->name('menu');
    Route::get('/item-info/{itemslug}', [Main::class, 'show'])->name('iteminfo');
    Route::get('/contact', [Main::class, 'contact'])->name('contact');

    Route::prefix('cart')->group(function(){
        Route::get('/', [CartController::class, 'index'])->name('cartindex');
        Route::get('/addcart/{productid}', [CartController::class, 'add'])->name('addcart');
        Route::get('/delete/{itemid}', [CartController::class, 'delete'])->name('cart.delete');
        Route::get('/update/{itemid}', [CartController::class, 'update'])->name('cart.update');
        Route::get('/checkout/{itemSlug?}', [CheckoutController::class, 'index'])->name('checkout');
        Route::get('/order-completed', [CheckoutController::class, 'order_completed'])->name('order.completed');

        Route::post('orders', [OrdersController::class, 'store'])->name('orders.store');

        //payment
        Route::get('pay_status/{orderId}', [PaymentController::class, 'ravePay'])->name('pay.status');
        Route::get('paypal/checkout-success', [PaymentController::class, 'payPalCheckoutSuccess'])->name('paypal.success');
        Route::get('paypal/checkout-cancel', [PaymentController::class, 'payPalCheckoutCancel'])->name('paypal.cancel');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::put('/register', [RegisterController::class, 'create']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'show']);

});

Route::namespace('Sellers')->prefix('dashboard')->middleware('users')->group(function () {
    Route::get('/', [MainController::class, 'show'])->name('dashboard.show');

    Route::get('/profile/{userid}', [MainController::class, 'showProfile'])->name('profile.show');
    Route::post('/profile/{userid}', [MainController::class, 'updateProfile']);

    Route::get('/additems', [ItemsController::class, 'index'])->name('additems');
    Route::post('/additems', [ItemsController::class, 'store']);
    
    Route::get('/edit/{slug}', [ItemsController::class, 'edit'])->name('edit.item');
    Route::post('/edit/{slug}', [ItemsController::class, 'update']);

    Route::get('/delete/{slug}', [ItemsController::class, 'delete'])->name('item.delete');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
