<?php

namespace App\Http\Controllers;

use App\Mail\email;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function store(Request $request)
    {
          //Validate inputs
          $request->validate
          ([
             'name'=>'required',
             'email'=>'required|email|unique:users,email',
             'role'=>'required',
             'status'=>'required',
             'location'=>'required',
             'password'=>'required|min:3|max:30',
             'cpassword'=>'required|min:3|max:30|same:password'
            ]);  
          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->role = $request->role;
          $user->status = $request->status;
          $user->location = $request->location;
          $user->password = \Hash::make($request->password);
          $save = $user->save();
          if( $save ){
              return redirect('/login')->with('success','You are now registered successfully as Laboratory');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }
    public function login(Request $request)
    {  
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:3|max:30'
        ],[
            'email.exists'=>'This email does not exist in users table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('web')->attempt($creds) ){               
            if( Auth::guard('web')->user()->role =='laboratory' )
            {
                if(Auth::guard('web')->user()->status =='1')
                {
                    return redirect('/lab/home');
                }
                else
                {
                    return redirect()->back()->with('fail', 'Your Request Yet to be Approved');
                }
            }
            if( Auth::guard('web')->user()->role =='patient' )
            {
                return redirect('/patient/home');
            }
            if( Auth::guard('web')->user()->role =='employee' )
            {
                return redirect('/employee/home');
            }
            if( Auth::guard('web')->user()->role =='employee' )
            {
                return redirect('/employee/home');
            }
            if( Auth::guard('web')->user()->role =='admin' )
            {
                return redirect('/admin/home');
            }
        }
        else{
            return redirect('/login')->with('fail','Incorrect Credentials');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/login');
    }

    public function labRequests()
    {
        $user = DB::table('users')->where('status', 0)->get();
        return view('admin.requests', [ 'users' => $user]);
    }

    public function approveOrRejectRequest(Request $request, $user_id)
    {
        $url = URL::current();
        if(Str::contains($url, 'delete'))
        {
            $id = User::find($user_id);
            $id->delete();
            return redirect()->back()->with('success', 'Lab deleted Successfully');
        }
        if(Str::contains($url, 'approve'))
        {
            $id = User::find($user_id);
            $id->status = 1;
            $id->save();
            $details = [
                'title' => 'Lab approval',
                'body' => 'Your request for signup has been Approved'
            ];
            Mail::send('admin.acceptMail', ['details' => $details], function ($m) use ($id) {
                $m->from('info@labfinder.com', 'BusinessPluse');
                $m->to($id->email, 'admin')->subject('Your Reminder!');
            });

            if (Mail::failures())
            {
                return response()->Fail('Sorry! Please try again latter');
            }
            else
            {
                return redirect()->back()->with('success', 'Lab Registration Request Has Been Accepted');
            }
        }
        else
        {
            $id = User::find($user_id);
            $details = [
                'title' => 'Lab Rejection',
                'body' => 'Your request for signup has been Rejected'
            ];
            Mail::send('admin.rejectMail', ['details' => $details], function ($m) use ($id) {
                $m->from('info@labfinder.com', 'BusinessPluse');
                $m->to($id->email, 'admin')->subject('Your Reminder!');
            });
            $id->delete();
            if (Mail::failures())
            {
                return response()->Fail('Sorry! Please try again latter');
            }
            else
            {
                return redirect('/admin/home')->with('success', 'Lab SignUp Request Has Been Rejected');
            }
        }
    }

    public function LabList()
    {
        $user = DB::table('users')->where('status', 1)->get();
        return view('admin.labs', [ 'users' => $user]);
    }

    public function getLab($id)
    {
        $user = User::find($id);
        return response()->json(['user'=>$user]);
    }

}
