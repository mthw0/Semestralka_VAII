@section('title', 'Home')
@extends('layouts.app')


@section('content')

    @foreach ($posts as $post)
        @include('partials.summary')
    @endforeach

    <div id="tlacidla">
        <a href="{{ route('posts.index') }}" class="btn btn-primary">
            Všetky príspevky
        </a>
        <a href="{{ route('posts.create') }}" class="btn btn-success">
            <strong>Nový príspevok</strong>
        </a>
    </div>

@endsection
