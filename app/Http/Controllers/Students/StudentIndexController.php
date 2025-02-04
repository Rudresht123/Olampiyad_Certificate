<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentIndexController extends Controller
{
    public function index()
    {
        return view('admin_panel.module.students.index');
    }
}
