<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function __construct()
    {
        if (Auth::check() || isset($_SESSION['user'])) {
        } else {
        }
        return redirect()->route('login');
    }

    public function viewCart()
    {
        if (!isset($_SESSION['user'])) {
            return redirect()->route('login');
        }

        $cart = new Cart();
        $product_list = $cart->join('product', 'carts.product_id', '=', 'product.id_product')
            ->select('carts.*', 'product.name', 'product.img', 'product.pricesale')
            ->where('user_id', $_SESSION['user']['id'])->where('order_id', null)->orderBy('id', 'desc')->get();
        return view('cart_2', compact('product_list'));
    }

    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        $cart = new Cart();
        $checkcart = $cart->where('product_id', $product_id)->where('order_id', null);
        // print_r($checkcart);
        if ($checkcart->exists()) {
            $qty = $checkcart->first()->product_qty;
            $checkcart->update(['product_qty' => $qty + 1]);
            return response()->json(['status' => 'Thêm số lượng thành công']);
        }

        $cart->user_id = $_SESSION['user']['id'];
        $cart->product_id = $product_id;
        $cart->product_qty = $product_qty;
        $cart->save();
        return response()->json(['status' => 'Thêm vào giỏ hàng thành công']);
    }
    public function removeProduct(Request $request)
    {
        $product_id = $request->input('product_id');

        $cart = new Cart();
        $checkcart = $cart->where('product_id', $product_id)->where('order_id', null);
        // print_r($checkcart);
        if ($checkcart->exists()) {
            $checkcart->delete();
            return response()->json(['status' => 'Xoá sản phẩm thành công']);
        }
    }

    public function changeQty(Request $request)
    {
        $product_id = $request->input('product_id');
        $qtychange = $request->input('qtychange');

        $cart = new Cart();
        $checkcart = $cart->where('product_id', $product_id)->where('order_id', null);
        // print_r($checkcart);
        if ($checkcart->exists()) {
            $qty = $checkcart->first()->product_qty;
            if ($qtychange === 'increase') {
                $checkcart->update(['product_qty' => $qty + 1]);
                return response()->json(['status' => 'Thêm số lượng thành công', 'qty' => $qty + 1]);
            }
            if ($qtychange === 'decrease') {
                if ($qty == 1) {
                    return response()->json(['status' => 'Số lượng tối thiểu là 1', 'qty' => 1]);
                }
                $checkcart->update(['product_qty' => $qty - 1]);
                return response()->json(['status' => 'Giảm số lượng thành công', 'qty' => $qty - 1]);
            }
            if ($qtychange > 0) {
                $checkcart->update(['product_qty' => $qtychange]);
                return response()->json(['status' => 'Thay đổi số lượng thành công', 'qty' => $qtychange]);
            }
        }
    }
}

