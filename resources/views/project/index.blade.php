@extends('layouts.app')

@section('content')

    <div class="box-body container">
        <table class="table table-bordered table-container">
            <thead>
            <th>No</th>
            <th>{{ trans('project.index.name') }}</th>
            <th>{{ trans('project.index.date_create') }}</th>
            <th class="text-center">{{ trans('project.index.action') }}</th>
            </thead>
            <tbody>
            <?php $no = 1 ?>
            @foreach ($projects as $project)
                <tr>
                    <td>{!! $no !!}</td>
                    <td>{!! $project->name !!}</td>
                    <td>{!! $project->created_at !!}</td>
                    <td class="text-center">
                        <a href="{!! route('project.edit', $project->id) !!}">Edit</a>
                        {!! Form::open(array('route' => array('project.destroy', $project->id), 'method' => 'delete')) !!}
                            <button class='btn btn-danger pull-right btn-xs' type="submit">Delete Template</button>
                        {!! Form::close() !!}

                        &middot;
                    </td>
                </tr>
                <?php $no++;?>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="text-center">

    </div>
@stop