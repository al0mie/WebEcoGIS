<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Offline Editing - COP</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" >
    <link rel="stylesheet" href="http://js.arcgis.com/3.14/dijit/themes/claro/claro.css">
    <link rel="stylesheet" href="http://js.arcgis.com/3.14/esri/css/esri.css" />

    <style>
        html,body{height:100%;width:100%;margin:0;overflow:hidden;font-family: sans-serif;}
        #loader-cloak {height:100%;width:100%;margin:0;position:absolute;z-index:999;background: #ddd;}
        #map{
            padding:0;
        }
        #header{
            font-size: 1.1em;
            padding-left: 1em;
            padding-top:4px;
            color:#660000;
        }
        .claro .dijitContentPane {
            padding: 2px;
            font-size: 12px;
        }
        .templatePicker {
            border: none;
        }
        .templatePicker .itemLabel {
            font-size: 11px;
        }
        .btn1
        {
            /*width: 96px;*/
            padding: 4px;
        }
        #connectivityIndicator,#storageInfo
        {
            text-align: center;
            border: 1px solid black;
            padding: 4px;
        }

        #connectivityIndicator 				{ color: white; background-color: #aaa; font-size: 16px;  }
        #connectivityIndicator.online 		{ background-color: #0C0; }
        #connectivityIndicator.offline  	{ background-color: #E00; }
        #connectivityIndicator.reconnecting { background-color: orange; }

        #pendingEdits {
            border: 1px solid black;
            overflow: scroll;
            height: 400px;
            margin: 0px;
            list-style: none;
            padding: 4px;
        }

        #pendingEdits li {
            border-bottom: 1px solid #ddd;
        }

        .dj_ie .infowindow .window .top .right .user .content { position: relative; }
        .dj_ie .simpleInfoWindow .content {position: relative;}
    </style>

    <script src="http://js.arcgis.com/3.14/"></script>
    <script src="http://github.hubspot.com/offline/offline.min.js"></script>

</head>
<body class="claro">
<div id="loader-cloak"></div>
<div id="main" data-dojo-type="dijit/layout/BorderContainer" data-dojo-props="design:'headline'" style="height:width:100%;height:100%;">
    <div data-dojo-type="dijit/layout/ContentPane" id="header" data-dojo-props="region:'top'">
        Common Operational Picture
    </div>
    <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'left'" style="width: 200px;overflow:hidden;">
        <div id="connectivityPane" data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'top'">
            <div id="connectivityIndicator" >unknown</div>
        </div>
        <div id="storageInfoPane" data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'top'">
            <div id="storageInfo">Storage used: 0 MBs</div>
        </div>
        <div id="pendingEditsPane" data-dojo-type="dijit/layout/ContentPane" data-dojo-propos="region:'top'">
            <button style="width:60%" id="clear-pending-edits-btn" class="btn1">Clear Local Edits</button>
            <button style="width:38%" id="go-offline-btn" class="btn1">Go Offline</button>
            <button style="width:60%" id="refresh-feature-layers-btn" class="btn1">Refresh Layers</button>
            <button style="width:38%" id="go-online-btn" class="btn1">Go Online</button>
            <ul id="pendingEdits"></ul>
        </div>
    </div>
    <div data-dojo-type="dijit/layout/ContentPane" id="map" data-dojo-props="region:'center'"></div>
    <div data-dojo-type="dijit/layout/ContentPane" data-dojo-props="region:'right'" style="width:242px;padding:1px;">
        <div id="editorDiv"></div>
        <div id="templateDiv"></div>
    </div>
</div>

