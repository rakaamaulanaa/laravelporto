<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home', [
            'about' => About::first(),
            'skills' => Skill::all(),
            'education' => Education::all(),
            'projects' => Project::all(),
        ]);
    }
}
