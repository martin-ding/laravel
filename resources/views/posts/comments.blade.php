<div class="comments">
    @if(count($post->comments))
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">{{ $comment->body }} <strong>{{ $comment->created_at->diffForHumans() }} </strong></li>
            @endforeach
        </ul>
    @endif
</div>
