@extends('layouts.admin')



@section('content')


<h1>Edit Post</h1>

   {{--  <form method="POST" action="/posts">  --}}
        {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>'true']) !!}
    
        <div class="form-group">
            {!! Form::label('title', 'Title: ') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category: ') !!}
            {!! Form::select('categody_id', array(''=>'options'), null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo: ') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Password: ') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control', 'rows'=>3]) !!}
        </div>

        <div class="form-group ">
            {!! Form::label('role_id', 'Role: ') !!}
            {!! Form::select('role_id', [''=>'Choose Options'] + $roles, null) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'Status: ') !!}
        <div class="form-control"> {!! Form::select('is_active', array (1 => 'Active', 0=> 'Not Active'), 0) !!}</div>
        </div>

        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>

@include('includes.form_error')

    @stop