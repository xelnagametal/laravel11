<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>{{ __('Edit form') }}</h1>
    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf @method('PATCH')
        @include('posts.form')
        {{-- <div>
            <label for="title">{{ __('Title') }}</label> <br>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label for="body">{{ __('Body') }}</label> <br>
            <textarea name="body" id="body">{{old('body', $post->body)}}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div> --}}
        <button type="submit">{{ __('Edit') }}</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">{{ __('Go back') }}</a>
</x-layout>