@extends('layouts.app')


@section('content')

<h1>Create Post</h1>

{!! Form::open(['method'=>'POST', 'action'=>'PostController@store', 'files'=>true]) !!}


<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['class'=>'form-controll']) !!}
</div>

<div class="form-group">
    {!! Form::file('file', ['class'=>'form-controll']) !!}
</div>


{!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@if(count($errors) > 0)

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach

        </ul>

    </div>

@endif

@endsection
