@extends('layouts.app')

@section('content')

    <div class="claro">
        <div id="loader-cloak"></div>
        <div id="main" data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design:'headline'"
             style="width:100%;height:100%;">

            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'left'"
                 style="width: 200px;overflow:hidden;">

                <div id="pendingEditsPane" data-dojo-type="dijit/layout/ContentPane" data-dojo-propos="region:'top'">
                    <button style="width:60%" id="refresh-feature-layers-btn" class="btn1">Refresh Layers</button>
                </div>
            </div>
            <div data-dojo-type="dijit/layout/ContentPane" id="map" data-dojo-props="region:'center'"></div>
            <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'right'"
                 style="width:242px;padding:1px;">
                <div id="editorDiv"></div>
                <div id="templateDiv"></div>
            </div>
        </div>
    </div>
    <script src="http://js.arcgis.com/3.14/"></script>
    <script src="http://github.hubspot.com/offline/offline.min.js"></script>

    <script src="/js/editor/editor.js"></script>

@stop