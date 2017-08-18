@extends("layouts.app")

{{--@section("other_css")--}}
    {{--<link href="{{ asset("vendor/posts/blog.css") }}" rel="stylesheet" type="text/css">--}}
{{--@endsection--}}

@section("nav")
    @include("partial.nav")
@endsection

@section('content')

    @extends("layouts.header")
@section('url')
    url('{{ asset('vendor/img/contact-bg.jpg') }}')
@endsection

<div class="container">

    <div class="row">
        <div class="col-sm-12">
            @if(count($threads))
                @foreach($threads as $thread)
                    @include("threads.single")
                @endforeach
            @endif

            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div>

    </div><!-- /.container -->
@endsection
