<?php

namespace App\Http\Controllers;


use App\Models\project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index()
    {

        $projects = project::orderBy("id", "asc")->paginate(5);
        return view("project", compact("projects", $projects ));
    }

    public function create()
    {

        $projects = project::all();
        return view("project.create", compact("projects",$projects));
    }

    public function edit(project $project)
    {
        $projects = project::all();
        return view("project.edit", compact("projects", $project));
    }

    public function store(Request $request)
    {

        $request->validate([
            'project Name' => 'required',
            'team Members' => 'required',
            'project Progress' => 'required',
            'status' => 'required',
        ]);

        //project::create($request->all());// dans le cas on a definie fillable dans le modele de l'project
        //sinon on doit syntaxer commeca

        project::create([
            'project Name' => $request->projectName,
            'project Progress' => $request->projectProgress,
            'team Members' => $request->teamMembers,
            'status' => $request->status,
        ]);
        return back()->with("success", "project ajoute avec succes!!!!!");
    }

    public function delete(project $project)
    {
        $nom_complet = $project->projectName;
        $project->delete();

        return back()->with("successDelete", "L'project '$nom_complet' supprime avec succes!!!!!");
    }
    public function update(Request $request, project $project)
    {

        $request->validate([
            'project Name' => 'required',
            'team Members' => 'required',
            'project Progress' => 'required',
            'status' => 'required',
        ]);

        //project::create($request->all());// dans le cas on a definie fillable dans le modele de l'project
        //sinon on doit syntaxer commeca

        $project->update([
            "project Name" => $request->projectName,
            "team Members" => $request->teamMembers,
            "project Progress" => $request->projectProgress,
            "status" => $request->status,
        ]);
        return back()->with("success", "project mis a jour avec succes!!!!!");
    }
}
