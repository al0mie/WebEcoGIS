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
                        <div class="box">
                            <a href="{!! route('project.edit', $project->id) !!}"
                               class="btn btn-default  btn-md">{!! trans('project.edit') !!}</a>


                            <a href="{!! route('project.show', $project->id) !!}"
                               class="btn btn-success  btn-md">{!! trans('project.show') !!}</a>

                            <a href="{!! route('project.show', $project->id) !!}"
                               class="btn btn-danger  btn-md">{!! trans('project.delete') !!}</a>
                      </div>
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