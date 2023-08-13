<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function adminLogin(Request $request)
    {
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);
  
      //$adminid = Auth::user()->id;
      $admin = DB::table('admins')->where('email', $request->email)
              ->where('password', $request->password)->first();
  
      // dd($admin);
      if ($admin) {
        session(["login" => $admin]);
        return redirect(route('admin.dashboard'));
      }
  
      else
      {
        return view('admin.login')->with(['fail' => 'Gagal identitas tidak dikenali']);
      }
    }

    public function admin_dashboard()
    {
       return view('admin.dashboard');
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        session(["login" => NULL]);
        return redirect()->route('index');
    }
}
