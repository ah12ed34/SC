<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\file;
class WorksStasticsProjectsController extends Controller
{
    //
    public function index(){
        return view('academic.student.worksStasticsProjects');
    }
}
