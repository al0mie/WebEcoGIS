<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
    /**
     * project auth user
     * @var
     */
    private $projects;

    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        if (\Auth::check()) {
            $this->projects = Project::where('user_id', \Auth::user()->id)->get();
        }
    }

    /**
     * @return mixed
     */
    protected function redirectNotFound()
    {
        return $this->redirect('projects.index');
    }

    /**
     *
     */
    public function index()
    {
        return view('project.index', array('projects' => $this->projects));
    }

    /**
     *
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     *
     */
    public function store()
    {
        $data = Input::all();
        dd($data);
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        return view('project.show');
    }


    /**
     * @param $id
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('project.edit', array('project' => $project));
    }

    /**
     * @param $id
     */
    public function update($id)
    {
        $data = Input::all();
    }

    /**
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            Project::destroy($id);
        } catch (ModelNotFoundException $e) {
            return $this->redirectNotFound();
        }
    }
}
