@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($project, array('class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.project.update', $project->id))) !!}

    <div class="form-group">
        {!! Form::label('en_title', 'title', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('en_title', old('en_title',$project->translate('en')->title), array('class'=>'form-control')) !!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('content', 'content', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::textarea('content', old('content',$project->content), array('class'=>'form-control ckeditor')) !!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('client_name', 'client_name', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('client_name', old('client_name',$project->client_name), array('class'=>'form-control')) !!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('project_name', 'project_name', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('project_name', old('project_name',$project->project_name), array('class'=>'form-control')) !!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('created_date', 'created_date', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('created_date', old('created_date',$project->created_date), array('class'=>'form-control datepicker')) !!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('category', 'category', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::select('category', $category, old('category',$project->category), array('class'=>'form-control')) !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
          {!! link_to_route(config('quickadmin.route').'.project.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('bg_title', 'title', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('bg_title', old('bg_title',$project->translate('bg')->title), array('class'=>'form-control')) !!}

        </div>
    </div><div class="form-group">
        {!! Form::label('content', 'content', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::textarea('content', old('content',$project->content), array('class'=>'form-control ckeditor')) !!}

        </div>
    </div><div class="form-group">
        {!! Form::label('client_name', 'client_name', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('client_name', old('client_name',$project->client_name), array('class'=>'form-control')) !!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('project_name', 'project_name', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('project_name', old('project_name',$project->project_name), array('class'=>'form-control')) !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
          {!! link_to_route(config('quickadmin.route').'.project.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('de_title', 'title', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('de_title', old('de_title',$project->translate('de')->title), array('class'=>'form-control')) !!}

        </div>
    </div><div class="form-group">
        {!! Form::label('content', 'content', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::textarea('content', old('content',$project->content), array('class'=>'form-control ckeditor')) !!}

        </div>
    </div><div class="form-group">
        {!! Form::label('client_name', 'client_name', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('client_name', old('client_name',$project->client_name), array('class'=>'form-control')) !!}

        </div>
    </div>
    <div class="form-group">
        {!! Form::label('project_name', 'project_name', array('class'=>'col-sm-2 control-label')) !!}
        <div class="col-sm-10">
            {!! Form::text('project_name', old('project_name',$project->project_name), array('class'=>'form-control')) !!}

        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
          {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
          {!! link_to_route(config('quickadmin.route').'.project.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
        </div>
    </div>

{!! Form::close() !!}

@endsection