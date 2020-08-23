<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Portofolio;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Project::paginate(6);
        $latest = Project::orderby('id', 'desc')->first();
        return view('home/index', compact('data', 'latest'));
    }

    public function about()
    {
        $data = Portofolio::where('activated', 'activated')->first();
        $experience = Experience::orderby('id', 'desc')->get();
        return view('home/about', compact('data', 'experience'));
    }

    public function portofolio()
    {
        $data = Project::all();
        return view('home/portofolio', compact('data'));
    }

    public function sendRecrutment()
    {
        //
    }

    public function contact()
    {
        return view('home/contact');
    }
}
