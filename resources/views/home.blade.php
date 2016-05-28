@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">Welcome to WebEcoGIS</div>
                    @include('modal.form_create_project')
                    @include('modal.form_add_DEM')
                    <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#create-project">Показать всплывающее окно</button>
                    <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#add-dem">Показать всплывающее окно</button>
                    <div id="view-div"></div>
                    <script type="text/javascript">
                        require([
                                    "esri/Map",
                                    "esri/views/SceneView",
                                    "dojo/domReady!"
                                ],
                                function (Map, SceneView) {
                                    var map = new Map({
                                        basemap: "streets"
                                    });
                                    var view = new SceneView({
                                        container: "view-div",
                                        map: map,
                                        scale: 50000000,
                                        center: [-101.17, 21.78]
                                    });
                                });
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
