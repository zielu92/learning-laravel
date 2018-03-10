@extends('layouts.app')


@section('content')


<h1><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h1>

<a href=""></a>

@endsection
@section('footer')