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

<div>
    <x-input-label for="title" :value="__('Title')" />
    <x-text-input id="title"
        name="title"
        type="text"
        value="{{ old('title', $post->title) }}"
        class="mt-1 block w-full"
    />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>
<div>
    <x-input-label for="body" :value="__('Body')" />
    <x-textarea id="body"
        name="body"
        class="mt-1 block w-full"
    >{{  old('body', $post->body) }}</x-textarea>
    <x-input-error :messages="$errors->get('body')" class="mt-2" />
</div>