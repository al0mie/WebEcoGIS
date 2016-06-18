<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
    /**
     * project auth user
     * @var
     */
    private $projects;
    private $projectRepository;

    /**
     * HomeController constructor.
     * @param \App\Repositories\ProjectRepository $repository
     */
    public function __construct(\App\Repositories\ProjectRepository $projectRepository)
    {
        if (\Auth::check()) {
            $this->projects = Project::where('user_id', \Auth::user()->id)->get();
        }
        $this->projectRepository = $projectRepository;
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
        $project = new Project();
        $project = $this->updateProperties($project, $data);
        $project->save();
        return redirect()->route('project.show', ['id' => $project->id]);
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        $project = Project::find($id);
        return view('project.show', array('project' => $project));
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
            return redirect()->route('project.index');
        } catch (ModelNotFoundException $e) {
            return $this->redirectNotFound();
        }
    }

    private function updateProperties(&$project, $data)
    {
        $project->user_id = Auth::user()->id;
        $project->name = $data['projectName'];
        $project->coordinate_transform = $data['transformCoord'];
        $project->coordinate_type = $data['coordType'];
        if ($data['coordType'] == 'rectangle_type') {
            $project->coordinate_value_minX = $data['Xmin'];
            $project->coordinate_value_minY = $data['Ymin'];
        } else if ($data['coordType'] == 'geographical_type') {
            $project->coordinate_value_minB = $data['BminHours'] . ',' . $data['BminMinutes'] . ',' . $data['BminSeconds'];
            $project->coordinate_value_minL = $data['LminHours'] . ',' . $data['LminMinutes'] . ',' . $data['LminSeconds'];
        }

        $project->size_element = $data['sizeElem'];
        $project->number_elementX = $data['XElem'];
        $project->number_elementY = $data['YElem'];
        $project->absolute_height = $data['maxHeight'];
        return $project;
    }


}