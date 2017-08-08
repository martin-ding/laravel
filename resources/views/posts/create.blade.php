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
    <hr>
    <div class="row">

        <div class="col-sm-8 blog-main">

            @include("layouts.errors")
            <form method="post" action="/posts">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title"/>
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" placeholder="Text"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div><!-- /.blog-main -->

        @include("posts.sidebar")

    </div><!-- /.row -->

</div><!-- /.container -->
@endsection
