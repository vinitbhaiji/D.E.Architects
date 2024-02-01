<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Teams;
use App\Models\Contactformdata;

use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
        return view("dashboard");
    }
    // public function dashboardviewpage(){
    //     return view("dashboard-view");
    // }
    public function projectpage(){
        return view("project");
    }
    public function login(){
        return view("login");
    }
    public function team(){
        return view("team");
    }
    // public function manageprojectpage(){
    //     return view("manageproject");
    // }
    public function project(Request $data){
        $project = new projects();
        $project->name=$data->input('project_name');
        $project->description=$data->input('description');
        // $project->display_image = $data->file('display_image')->store('storage/app/public/uploads');
        if ($data->hasFile('display_image')) {
            $file = $data->file('display_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_main.' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->display_image = $filename;
        }
        if ($data->hasFile('image1')) {
            $file = $data->file('image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_1' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->image1 = $filename;
        }
        if ($data->hasFile('image2')) {
            $file = $data->file('image2');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_2.' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->image2 = $filename;
        }
        if ($data->hasFile('image3')) {
            $file = $data->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_3.' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->image3 = $filename;
        }
        if ($data->hasFile('image4')) {
            $file = $data->file('image4');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_4.' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->image4 = $filename;
        }
        if ($data->hasFile('image5')) {
            $file = $data->file('image5');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_5.' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->image5 = $filename;
        }
        if ($data->hasFile('image6')) {
            $file = $data->file('image6');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_6.' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->image6 = $filename;
        }
        if ($data->hasFile('image7')) {
            $file = $data->file('image7');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_7.' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->image7 = $filename;
        }
        if ($data->hasFile('image8')) {
            $file = $data->file('image8');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_8.' . $ext;
            $file->move('uploads/projects/', $filename);
            $project->image8 = $filename;
        }
        $project->save();
        return redirect()->back();
    }
    public function manageproject(){
        $data = Projects::all();
        $data = compact ('data');
        return view('manageproject')->with($data);
    }
    public function destroyproject($id){
        $data = Projects::find($id);
        $data->delete();    
        return redirect('manageproject');
    }
    public function getProjectById($id){
        $project = Projects::find($id);
        
        // $teams = DB::table('teams')->first();
        // $data = Teams::whereId($id);
        // dd($data);
        // dd($teams);
        return view('editprojects',['team'=>$project]);
    }
    public function updatePro(Request $request, $id){
        $team = Projects::find($id);
        $team->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        if ($request->hasFile('display_image')) {
            $file = $request->file('display_image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_main.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->display_image = $filename;
            $team->save();
        }
        if ($request->hasFile('image1')) {
            $file = $request->file('image1');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_1.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->image1 = $filename;
            $team->save();
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_2.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->image2 = $filename;
            $team->save();
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_3.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->image3 = $filename;
            $team->save();
        }
        if ($request->hasFile('image4')) {
            $file = $request->file('image4');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_4.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->image4 = $filename;
            $team->save();
        }
        if ($request->hasFile('image5')) {
            $file = $request->file('image5');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_5.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->image5 = $filename;
            $team->save();
        }
        if ($request->hasFile('image6')) {
            $file = $request->file('image6');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_6.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->image6 = $filename;
            $team->save();
        }
        if ($request->hasFile('image7')) {
            $file = $request->file('image7');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_7.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->image7 = $filename;
            $team->save();
        }
        if ($request->hasFile('image8')) {
            $file = $request->file('image8');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_8.' . $ext;
            $file->move('uploads/projects/', $filename);
            $team->image8 = $filename;
            $team->save();
        }
        
        return redirect('manageproject');
    }



    


    public function manageteams(){
        $data = Teams::all();
        // $data = compact ('data');
        return view('manageteams',compact('data'));
    }


    
    public function submit(Request $send)
    {
        $teams = new Teams();
        $teams->name = $send->input('name');

        $teams->position = $send->input('position');

        if ($send->hasFile('image')) {
            $file = $send->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_main.' . $ext;
            $file->move('uploads/teams/', $filename);
            $teams->image = $filename;
        }
        $teams->save();
        return redirect()->route('team');
    }

    
    public function destroyteam($id){
        $data = Teams::find( $id );
        $data->delete();
        return redirect('manageteams');
    }


    
    public function getTeamById($id){
        $team = Teams::find($id);
        
        // $teams = DB::table('teams')->first();
        // $data = Teams::whereId($id);
        // dd($data);
        // dd($teams);
        return view('edit',['team'=>$team]);
    }



    
    public function updateTeam(Request $request, $id){
        $team = Teams::find($id);
        $team->update([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '_main.' . $ext;
            $file->move('uploads/teams/', $filename);
            $team->image = $filename;
            $team->save();
        }
        return redirect('manageteams');
    }





    public function dashboardview(){
        $data = Contactformdata::all();
        $data = compact ('data');
        return view('dashboard-view')->with($data);
    }
}