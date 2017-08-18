<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>
    {{--Tags--}}

    <div class="sidebar-module">
        <h4>Tags</h4>
        @if(count($tags))
        <ol class="list-unstyled">
            @foreach($tags as $tag)
                <li><a href="/posts/tags/{{ $tag }}">{{ $tag }}</a></li>
            @endforeach
        </ol>
        @endif
    </div>

    {{--Archives--}}
    <div class="sidebar-module">
        <h4>Archives</h4>
        @if(count($archives))
        <ol class="list-unstyled">
            @foreach($archives as $archive)
                <li><a href="/posts/?month={{$archive->month}}&year={{$archive->year}}">{{$archive->month }}月 {{$archive->year}}</a></li>
            @endforeach
        </ol>
        @endif
    </div>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->