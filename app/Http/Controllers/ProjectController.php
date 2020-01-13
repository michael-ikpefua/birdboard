<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('project.index', compact('projects'));
    }
    public function store()
    {
        Project::create(request(['title', 'description']));

        return redirect('project');
    }
}
