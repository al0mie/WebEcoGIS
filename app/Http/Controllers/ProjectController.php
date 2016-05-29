<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{
    /**s
     * HomeController constructor.
     */
    public function __construct()
    {
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

    }

    /**
     *
     */
    public function create()
    {

    }

    /**
     *
     */
    public function store()
    {
    }

    /**
     * @param $id
     */
    public function show($id)
    {

    }


    /**
     * @param $id
     */
    public function edit($id)
    {
    }

    /**
     * @param $id
     */
    public function update($id)
    {

    }

    /**
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
        } catch (ModelNotFoundException $e) {
            return $this->redirectNotFound();
        }
    }
}
