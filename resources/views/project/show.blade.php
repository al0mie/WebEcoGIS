@extends('layouts.app')

@section('content')
    <div id="project-area">
        <div id="project-container">
        </div>
        <div id="project-properties">
            <input type="text" value="X: 0" id="coordX"/>
            <input type="text" value="Y: 0" id="coordY"/>
            <input type="text" value="Height: 0" id="height"/>
        </div>
    </div>

    <script>
        $(document).ready(function (e) {
            var $coordX = $('#coordX');
            var $coordY = $('#coordY');
            var $height = $('#height');
            var step = 50;
            $('#project-container').on('mousemove', function (e) {
                var posX = $(this).offset().left;
                var posY = $(this).offset().top;
                $coordX.val('X: ' + (parseInt(e.pageX - posX) * step));
                $coordY.val('Y: ' + (parseInt(e.pageY - posY) * step));
            });
        });
    </script>
@stop