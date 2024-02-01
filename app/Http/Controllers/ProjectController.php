<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{
    

    public function showProject($id){
        $proj=DB::table('project')->where('id', $id)->first();
        // dd($proj);
        return view('display', compact('proj'));
}
}