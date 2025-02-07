<x-layout meta-title="{{ __('Blog') }}" meta-description="{{ __('Blog page') }}">
    <h1>{{ __('Blog') }}</h1>
    <a href="{{ route('posts.create') }}">{{ __('Create new post') }}</a> 
    @foreach ($posts as $post)
        <article style="display: flex; align-items: baseline;">
            <h2>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a> 
            </h2>&nbsp;
            <a href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
        </article>
    @endforeach
</x-layout>