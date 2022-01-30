<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LabController extends Controller
{
    public function registerEmployee(Request $request)
    {
        $request->validate
        ([
           'name'=>'required',
           'email'=>'required|email|unique:users,email',
           'password'=>'required|min:3|max:10',
           'cpassword'=>'required|min:3|max:10|same:password'
          ]);

        $emp = new User();
        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->role = $request->role;
        $emp->lab_id = $request->lab_id;
        $emp->password = \Hash::make($request->password);
        $save = $emp->save();
        if( $save ){
            return redirect()->back()->with('success','Employee registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
    }

    public function AddPatient()
    {
        $user = DB::table('users')->where('role', 'patient')->get();
        return view('employee.AddPatient',['users' => $user]);
    }

    public function registerPatient(Request $request)
    {
        $request->validate
        ([
           'name'=>'required',
           'email'=>'required|email|unique:users,email',
           'password'=>'required|min:3|max:10',
           'cpassword'=>'required|min:3|max:10|same:password'
          ]);

        $patient = new User();
        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->role = $request->role;
        $patient->lab_id = $request->lab_id;
        $patient->emp_id = $request->emp_id;
        $patient->password = \Hash::make($request->password);
        $save = $patient->save();
        if( $save ){
            return redirect()->back()->with('success','Patient registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
    }
}
