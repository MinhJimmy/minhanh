<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\BookingAdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimeController;

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

Route::get('/', function () {
    return view('index');
})->name('home');


Route::get('/trangchu_1', function () {
    return view('trangchu_1');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/booking', [BookingController::class, "index"]);
Route::post('/booking', [BookingController::class, "store"]) -> name("bookingStore");

Route::get('/list-day', [TimeController::class, "getListDay"])->name("list-day");
Route::get('/list-time', [TimeController::class, "getListTime"])->name("list-time");


Route::get('/acne_cream', function () {
    return view('shop_2');
});
// ACNE TREATMENT CREAM 
Route::get('/acne_treatment', function () {
    return view('shop_3');
});

Route::get('/acne_body', function () {
    return view('shop_4');
});

Route::get('/acne_skin', function () {
    return view('shop_5');
});
Route::get('/oder_1', function () {
    return view('oder_1');
});
Route::get('/oder_2', function () {
    return view('oder_2');
});
Route::get('/register_2', function () {
    return view('register_2');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'doRegister'])->name('doRegister');

Route::get('/logout', [AuthController::class, 'doLogout'])->name('logout');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('doCheckout');

/// Thanh Toan VNPAY
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/vnpay_payment', [CheckoutController::class, 'vnpay_payment'])->name('vnpay_payment');





Route::get('/login_2', function () {
    return view('login_2');
});

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/formaddbicam', function () {
    return view('formaddbicam');
});
Route::get('/phanmembanhang', function () {
    return view('phanmembanhang');
});

Route::post('/addToCart', [CartController::class, 'addProduct']);
Route::post('/removeFromCart', [CartController::class, 'removeProduct']);
Route::post('/changeQtyFromCart', [CartController::class, 'changeQty']);

Route::get('/carts', [CartController::class, 'viewCart'])->name('carts');


/** 
 *  Admin page
 */
Route::prefix('admin')->middleware('isAdmin')->name('admin.')->group(function () {
    // Route::get('/', [DashboardController::class, 'index']);

    Route::prefix('/product')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'view'])->name('index');

        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/insert', [ProductController::class, 'insert'])->name('insert');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
    });

    Route::prefix('/orders')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/{id}', [OrderController::class, 'detail'])->name('detail');
        Route::post('/update/{id}', [OrderController::class, 'update'])->name('update');
    });

    Route::prefix('/bookings')->group(function () {
        Route::get('/', [BookingAdminController::class, 'index']);
    });
});


Route::get('/orders', [CheckoutController::class, 'history'])->name('history');
Route::get('/orders/detail/{id}', [CheckoutController::class, 'historyDetail'])->name('orderdetail');
