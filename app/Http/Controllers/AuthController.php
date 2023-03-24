<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\auth;
use Hash;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
         return view('admin/login') ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function registration()
    {
      return  view('admin/admin-registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function registerUser(Request $request)
    {
        {
            $request->validate([
                'username'=>'required|string|min:5',
                'email' =>'required|email|unique:users',
                'password' =>'required|min:5|max:12',
                'cpassword'=>'required|same:password'              
                
            ]);
    
            $user =new User();
            $user->name = $request->username;
            $user->email = $request->email;
            // $user->password = Hash::make($request->password);
            $user->password = $request->password;
            $res =$user->save();
            if($res){
                return back()->with('success','You have registered successfully');
            }
            else{
                return back()->with('fail','something to wrong');
            }
        }
    }
    public function show(auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
      
public function loginUser(Request $request)
{
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
    ]);
    // $user =new User();
    $user =User::where('email','=',$request->email)->first();

    if($user)
    {
       if($request->password==$user->password)
       {
           $request->session()->put('loginId',$user->id);
           return redirect('/index');
        //   return view('/index');
       }
       else{
           return back()->with('fail','the password not matches.');
       }

          
    }
    else{
        return back()->with('fail','This email is not registered');

    }
}
public function dashboard()
{
    $data =array();
     if(Session::has('loginId')){
        $data= User::where('id','=',Session::get('loginId'))->first();
     }

     return view('admin/dashbord',compact('data'));
}

public function forgotPassword()
{
    return view('admin/forgotPassword');
}
public function ChangePassword(Request $request)
{
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
        // 'conpassword'=>'required|min:5|max:12'
    ]);
    if($request->password == $request->confirmpassword)
    {
    $user =User::where('email','=',$request->email)->update([
           'password'=> $request->password
    ]);
    return back()->with('success','password changed');
    }
    else{
        return back()->with('fail','password does not matches');
    }

}
}
