<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MapEditorController extends Controller
{


    /**
     * MapEditorController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    protected function redirectNotFound()
    {

    }

    /**
     *
     */
    public function index()
    {
        return view('map_editor.index');
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
        $data = Input::all();
    }

    /**
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {

    }
}
