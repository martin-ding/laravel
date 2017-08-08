@extends("layouts.app")

@section("other_css")
    <link href="{{ asset("vendor/posts/blog.css") }}" rel="stylesheet" type="text/css">
@endsection

@section("nav")
    @include("partial.nav")
@endsection

@section('content')

    @extends("layouts.header")
@section('url')
    url('{{ asset('vendor/img/contact-bg.jpg') }}')
@endsection

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">

            @if(count($posts))
                @foreach($posts as $post)
                    @include("posts.single")
                @endforeach
            @endif

            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div><!-- /.blog-main -->

        @include("posts.sidebar")


</div><!-- /.container -->
@endsection
