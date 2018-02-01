@extends('layout');

@section('content')
<h1>Mon post {{ $post->name }}</h1>
{{ Form::model($post, ['url' => URL::route('post.update', $post->id), 'method' => 'PUT']) }}
{{ csrf_field() }}
<div class="form-group">
	{{ Form::label('name', 'Titre', ['class' => 'form-label']) }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'Lien', ['class' => 'form-label']) }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('content', 'Content', ['class' => 'form-label']) }}
	{{ Form::text('content', null, ['class' => 'form-control']) }}
</div>

{{ Form::submit() }}

{{ Form::close() }}
@endsection