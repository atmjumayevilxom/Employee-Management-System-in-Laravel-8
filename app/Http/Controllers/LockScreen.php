<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Brian2694\Toastr\Facades\Toastr;

class LockScreen extends Controller
{    
    // lock screen
    public function lockScreen()
    {
        if(!session('lock-expires-at'))
        {
            return redirect('dashboard.main_dashboard');
        }

        if(session('lock-expires-at') > now())
        {
            return redirect('dashboard.main_dashboard');
        }
        return view('lockscreen.lockscreen');
    }
    
    // unlock screen
    public function unlock(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);
        $check = Hash::check($request->input('password'), $request->user()->password);

        if(!$check)
        {
            Toastr::error('fail, Your password does not match :)','Error');
            return redirect()->route('lock_screen');
        }
        session(['lock-expires-at' => now()->addMinutes($request->user()->getLockoutTime())]);
        return redirect('dashboard.main_dashboard');
    }
}