<script>
    // based on https://developers.arcgis.com/javascript/jssamples/ed_simpletoolbar.html
    var map;

    require([
        "esri/map",
        "esri/tasks/GeometryService",
        "esri/toolbars/edit",

        "esri/layers/ArcGISTiledMapServiceLayer",
        "esri/layers/FeatureLayer",


        "esri/symbols/SimpleMarkerSymbol",
        "esri/symbols/SimpleLineSymbol",

        "esri/dijit/editing/Editor",
        "esri/dijit/editing/TemplatePicker",

        "esri/config",
        "dojo/i18n!esri/nls/jsapi",

        "dojo/_base/Deferred",
        "dojo/promise/all",

        "dojo/_base/array", "dojo/parser", "dojo/keys",
        "dojo/dom", "dojo/on", "dojo/dom-construct", "dojo/dom-class", "esri/domUtils",

        "dijit/layout/BorderContainer", "dijit/layout/ContentPane",
        "/js/editor/offline-edit-basic-src.js",
        "dojo/domReady!"
    ], function(
            Map, GeometryService, Edit,
            ArcGISTiledMapServiceLayer, FeatureLayer,
            SimpleMarkerSymbol, SimpleLineSymbol,
            Editor, TemplatePicker,
            esriConfig, jsapiBundle,
            Deferred, all,
            arrayUtils, parser, keys,
            dom, on, domConstruct, domClass, domUtils
    ) {
        var editor;

        parser.parse();
        dojo.fadeOut({node:'loader-cloak', onEnd: function(n){n.style.display="none"}}).play();

        // user interface
        on(dom.byId('storageInfo'), 'click', updateStorageInfo);
        on(dom.byId('clear-pending-edits-btn'),'click', clearPendingEdits);
        on(dom.byId('go-offline-btn'),'click', goOffline);
        on(dom.byId('go-online-btn'),'click', goOnline);
        on(dom.byId('refresh-feature-layers-btn'),'click', refreshFeatureLayers);
        var offlineEdit = new O.esri.Edit.OfflineEditBasic();

        // IMPORTANT!!!
        // A proxy page may be required to upload attachments.
        // If you are using a CORS enabled server you may be ablew to set the proxyPath to null.
        // Refer to "Using the Proxy Page" for more information:  https://developers.arcgis.com/en/javascript/jshelp/ags_proxy.html
        offlineEdit.proxyPath = null;

        map = new Map("map", {
            basemap: "satellite",
            center: [-0.958, 41.846],
            zoom: 13,
            slider: true
        });

        map.on('layers-add-result', initEditor);

        var fsUrl = "http://services2.arcgis.com/CQWCKwrSm5dkM28A/arcgis/rest/services/Military/FeatureServer/";
        // var layersIds = [0,1,2,3,4,5,6];
        var layersIds = [1,2,3];
        var featureLayers = [];
        var offlineInitializedLayers = [];

        layersIds.forEach(function(layerId)
        {
            var layer = new FeatureLayer(fsUrl + layerId, {
                mode: FeatureLayer.MODE_SNAPSHOT,
                outFields: ['*']
            });
            featureLayers.push(layer);
        })

        map.addLayers(featureLayers);

        //////////////////////////////////////

        function initEditor(evt)
        {

            initFeatureLayersForOffline(evt);

            try {
                /* template picker */
                var templateLayers = evt.layers.map(function(result){return result.layer;});
                var templatePicker = new TemplatePicker({
                    featureLayers: templateLayers,
                    grouping: true,
                    rows: "auto",
                    columns: 3,
                }, "templateDiv");
                templatePicker.startup();

                /* editor */
                var layers = evt.layers.map(function(result){return {featureLayer: result.layer};});
                var settings = {
                    map: map,
                    templatePicker: templatePicker,
                    layerInfos: layers,
                    toolbarVisible: true,
                    enableUndoRedo: true,
                    maxUndoRedoOperations: 15,
                    createOptions: {
                        polylineDrawTools: [
                            Editor.CREATE_TOOL_FREEHAND_POLYLINE,
                            Editor.CREATE_TOOL_POLYLINE ],
                        polygonDrawTools: [
                            Editor.CREATE_TOOL_FREEHAND_POLYGON,
                            Editor.CREATE_TOOL_POLYGON,
                            Editor.CREATE_TOOL_RECTANGLE ]
                    },
                    toolbarOptions: {
                        reshapeVisible: false
                    }
                };

                editor = new Editor({ settings: settings }, 'editorDiv');
                editor.startup();

                console.log("ok!");
            }
            catch(err)
            {
                console.log(err);
            }
        }

        function initFeatureLayersForOffline(evt){
            try {

                var promises = [];

                // extend layer with offline detection functionality
                evt.layers.forEach(function(result)
                {
                    var deferred = new Deferred();

                    var layer = result.layer;
                    offlineInitializedLayers.push(layer);

                    offlineEdit.extend(layer,function(success,error){
                        if(success){
                            deferred.resolve(true);
                        }
                        else{
                            deferred.reject(false);
                            alert("Unable to open database: " + error);
                        }
                    });
                    promises.push(deferred);
                });

                var allPromises = all(promises);
                allPromises.then(function(results){
                    if(results[0] && results[1] && results[2]){
                        resolveOfflinePromises();
                    }
                    else{
                        alert("There was a problem initializing the layers for offline.");
                    }
                });
            }
            catch(err)
            {
                console.log(err);
            }
        }

        // Things to do when all the promises complete
        function resolveOfflinePromises(){
            offlineEdit.on(offlineEdit.events.EDITS_ENQUEUED, updateStatus);
            offlineEdit.on(offlineEdit.events.EDITS_SENT, updateStatusAllEditsSent);

            offlineInitializedLayers[0].on("edits-complete", handleEditsComplete);
            offlineInitializedLayers[1].on("edits-complete", handleEditsComplete);
            offlineInitializedLayers[2].on("edits-complete", handleEditsComplete);

            // handle errors that happen while storing offline edits
            offlineEdit.on(offlineEdit.events.EDITS_ENQUEUED_ERROR, function(errors)
            {
                if( errors.length )
                {
                    var messages = errors.map(function(e){ return e });
                    alert("Error editing features: " + messages.join('\n'));
                }
            });

            updateConnectivityIndicator();
            updateStatus();

            Offline.check();
            Offline.on('up', goOnline );
            Offline.on('down', goOffline );

            if( Offline.state === 'up' )
            {
                // if we have pending edits from previous executions and we are online, then try to replay them
                goOnline();
            }
        }

        function updateStatus()
        {
            console.log("updatingStatus");
            updateStorageInfo();
            updatePendingEditsList();
        }

        function updateStatusAllEditsSent(responses){

            updateStorageInfo();

            if(Object.keys(responses).length !== 0){

                var addResults = [], updateResults = [], deleteResults = [];

                for (var key in responses) {
                    if (responses.hasOwnProperty(key)) {
                        var result = responses[key]; console.log("KEY KEY KEY " + JSON.stringify(result))
                        if(result.addResults.length > 0) addResults.push( result.addResults.map(function(e){ return "<l1>" + JSON.stringify(e) + "</li>"}));
                        if(result.updateResults.length > 0) updateResults.push( result.updateResults.map(function(e){ return "<l1>" + JSON.stringify(e) + "</li>";}));
                        if(result.deleteResults.length > 0) deleteResults.push( result.deleteResults.map(function(e){ return "<l1>" + JSON.stringify(e) + "</li>";}));
                    }
                }

                var allResults = addResults.join("<br>") + updateResults.join("<br>") + deleteResults.join("<br>");

                domConstruct.place(allResults, 'pendingEdits','last');
            }
        }

        function handleEditsSentError(error){
            var errorMessage = parseErrors(error.msg);
            alert("There was a problem syncing edits over the internet: " + errorMessage);
        }

        function handleEditsComplete(results){

            // Check for errors after online edits complete
            var errors = Array.prototype.concat(
                    results.adds.filter(function(r){ return !r.success }),
                    results.updates.filter(function(r){ return !r.success }),
                    results.deletes.filter(function(r){ return !r.success })
            );
            if( errors.length )
            {
                var messages = errors.map(function(e){ return e.error.message });
                alert("Error editing features: " + messages.join('\n'));
            }
        }

        function parseErrors(responses){
            if(Object.keys(responses).length !== 0){

                var addResults = [], updateResults = [], deleteResults = [];

                for (var key in responses) {
                    if (responses.hasOwnProperty(key)) {
                        var result = responses[key];
                        addResults.push( result.addResults.map(function(e){ return JSON.stringify(e)}));
                        updateResults.push( result.updateResults.map(function(e){ return JSON.stringify(e);}));
                        deleteResults.push( result.deleteResults.map(function(e){ return JSON.stringify(e);}));
                    }
                }

                return addResults.join("/n") + updateResults.join("/n") + deleteResults.join("/n");
            }
        }

        function updateStorageInfo()
        {
            function bytesToSize(bytes) {
                if(bytes == 0) return '0 Byte';
                var k = 1000;
                var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
                var i = Math.floor(Math.log(bytes) / Math.log(k));
                return (bytes / Math.pow(k, i)).toPrecision(3) + ' ' + sizes[i];
            }

            offlineInitializedLayers[0].getUsage(function(usage,error){
                if(error == null){
                    var info = "Used " + bytesToSize(usage.sizeBytes);
                    dom.byId('storageInfo').innerHTML = info;
                }
            });
        }

        function updatePendingEditsList()
        {
            var li;
            domConstruct.empty('pendingEdits');

            // We can use Array[0] because all feature layers are sharing the same offline database
            offlineInitializedLayers[0].getAllEditsArray(function(success,array){
                if(success && array.length > 0){
                    array.forEach(function(edit)
                    {
                        var readableEdit = edit.operation + ": " + ", ID: " + edit.graphic.attributes.objectid + ", Type: " + edit.type;
                        li = "<li>" + readableEdit + "</li>";
                        domConstruct.place(li, 'pendingEdits','last');
                    },this);
                }
                else{
                    li = "<li>No edits pending</li>";
                    domConstruct.place(li, 'pendingEdits','last');
                }
            });
        }

        function clearPendingEdits()
        {
            // We can use Array[0] because all feature layers are sharing the same offline database
            offlineInitializedLayers[0].resetDatabase(function(success,error){
                if(!success) alert("There was a problem resetting the database: " + error);
            });
            updateStatus();
        }

        function goOnline()
        {
            domUtils.show(editor.progressBar.domNode);
            offlineEdit.goOnline(function()
            {
                domUtils.hide(editor.progressBar.domNode);
                updateConnectivityIndicator();
            });
            updateConnectivityIndicator();
        }

        function goOffline()
        {
            offlineEdit.goOffline();
            updateConnectivityIndicator();
        }

        function updateConnectivityIndicator()
        {
            var node = dom.byId('connectivityIndicator');
            domClass.remove(node, "online offline reconnecting");
            switch( offlineEdit.getOnlineStatus() )
            {
                case offlineEdit.OFFLINE:
                    node.innerHTML = "<i class='fa fa-chain-broken'></i> offline";
                    domClass.add(node, "offline");
                    break;
                case offlineEdit.ONLINE:
                    node.innerHTML = "<i class='fa fa-link'></i> online";
                    domClass.add(node, "online");
                    break;
                case offlineEdit.RECONNECTING:
                    node.innerHTML = "<i class='fa fa-cog fa-spin'></i> reconnecting";
                    domClass.add(node, "reconnecting");
                    break;
            }
        }

        function refreshFeatureLayers()
        {
            offlineInitializedLayers.forEach(function(featureLayer)
            {
                featureLayer.refresh();
            })
        }
    });
</script>

</body>
</html>