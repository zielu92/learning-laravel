@extends('layouts.app')


@section('content')

    <h1>Edit Post</h1>

    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostController@update', $post->id]]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=>'form-controll']) !!}

    </div>

    {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}



    {!! Form::open(['method'=>'DELETE', 'action'=>['PostController@update', $post->id]]) !!}

    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}

    {!! Form::close() !!}


@endsection
@section('footer')