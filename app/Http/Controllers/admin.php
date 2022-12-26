<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class admin extends Controller
{
    public function admin()
    {
        $data = [
            'data' => student::get()
        ];
        return view('admin.index', $data);
    }
}
