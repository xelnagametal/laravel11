<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?? __('Default title') }}</title>
    <meta name="description" content="{{ $metaDescription ?? __('Default description') }}">
</head>
<body>
    {{-- @include('partials.navigation') --}}
    <x-partials.navigation />
    @session('message')
        <div style="background-color: green; color: white;">
            {{ $value }}
        </div>
    @endsession
    <div class="container">
        {{ $slot }}
    </div>
    @isset($sidebar)
        <div id="sidebar">
            <h3>{{ __('Sidebar') }}</h3>
            <div>{{ $sidebar }}</div>
        </div>
    @endisset
</body>
</html>