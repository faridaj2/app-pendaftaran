<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function admin()
    {
        $total = student::get();
        $reg   = student::where('status', 'fix')->get();
        $not   = student::where('status', 'wait')->get();

        $data = [
            'total' => count($total),
            'reg' => count($reg),
            'not' => count($not)
        ];
        return view('admin.index', $data);
    }
    public function all_student(Request $req)
    {   
        if($req->search !== ''){
            $student = student::search($req->search)->get();
        }else{
            $student = student::get();
            dd('$student');
        }
        $data = [
            'data' => $student
        ];
        return view('admin.all_student', $data);
    }
    public function register()
    {
        $data = [
            'data' => student::where('status', 'fix')->get()
        ];
        return view('admin.register', $data);
    }
    public function not_register()
    {
        $data = [
            'data' => student::where('status', 'wait')->get()
        ];
        return view('admin.not_register', $data);
    }
    public function toggle_status(Request $request)
    {
        $student = student::find($request->id);
        if($student->status == 'wait')
        {
            $student->update([
                'status' => 'fix'
            ]);
        }else{
            $student->update([
                'status' => 'wait'
            ]);
        }
        return redirect()->back();
    }
}
