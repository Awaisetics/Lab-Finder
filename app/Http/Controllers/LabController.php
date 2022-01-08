<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    public function registerPatient(Request $request)
    {
          //Validate inputs
          $request->validate
          ([
             'name'=>'required',
             'email'=>'required|email|unique:users,email',
             'role'=>'required',
             'password'=>'required|min:5|max:30',
            ]);

          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->role = $request->role;
          $user->phone = $request->phone;
          $user->password = \Hash::make($request->password);
          $save = $user->save();
          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Laboratory');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }

    public function registerEmployee(Request $request)
    {
          //Validate inputs
          $request->validate
          ([
             'name'=>'required',
             'email'=>'required|email|unique:users,email',
             'role'=>'required',
             'password'=>'required|min:5|max:30',
            ]);

          $user = new User();
          $user->name = $request->name;
          $user->email = $request->email;
          $user->role = $request->role;
          $user->phone = $request->phone;
          $user->password = \Hash::make($request->password);
          $save = $user->save();
          if( $save ){
              return redirect()->back()->with('success','You are now registered successfully as Laboratory');
          }else{
              return redirect()->back()->with('fail','Something went Wrong, failed to register');
          }
    }
}
