<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //GET PROJECTS
    public function getProjects()
    {
        return ["name" => "Musa"];
    }
}
