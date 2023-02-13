<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     *  index
     */
    public function index()
    {
        $orders = [
            "all" => Order::orderBy('id', 'desc')->get()
        ];

        return view('admin.order.dashboard', compact('orders'));
    }

    public function detail($id)
    {
        $cart = new Cart();
        $items = $cart->join('product', 'carts.product_id', '=', 'product.id_product')
            ->select('carts.*', 'product.name', 'product.img', 'product.pricesale')
            ->where('order_id', $id)->orderBy('id', 'desc')->get();

        $status = Order::where('id', $id)->value('status');

        return view('admin.order.detail', compact('items', 'id', 'status'));
    }

    public function update(Request $request, $id)
    {
        if ($request->submit == 'confirm') {
            Order::where('id', $id)->update(['status' => 2]);
        }
        if ($request->submit == 'cancel') {
            Order::where('id', $id)->update(['status' => 0]);
        }

        return redirect()->route('admin.orders.index');
    }
}
