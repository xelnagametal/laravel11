{{-- <x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.index') }}">{{ __('Go back') }}</a>
</x-layout> --}}

<x-blog-layout :meta-title="$post->title" :meta-description="$post->body">
    <article class="mx-auto flex max-w-4xl flex-col">
        {{-- <div class="h-52 md:h-72 lg:h-96"> --}}
        {{--     <img class="h-full w-full rounded object-cover object-center"  --}}
        {{--          src="/img/article-4.jpg" --}}
        {{--          alt="Desarrollo de una API con Laravel siguiendo la especificación JSON:API" --}}
        {{--     /> --}}
        {{-- </div> --}}
        
        <div class="\-mt-8 flex items-center justify-center space-x-10">
            @auth
            <a class="rounded-full bg-sky-600 p-4 text-sky-100 shadow-lg hover:bg-sky-700 active:bg-sky-800"
               href="{{ route('posts.edit', $post) }}">
                <svg class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"></path>
                </svg>
            </a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit"
                        class="rounded-full bg-red-600 p-4 text-red-100 shadow-lg hover:bg-red-700 active:bg-red-800">
                    <svg class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                         viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                    </svg>
                </button>
            </form>
            @endauth
            <a class="rounded-full bg-gray-600 p-4 text-gray-100 shadow-lg hover:bg-gray-700 active:bg-gray-800"
               href="{{ route('posts.index') }}">
                <svg class="h-6 w-6" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3 9h13a5 5 0 0 1 0 10H7M3 9l4-4M3 9l4 4"></path>
                </svg>
            </a>
        </div>
        <div class="flex-1 space-y-3 pt-4 md:text-center">
            {{-- <h3 class="text-sm font-semibold text-sky-500 dark:text-sky-400">Laravel</h3> --}}
            <h1 class="text-2xl font-semibold leading-tight text-slate-800 md:text-4xl dark:text-slate-200">
                {{ $post->title }}
            </h1>
        </div>
        {{-- <div class="flex space-x-2 pt-4 md:mx-auto"> --}}
        {{--     <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api?name=Jorge García" alt="Jorge García" /> --}}
        {{--     <div class="flex flex-col justify-center"> --}}
        {{--         <span class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400"> Jorge García </span> --}}
        {{--         <span class="text-sm text-slate-500 dark:text-slate-400"> Mar 18, 2023 </span> --}}
        {{--     </div> --}}
        {{-- </div> --}}
        <div class="prose prose-slate dark:prose-invert lg:prose-xl mx-auto mt-6">
            {{ $post->body }}
        </div>
    </article>
</x-blog-layout>