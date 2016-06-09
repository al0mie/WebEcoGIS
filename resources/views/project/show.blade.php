@extends('layouts.app')

@section('content')
    <div id="project-area">
        <div id="project-container">
        </div>
        <div id="project-properties">
            <input type="text" value="X: 0" id="coordX" disabled/>
            <input type="text" value="Y: 0" id="coordY" disabled/>
            <input type="text" value="Height: 0" id="height" disabled/>
        </div>
    </div>

    <script>
        $(document).ready(function (e) {
            var $coordX = $('#coordX');
            var $coordY = $('#coordY');
            var $height = $('#height');
            var step = '{!! $project->size_element !!}';
            var numberElementX = '{!! $project->number_elementX !!}';
            var numberElementY = '{!! $project->number_elementY !!}';

            @if ($project->coordinate_type == 'rectangle_type')
                var minX = '{!! $project->coordinate_value_minX !!}}';
                var minX = '{!! $project->coordinate_value_minY !!}}';
            /**
             * TODO: imlement geo coordinates
             */
            @elseif($project->coordinate_type == 'geographical_type')

            @endif

            $('#project-container').on('mousemove', function (e) {
                var posX = $(this).offset().left ;
                var posY = $(this).offset().top + $(this).height();
                var coefX = $(this).width()/numberElementX;
                var coefY = $(this).height()/numberElementY;

                $coordX.val('X: ' + parseInt((e.pageX - posX)/coefX) * step);
                $coordY.val('Y: ' + (parseInt((posY - e.pageY)/coefY) * step));
            });
        });
    </script>
@stop