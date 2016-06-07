@extends('layouts.app')

@section('content')

    <div class="box-body container">
        <table class="table table-bordered table-container">
            <thead>
            <th>No</th>
            <th>{{ trans('project.index.name') }}</th>
            <th>{{ trans('project.index.date_create') }}</th>
            <th>{{ trans('project.index.date_update') }}</th>
            <th>{{ trans('project.index.action') }}</th>
            </thead>
            <tbody>
            <?php $no = 1 ?>
            @foreach ($projects as $project)
                <tr>
                    <td>{!! $no !!}</td>
                    <td>{!! $project->name !!}</td>
                    <td>{!! $project->created_at !!}</td>
                    <td>{!! $project->updated_at !!}</td>
                    <td>
                        <div class="">
                            <a href="{!! route('project.edit', $project->id) !!}"
                               class="btn btn-default  btn-md">{!! trans('project.edit') !!}</a>
                        </div>
                        <div class="">
                            <a href="{!! route('project.show', $project->id) !!}"
                               class="btn btn-default  btn-md">{!! trans('project.show') !!}</a>
                        </div>
                        <div class="">
                            {!! Form::open(array('route' => array('project.destroy', $project->id), 'method' => 'delete')) !!}
                            <button class='btn btn-default btn-md'
                                    type="submit">{!! trans('project.delete') !!}</button>
                            {!! Form::close() !!}</div>
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