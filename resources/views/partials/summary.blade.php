<div class="content card" id="oramovanie">
    <a href="{{ route('posts.show', [$post->slug]) }}">
        <h1 id="nadpis">{{ $post->title }}</h1>
    </a>
    <p><b>Vytvorené:</b> {{ $post->created_at->diffForHumans() }}</p>
    <p><b>Kategória:</b> {{ $post->category }}</p>
    <p>{!! nl2br(e($post->content)) !!}</p>

    @auth
    <form method="post" action="{{ route('posts.destroy', [$post->slug]) }}">
        @csrf @method('delete')
                <a href="{{ route('posts.edit', [$post->slug])}}" class="btn btn-sm btn-primary">✎ Upraviť</a>
                <button type="submit" class="btn btn-sm btn-danger">🗑 Vymazať</button>

    </form>
    @endauth

</div>
