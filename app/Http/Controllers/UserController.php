<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        $data = ([
            'title' => 'Dashboard',
            'active' => 'active'
        ]);

        if (Auth::guest()) {
            return redirect()->route('login');
        }

        return view('admin/dashboard', $data);
    }

    public function proyek_website()
    {
        $data = ([
            'title' => 'Proyek Website',
            'active' => 'active'
        ]);

        if (Auth::guest()) {
            return redirect()->route('login');
        }

        return view('admin/proyek_website', $data);
    }

    public function proyek_android()
    {
        $data = ([
            'title' => 'Proyek Android',
            'active' => 'active'
        ]);

        if (Auth::guest()) {
            return redirect()->route('login');
        }

        return view('admin/proyek_android', $data);
    }
}
