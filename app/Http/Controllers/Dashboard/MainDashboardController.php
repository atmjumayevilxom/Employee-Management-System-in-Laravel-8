<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainDashboardController extends Controller
{
    // view page student
    public function student(){
        return view('dashboard.student_dashboard');
    }

    // view page student
    public function teacher(){
        return view('dashboard.teacher_dashboard');
    }

    // view page student
    public function parent(){
        return view('dashboard.parent_dashboard');
    }
}
