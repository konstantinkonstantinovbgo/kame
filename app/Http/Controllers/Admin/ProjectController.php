<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Project;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Display a listing of project
     *
     * @param Request $request
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $project = Project::all();

        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new project
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $category = Project::$category;

        return view('admin.project.create', compact("category"));
    }

    /**
     * Store a newly created project in storage.
     *
     * @param CreateProjectRequest|Request $request
     */
    public function store(CreateProjectRequest $request)
    {
//        Project::create($request->all());
        Project::create($this->processRequest($request));

        return redirect()->route(config('quickadmin.route') . '.project.index');
    }

    /**
     * Show the form for editing the specified project.
     *
     * @param  int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $project = Project::find($id);

        $category = Project::$category;

        return view('admin.project.edit', compact('project', "category"));
    }

    /**
     * Update the specified project in storage.
     * @param UpdateProjectRequest|Request $request
     *
     * @param  int                         $id
     */
    public function update($id, UpdateProjectRequest $request)
    {
        $project = Project::findOrFail($id);

        $project->update($this->processRequest($request));
//		$project->update($request->all());

        return redirect()->route(config('quickadmin.route') . '.project.index');
    }

    /**
     * Remove the specified project from storage.
     *
     * @param  int $id
     */
    public function destroy($id)
    {
        Project::destroy($id);

        return redirect()->route(config('quickadmin.route') . '.project.index');
    }

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Project::destroy($toDelete);
        } else {
            Project::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route') . '.project.index');
    }

    private function processRequest($request)
    {
        return [
            'en' => [
                'title' => $request->input('en_title'),
                //                'description' => $request->input('en_description')
            ],
            'bg' => [
                'title' => $request->input('bg_title'),
                //                'description' => $request->input('es_description')
            ],
            'de' => [
                'title' => $request->input('de_title'),
                //                'description' => $request->input('es_description')
            ],
        ];
    }
}
