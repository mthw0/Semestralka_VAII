@section('title', 'New Post')
@extends('layouts.app')

@section('content')

    <h1 class="title">Vytvoriť nový príspevok</h1>

    <form class="pridat" method="post" action="{{ route('posts.store') }}">

        @csrf
        @include('partials.errors')

        <div class="form-group">
            <label class="label">Názov</label>
            <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Názov" minlength="5" maxlength="100" required/>
        </div>

        <div class="form-group">
            <label class="label">Obsah</label>
            <textarea name="content" class="form-control" placeholder="Obsah" minlength="5" maxlength="2000" required rows="10">{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label class="label">Kategória:</label>
            <select class="form-select" name="category" required>
                <option value="" disabled selected>Vybrať kategóriu</option>
                <option value="Linux" {{ old('category') === 'Linux' ? 'selected' : null }}>Linux</option>
                <option value="Windows" {{ old('category') === 'Windows' ? 'selected' : null }}>Windows</option>
                <option value="Mac" {{ old('category') === 'Mac' ? 'selected' : null }}>Mac</option>
                <option value="Ostatné" {{ old('category') === 'Ostatné' ? 'selected' : null }}>Ostatné</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Publikovať</button>
        </div>

    </form>

@endsection
