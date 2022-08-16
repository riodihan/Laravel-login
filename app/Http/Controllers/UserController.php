<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $data['proyek'] = DB::table('tb_proyek')
            ->join('tb_kategori', 'tb_proyek.proyek_category', '=', 'tb_kategori.kategori_id')
            ->select('tb_proyek.*', 'tb_kategori.kategori_name')
            ->where('proyek_category', '=', 2)
            ->get();

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
        $data['proyek'] = DB::table('tb_proyek')
            ->join('tb_kategori', 'tb_proyek.proyek_category', '=', 'tb_kategori.kategori_id')
            ->select('tb_proyek.*', 'tb_kategori.kategori_name')
            ->where('proyek_category', '=', 1)
            ->get();


        if (Auth::guest()) {
            return redirect()->route('login');
        }
        // dd($data['proyek']);
        return view('admin/proyek_android', $data);
    }
}
