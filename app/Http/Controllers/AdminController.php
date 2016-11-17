<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Admin;



class AdminController extends Controller
{
    public function getAdminDashboard(){
        return view('admin.index');
    }
     public function getLogin(){
         return view('admin.login');
     }
    public function postLogin(Request $request){
        $this->validate($request, [
            'username' => 'required|max:255',
            'password' => 'required',
        ]);
        if (!Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            return redirect()->back();
        }
        else {
            return redirect()->route('admin.index');
        }
    }
    public function getLogout(){
         Auth::logout();
        return redirect()->route('admin.login');
    }

}