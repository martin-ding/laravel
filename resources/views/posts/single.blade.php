<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }} </a></h2>
    @if(count($post->tags))
        <ul>
            @foreach($post->tags as $tag)
                <li><a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a></li>
            @endforeach
        </ul>
    @endif
    <p class="blog-post-meta"> {{$post->user->name }} {{ $post->created_at }} </p>
    <p>{{ $post->body }}</p>
</div><!-- /.blog-post -->