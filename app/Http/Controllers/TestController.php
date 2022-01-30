<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function index()
      {
        $id = Auth::user()->id;
        $tests = Test::where('lab_id' , $id)->get();
        return view('lab.tests')->with('tests',$tests);
      }

    public function store()
      {
          $test = new Test();
          $test->title=request('title');
          $test->description=request('description');
          $test->fee=request('fee');
          $test->time=request('time');
          $test->lab_id= Auth::guard('web')->user()->id;
          $test->save();
          return redirect('/tests');
      }

 

    public function viewTest($id)
    {
        $test= Test::find($id);
        return view('lab.viewTest')->with('test',$test);
    }

    public function edit($id)
    {
        $test = test::find($id);
        return view('lab.editTest')->with('test',$test);
    }
    public function update(Request $request,$id)
    {
        $test = Test::find($id);
        $test->title=request('title');
        $test->description=request('description');
        $test->fee=request('fee');
        $test->time=request('time');
        $test->lab_id= Auth::guard('web')->user()->id;
        $test->save();
        return redirect()->back()->with('msg , Record Updated successfully');
    }
    public function destroy($id)
    {
        $test = Test::find($id);
        $test->delete();
        return redirect()->back();
    }
}
