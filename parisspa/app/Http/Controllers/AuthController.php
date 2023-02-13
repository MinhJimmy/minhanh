<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
  public function __construct()
  {
  }

  public function login()
  {
    if (isset($_SESSION['user'])) {
      return redirect()->back();
    }
    return view('login_1');
  }

  public function doLogin(Request $request)
  {
    $username = $request->username;
    $password = $request->password;

    if (Auth::attempt(['username' => $username, 'password' => $password])) {

      $user = User::where('username', $username)->first();

      $_SESSION['user'] = ['id' => $user->id_user, 'username' => $username, 'password' => $password];
      $request->session()->regenerate();
      // dd(Auth::user());
      $role = User::where('username', '=', $username)->first()->access;
      $request->session()->put('isAdmin', $role);
      return redirect()->intended('carts');
    }
  }

  public function register()
  {
    if (isset($_SESSION['user'])) {
      return redirect()->back();
    }
    return view('register');
  }

  public function doRegister(Request $request)
  {
    DB::table('user')->insert([
      'fullname' => $request->fullname,
      'username' => $request->username,
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);
    return redirect()->route('login');
  }

  public function doLogout()
  {
    Auth::logout();
    if (isset($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
    return redirect()->intended('login');
  }
}
