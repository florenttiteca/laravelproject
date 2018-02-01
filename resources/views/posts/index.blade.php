<h1>Tous les posts</h1>


	@foreach($posts as $post)
		<h2><a href="{{ URL::route("post.show", $post->slug) }}">{{ $post->name }}</a></h2>
		<p>{{ $post->content }}</p>
	@endforeach
