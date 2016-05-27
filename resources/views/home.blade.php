@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome to WebEcoGIS</div>
                <div>Here you find some</div>
                <div class="panel-body">
                    <div id="viewDiv"></div>
                </div>
                <script type="text/javascript">
                    require([
                                "esri/Map",
                                "esri/views/SceneView",
                                "dojo/domReady!"
                            ],
                            function(Map, SceneView) {
                                var map = new Map({
                                    basemap: "streets"
                                });
                                var view = new SceneView({
                                    container: "viewDiv",
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
