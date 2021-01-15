@section('title', 'Edit Post')
@section('action', route('posts.create'))
@extends('layouts.app')


@section('content')

    <h1 class="title">Upraviť: {{ $post->title }}</h1>

    <form method="post" class="pridat" action="{{ route('posts.update', [$post->slug]) }}">

        @csrf
        @method('patch')
        @include('partials.errors')

        <div class="form-group">
            <label class="label">Názov</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Názov" minlength="5" maxlength="100" required/>
        </div>

        <div class="form-group">
            <label class="label">Obsah</label>
            <textarea name="content" class="form-control" placeholder="Obsah" minlength="5" maxlength="2000" required rows="10">{{ $post->content }}</textarea>
        </div>

        <div class="form-group">
            <label class="label">Kategória:</label>
            <select class="form-select" name="category" required>
                <option value="" disabled selected>Vybrať kategóriu</option>
                <option value="Linux" {{ $post->category === 'Linux' ? 'selected' : null }}>Linux</option>
                <option value="Windows" {{ $post->category === 'Windows' ? 'selected' : null }}>Windows</option>
                <option value="Mac" {{ $post->category === 'Mac' ? 'selected' : null }}>Mac</option>
                <option value="Ostatné" {{ $post->category === 'Ostatné' ? 'selected' : null }}>Ostatné</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Aktualizovať</button>
        </div>
    </form>

@endsection
