<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\file;
class ProjectsStasticsController extends Controller
{
    //
    public function index(){
        return view('academic.project.projectsStastics');
    }
}
