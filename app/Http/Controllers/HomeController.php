<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('mahasiswaHome');
    }

    public function dosenHome()
    {
        return view('dosenHome');
    }

    public function superAdminHome()
    {
        return view('superadminHome');
    }

    public function adminHome()
    {
        return view('adminHome');
    }
    public function mahasiswaHome()
    {
        return view('mahasiswaHome');
    }

    public function tendikHome()
    {
        return view('tendikHome');
    }

    public function akademikHome()
    {
        return view('akademikHome');
    }

    public function keuanganHome()
    {
        return view('keuanganHome');
    }

    public function direkturHome()
    {
        return view('direkturHome');
    }

    public function wakil1Home() : View
    {
        return view('wd1Home');
    }

    public function wakil2Home()
    {
        return view('wd2Home');
    }

    public function wakil3Home()
    {
        return view('wd3Home');
    }

    public function lppmHome()
    {
        return view('lppmHome');
    }

    public function sdmHome()
    {
        return view('sdmHome');
    }
}
