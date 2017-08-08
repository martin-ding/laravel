@extends('layouts.app')

{{--@section("nav")--}}
    {{--@include("partial.nav")--}}
{{--@endsection--}}

@section('content')
    @extends("layouts.header")
@section('url')
    url('{{ asset('vendor/img/home-bg.jpg') }}')
@endsection

    <div class="container">
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="row col-md-6">
                @include("layouts.errors")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" required/>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email"/>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password"/>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation"/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>
@endsection