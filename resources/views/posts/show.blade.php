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

        {{--<div class="blog-header">--}}
            {{--<h1 class="blog-title">The Bootstrap Blog</h1>--}}
            {{--<p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>--}}
        {{--</div>--}}
        {{--<hr/>--}}
        <div class="row">
            <div class="col-sm-8 blog-main">
                @if(isset($post))
                    @include("posts.single")
                    @include("posts.comments")
                    <hr/>
                    @include("posts.add_comments")
                @endif
            </div><!-- /.blog-post -->
            @include("posts.sidebar")

        </div><!-- /.row -->


    </div><!-- /.container -->
@endsection
