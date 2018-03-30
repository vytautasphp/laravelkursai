@extends('layouts.admin')



@section('content')

<h1>Edit User</h1>
   {{--  <form method="POST" action="/posts">  --}}
    <div class="row">
    
        <div class="col-sm-3">
            
                <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" class="img-responsive img-rounded">

        </div>
    

        <div class="col-sm-9">

            {!! Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}
        
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email: ') !!}
                {!! Form::text('email', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'File: ') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password: ') !!}
                {!! Form::hidden('password', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group ">
                {!! Form::label('role_id', 'Role: ') !!}
                {!! Form::select('role_id', $roles, null) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status: ') !!}
            <div class="form-control"> {!! Form::select('is_active', array (1 => 'Active', 0=> 'Not Active'), null) !!}</div>
            </div>

            <div class="form-group">
                {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
            </div>

        </div>

    </div>


    <div class="row">

        @include('includes.form_error')

    </div>

@stop