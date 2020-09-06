<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{

     /**
     * Showing Login Page.
     *
     * @var string
     */

     public function showLoginPage()
     {
         return view('admin.auth.login');
     }


     
     /**
     * Login Atempate.
     *
     * @var string
     */

     public function login(Request $request)
     {
         
        $data = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
       
        // $admin = Admin::where('username', request('username'))->first();
        
            // if ($admin) {
            //     if (Auth::guard('admin')->attempt(['username' => request('username'), 'password' => request('password')], 
            //     request('remember'))) {
            //         return redirect()->intended(route('admin.home'));
            //     } else {
            //         session()->flash('successMsg', 'Sorry !! Email or Password not matched!');
            //         return redirect()->back();
            //     }
            // }else{
            //     session()->flash('successMsg', 'Sorry !! Email or Password not matched!');
            //     return redirect()->back();
            // }

            
            $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            if(Auth::guard('admin')->attempt(array($fieldType => $request['username'], 'password' => $request['password'])))
            {
                return redirect()->intended(route('admin.home'));
            }else{
                return redirect()->route('login')
                    ->with('error','Email-Address And Password Are Wrong.');
            }
     }

    /**
     * Insert admin information in database.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */

     public function register(Request $request)
     {
        $user = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        Admin::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'role'=>1,
            'username'=>$request->username,
        ]);

        $notification=array(
            'messege'=>' User Insert Successfully',
            'alert-type'=>'success'
             );
         return redirect()->route('admin.login.page')->with($notification);
     }

      /**
     * Showing Admin Home Page.
     */

     public function adminHome()
     {
         return view('admin.home.home');
     }

     /**
     * Logout a user.
     */

    public function logout(Request $request)
    {
        
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login.page');
    }

    /**
     * Register Form.
     */

     public function showRegisterForm()
     {
         return view('admin.auth.register');
     }







}
