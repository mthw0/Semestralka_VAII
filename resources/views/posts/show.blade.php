@section('title', $post->title)
@extends('layouts.app')

@section('content')

    @include('partials.summary')

    <script src="{{ URL::asset('js/koment.js') }}"></script>

    <div class="content card oramovanie">
        <h4>Komentáre</h4>
        @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
        <hr/>
        <h5>Pridať komentár</h5>
        @guest
            <div class="alert alert-primary" role="alert">
                Komentáre môžu pridávať len prihlásení používatelia!
            </div>
        @endguest
        @auth
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="body"></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Pridať komentár" />
            </div>
        </form>
        @endauth
    </div>
@endsection
