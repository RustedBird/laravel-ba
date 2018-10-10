<?php

namespace App\Http\Controllers;

use App\ProjectMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use Illuminate\Database\Eloquent\Collection;
use App\Article;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $result = DB::table('projects')->whereBetween('id', [1, 3])->orderByDesc('id')->get();
//        $result = DB::table('projects')->where('id', 3)->update(['name'=>'newName']);
//        $result = DB::table('projects')->where('id', 1)->delete();
//        $result = MyProject::where('id', 1)->get();
//        $result->add(new MyProject);

//        $result2 = new Collection;

//        $merged = $result->merge($result2);
//        dd($merged);

//        MyProject::destroy(1);

        /* $result->name = 'asdasdasdasd';

         $result->save();*/

//        $result->update(['name' => 'yyyy']);

//        $result = Project::getSomeProjects(1);
//        $result = Project::where('id', 1)->first();
//        $result = Project::with('project_metadata')->find(1);
//        $result = Project::whereIn('id', [1, 2, 3])->get();
//        $result[0]->changeName('new Project');
//        $result[0]->save();

//        $result = Project::with('project_metadata')->get();
//        $result->load('project_metadata');

        /*foreach ($result as $project)
        {
            dump($project->project_metadata);
        }*/

//        $meta = ProjectMeta::with('meta_project')->get();

//        $project = Project::where('id', 2)->first();
//
//        $article = new Article([
//            'title' => 'newArticle',
//            'content' => 'asdasdasdasd'
//        ]);
//
//        $project->project_articles()->save($article);
//
//        $project->project_articles()->where('id', 1)->update(['title' => 'new title']);
        $projects = DB::select("SELECT * FROM projects INNER JOIN project_metadata ON projects.id = project_metadata.project_id 
                                      WHERE projects.id > 3 ORDER BY projects.id DESC ");


        $projects = DB::table('projects')->get()->chunk(2);

        dd($projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
