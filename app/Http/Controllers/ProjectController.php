<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function show($id = null)
    {
         
        $projectToEdit = null;
        $projects = DB::table('projects')
            ->select('id', 'title', 'image')
            ->get();
        

        if ($id != null) {
            $projectToEdit = DB::table('projects')
                ->where("id", '=', $id)
                ->first();
        }

        return view('editProject', ['projects' => $projects, 'projectToEdit' => $projectToEdit]);
    }

    public function update(Request $request, $id) {


        $validator=  Validator::make($request->all(), [
            'title' => ['required'],
            'image' => ['required'],
            'excerpt' => ['required'],
            'description' => ['required'],
            'type' => ['required'],
            'skills' => ['required']
        ]);

        if ($validator->fails()) {
            return back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $project = Project::findorFail($id);
        $project->title = $request->input('title');
        $project->image = $request->input('image');
        $project->excerpt = $request->input('excerpt');
        $project->description = $request->input('description');
        $project->type = $request->input('type');
        $project->skills = $request->input('skills');
        $project->save();
        return back()->with('status', 'Project Updated');
    }
    public function delete(Request $request, $id) {
            $project = Project::findorFail($id);
            $project->delete();
            return redirect()->route('edit')->withFlashSuccess(__('Project Deleted'));
    }

    public function store(Request $request)
    {
        $validator=  Validator::make($request->all(), [
            'title' => ['required'],
            'image' => ['required'],
            'excerpt' => ['required'],
            'description' => ['required'],
            'type' => ['required'],
            'skills' => ['required']

        ]);

        if ($validator->fails()) {
            return redirect('create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $project = new Project;
        $project->title         = $request->input('title');
        $project->image         = $request->input('image');
        $project->excerpt       = $request->input('excerpt');
        $project->description   = $request->input('description');
        $project->type          = $request->input('type');
        $project->skills        = $request->input('skills');
        $project->save();
        return back()->withInput()->withFlashSuccess(__('Project Created'));
    }
}
