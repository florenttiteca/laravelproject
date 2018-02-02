@extends('layouts.app')

@section('content')
<p><a href=" {{ URL::route("post.index") }}">Ma liste</a></p>
<h1>Mon post {{ $post->name }}</h1>
<p>{{ $post->content }}</p>
<p><a class="btn btn-lg btn-block btn-outline-primary" href=" {{ URL::route("post.edit", $post->id) }}">Edit</a></p>
@endsection