@extends('layouts.app')

@section('content')

    <div class="box-body container">
        <table class="table table-bordered">
            <thead>
            <th>No</th>
            <th>{{ trans('project.index.name') }}</th>
            <th class="text-center">{{ trans('project.index.action') }}</th>
            </thead>
            <tbody>
            <?php $no = 1 ?>
            @foreach ($projects as $project)
                <tr>
                    <td>{!! $no !!}</td>
                    <td>{!! $project->name !!}</td>

                    <td class="text-center">
                        <a href="{!! route('project.edit', $project->id) !!}">Edit</a>
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