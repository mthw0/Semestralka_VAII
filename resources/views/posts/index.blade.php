@section('title', 'Home')
@extends('layouts.app')


@section('content')

    <div class="tlacidla">
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            <strong>Nový príspevok</strong>
        </a>
    </div>

    @foreach ($posts as $post)
        @include('partials.summary')
    @endforeach

    <div class="tlacidla">
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            <strong>Nový príspevok</strong>
        </a>
    </div>

@endsection
