@extends('layouts.app')


@section('content')

<h1>Create Post</h1>


php

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
