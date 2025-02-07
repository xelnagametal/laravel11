<div>
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
</div>