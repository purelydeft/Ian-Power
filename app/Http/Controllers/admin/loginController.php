<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
   public function loginfunc()
   {
       if(Auth::user()){
        return redirect()->route('admin-dashboard');
       }
       else{
        return view('admin.Pages.login');
       }
     
   }

   public function login(Request $request)
    {   

        $input = $request->all();
        
        
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'],'user_role' => 'admin')))
        {
            return redirect()->route('admin-dashboard');
        }else{
            return redirect('admin/login')->with('error','Invalid user Password.');
        }
          
    }
}
