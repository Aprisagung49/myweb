<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:pt-32 lg:px-6">
        <div class="mx-auto max-w-screen-md sm:text-center">
            <h1 class="py-16 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">
                {{ $title }}
                <p class="mt-2 text-lg/8 text-gray-600">Learn Now!.</p>
            </h1>
            <form>
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="items-center mx-auto mb-3 space-y-4 max-w-screen-sm sm:flex sm:space-y-0">
                    <div class="relative w-full">
                        <label for="search"
                            class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input
                            class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukan Pencarian Article " type="search" id="search" name="search"
                            required="">
                    </div>
                    <div>
                        <button type="submit"
                            class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-lg border cursor-pointer bg-blue-700 border-primary-600 sm:rounded-none sm:rounded-r-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300  dark:hover:bg-primary-700 dark:focus:ring-primary-800">Cari</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="bg-white pt-16 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
            </div>
            {{ $articles->links() }}
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @forelse ($articles as $article)
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16"
                                class="text-gray-500">{{ $article->created_at->diffForHumans() }}</time>
                            <a href="/articles?category={{ $article->category->slug }}"
                                class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $article->category->name }}</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                                <a href="/articles/{{ $article['slug'] }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $article['title'] }}
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">{{ Str::limit($article['body'], 30) }}
                            </p>
                        </div>
                        <a href="/articles/{{ $article['slug'] }}"
                            class="font-medium text-blue-500 hover:underline">&raquo;
                            Baca Selengkapnya</a>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" class="size-10 rounded-full bg-gray-50">
                            <div class="text-sm/6">
                                <p class="font-semibold text-gray-900 hover:underline">
                                    <a href="/articles?author={{ $article->author->username }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $article->author->name }}
                                    </a>
                                </p>
                                <p class="text-gray-600"></p>
                            </div>
                        </div>
                    </article>
                @empty
                    <div>
                        <p class="font-semibold text-xl my-4">Article Not Found</p>
                        <a href="/articles" class="block text-blue-700 hover:underline">&laquo; Return To Menu</a>
                    </div>
                @endforelse
                <!-- More posts... -->
            </div>
        </div>
    </div>
</x-layout>
