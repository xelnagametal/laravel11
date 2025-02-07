<x-layout meta-title="{{ __('Create new post') }}" meta-description="{{ __('Form create new post') }}">
    <h1>{{ __('Create new post') }}</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts.form')
        {{-- <div>
            <label for="title">{{ __('Title') }}</label> <br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
            @error('title')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div>
        <div>
            <label for="body">{{ __('Body') }}</label> <br>
            <textarea name="body" id="body">{{old('body')}}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{ $message }}</small>
            @enderror
        </div> --}}
        <button type="submit">{{ __('Create') }}</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">{{ __('Go back') }}</a>
</x-layout>