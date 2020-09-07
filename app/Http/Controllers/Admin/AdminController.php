<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Notifications\sendEmail;
use Auth;
use DB;
use Carbon\Carbon;

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

      /**
     * show forgot passowrd link.
     */

     public function showForgotPassword()
     {
        return view('admin.auth.forgot_passowrd');
     }

    /**
     * Validate Password Reset link.
     */

     public function validatePasswordRequest(Request $request)
     {
       
            $user = Admin::where('email',$request->email)->first();

            //Check if the user exists
            if (empty($user)) {
                $notification=array(
                    'messege'=>' User does not exist!!',
                    'alert-type'=>'success'
                     );
                 return redirect()->back()->with($notification);
            }


            //Create Password Reset Token
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => substr(str_shuffle(str_repeat($pool, 5)), 0, 60),
                'created_at' => Carbon::now()
            ]);

            //Get the token just created above

            $tokenData =PasswordReset::where('email',$request->email)->first();

            if ($this->sendResetEmail($request->email, $tokenData->token)) {
                $notification=array(
                    'messege'=>' A reset link has been sent to your email address.!',
                    'alert-type'=>'success'
                     );
                 return redirect()->back()->with($notification);
                
            } else {
                $notification=array(
                    'messege'=>' A Network Error occurred. Please try again.',
                    'alert-type'=>'success'
                     );
                 return redirect()->back()->with($notification);
                
            }
     }


     
    /**
     * send email.
     */

    private function sendResetEmail($email, $token)
    {
        
        $user = Admin::where('email',$email)->select('name','email')->first();
        
        $link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);
        $user->notify(new sendEmail($link));
        // Notification::send($users, new InvoicePaid($invoice));
        
            try {
            //Here send the link with CURL with an external email API 
                return true;
            } catch (\Exception $e) {
                return false;
            }
    }







}
