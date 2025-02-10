{{-- <x-layout meta-title="{{ __('Blog') }}" meta-description="{{ __('Blog page') }}">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="my-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">
            {{ __('Blog') }}
        </h1>
    </div>
    <a href="{{ route('posts.create') }}">{{ __('Create new post') }}</a> 
    <div class="flex items-center justify-center">
        <a href="{{ route('posts.create') }}"
           class="group rounded-full bg-sky-600 p-2 text-sky-100 shadow-lg duration-300 hover:bg-sky-700 active:bg-sky-800">
            <svg class="h-6 w-6 duration-300 group-hover:rotate-12" data-slot="icon" fill="none" stroke-width="1.5"
                 stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
            </svg>
        </a>
    </div>
    @foreach ($posts as $post)
        <article style="display: flex; align-items: baseline;">
            <h2>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a> 
            </h2>&nbsp;
            <a href="{{ route('posts.edit', $post) }}">{{ __('Edit') }}</a>
            &nbsp;
            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                @csrf @method('DELETE')
                <button type="submit">{{ __('Delete') }}</button>
            </form> 
        </article>
    @endforeach
</x-layout> --}}

<x-blog-layout meta-title="{{ __('Blog') }}" meta-description="{{ __('Blog page') }}">
    <div class="mx-auto mt-4 max-w-6xl">
        <h1 class="my-4 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl">{{ __('Blog') }}</h1>
        @auth
        <div class="flex items-center justify-center">
            <a href="{{ route('posts.create') }}"
               class="group rounded-full bg-sky-600 p-2 text-sky-100 shadow-lg duration-300 hover:bg-sky-700 active:bg-sky-800">
                <svg class="h-6 w-6 duration-300 group-hover:rotate-12" data-slot="icon" fill="none" stroke-width="1.5"
                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                </svg>
            </a>
        </div>
        @endauth
        <div class="mx-auto mt-8 grid max-w-6xl gap-4 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article class="flex flex-col overflow-hidden rounded bg-white shadow dark:bg-slate-900">
                    {{-- <div class="h-52"> --}}
                    {{--     <a class="duration-300 hover:opacity-75" href="/article.html"> --}}
                    {{--         <img class="h-full w-full object-cover object-center" src="/img/article-1.jpg" alt="Boost your conversion rate" /> --}}
                    {{--     </a> --}}
                    {{-- </div> --}}
                    <div class="flex-1 space-y-3 p-5">
                        {{-- <h3 class="text-sm font-semibold text-sky-500">Desk and Office</h3> --}}
                        <h2 class="text-xl font-semibold leading-tight text-slate-800 dark:text-slate-200">
                            <a class="hover:underline" href="{{ route('posts.show', $post) }}">
                                {{ $post->title }}
                            </a>
                        </h2>
                        <p class="hidden text-slate-500 md:block dark:text-slate-400">
                            {{ $post->body }}
                        </p>
                    </div>
                    {{-- <div class="flex space-x-2 p-5"> --}}
                    {{--     <img class="h-10 w-10 rounded-full" src="https://ui-avatars.com/api?name=Roel Aufderehar" alt="Roel Aufderehar" /> --}}
                    {{--     <div class="flex flex-col justify-center"> --}}
                    {{--         <span class="text-sm font-semibold leading-4 text-slate-600 dark:text-slate-400"> Roel Aufderehar </span> --}}
                    {{--         <span class="text-sm text-slate-500"> Mar 16, 2023 </span> --}}
                    {{--     </div> --}}
                    {{-- </div> --}}
                </article>
            @endforeach
        </div>
    </div>
</x-blog-layout>