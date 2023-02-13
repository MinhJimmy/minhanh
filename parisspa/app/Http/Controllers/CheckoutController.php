<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
  public function __construct()
  {
    if (Auth::check() || isset($_SESSION['user'])) {
    } else {
    }
    return redirect()->route('login');
  }

  public function index()
  {
    $cart = new Cart();
    $items = $cart->join('product', 'carts.product_id', '=', 'product.id_product')
      ->select('carts.*', 'product.name', 'product.img', 'product.pricesale')
      ->where('user_id', $_SESSION['user']['id'])->where('order_id', null)->orderBy('id', 'desc')->get();

    return view('oder_1', compact('items'));
  }

  public function checkout(Request $request)
  {
    if ($request->payment_method != 1) {   // payment method: cod
      return back()->with('payment_method_warning', 'Paypal is not supported yet!');
    }

    $data = [
      'payment_method' => 1,
      'address' => $request->address,
      'phone' => $request->phone,
      'user_id' => $_SESSION['user']['id']
    ];

    $thisId = Order::create($data)->id;

    Cart::where('user_id', $_SESSION['user']['id'])->where('order_id', NULL)->update(['order_id' => $thisId]);

    return redirect()->intended('checkout')->with('success', 'Mua Hàng Thành Công!');
  }

  /**
   *  history
   */
  public function history()
  {
    $orders = [
      "all" => Order::where('user_id', $_SESSION['user']['id'])->orderBy('id', 'desc')->get()
    ];

    return view('history', compact('orders'));
  }

  /**
   *  history detail
   */
  public function historyDetail($id)
  {
    $cart = new Cart();
    $items = $cart->join('product', 'carts.product_id', '=', 'product.id_product')
      ->select('carts.*', 'product.name', 'product.img', 'product.pricesale')
      ->where('order_id', $id)->where('user_id', $_SESSION['user']['id'])
      ->orderBy('id', 'desc')->get();

    return view('historyDetail', compact('items', 'id'));
  }
  ///Thanh Toán VNPAY
  public function vnpay_payment(){
    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
$vnp_Returnurl = "http://localhost:9999/acne_cream";
$vnp_TmnCode = "CGXOZVGA";//Mã website tại VNPAY 
$vnp_HashSecret = "KLKVLGZFLZCMOTNEGAYASIODCEXNZFPG"; //Chuỗi bí mật

$vnp_TxnRef = '42222'; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
$vnp_OrderInfo = 'Thanh Toán Đơn Hàng Thành Công';
$vnp_OrderType = 'billpayment';
$vnp_Amount = 99000 *100; 
$vnp_Locale = 'vn';
$vnp_BankCode = 'NCB';
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
//Add Params of 2.0.1 Version
//$vnp_ExpireDate = $_POST['txtexpire'];
//Billing
$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef
   
   
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}
if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
    $inputData['vnp_Bill_State'] = $vnp_Bill_State;
}

//var_dump($inputData);
ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    if (isset($_POST['redirect'])) { // Coppy vào thanh toán thêm name="redirect"
        header('Location: ' . $vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
    // vui lòng tham khảo thêm tại code demo

  }
    
}


