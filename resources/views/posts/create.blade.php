{{-- <x-layout meta-title="{{ __('Create new post') }}" meta-description="{{ __('Form create new post') }}">
    <h1>{{ __('Create new post') }}</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts.form')
        <button type="submit">{{ __('Create') }}</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">{{ __('Go back') }}</a>
</x-layout> --}}

<x-app-layout
    meta-title="{{ __('Create new post') }}"
    meta-description="{{ __('Form create new post') }}"
>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create new post') }}
        </h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('posts.store') }}"
                        method="POST"
                        class="space-y-4 max-w-xl"
                    >
                        @include('posts.form')
                        <x-primary-button type="submit">{{ __('Save') }}</x-primary-button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>