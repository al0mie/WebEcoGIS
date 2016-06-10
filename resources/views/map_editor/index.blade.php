<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" >
    <link rel="stylesheet" href="http://js.arcgis.com/3.14/dijit/themes/claro/claro.css">
    <link rel="stylesheet" href="http://js.arcgis.com/3.14/esri/css/esri.css" />
    <link rel="stylesheet" href="/css/editor.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

    <script src="http://js.arcgis.com/3.14/"></script>
    <script src="http://github.hubspot.com/offline/offline.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link href="/css/custom_styles.css" rel="stylesheet">
</head>

    <body class="claro">
    @include('layouts.menu')
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


    <script src="/js/editor/editor.js"></script>
</body>
</html>