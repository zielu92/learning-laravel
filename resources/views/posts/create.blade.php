@extends('layouts.app')


@section('content')

<h1>Create Post</h1>

    <form method="post" action="/posts">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="title" placeholder="enter title">

        <input type="submit" name="submit">

    </form>



@endsection
@section('footer')