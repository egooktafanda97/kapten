@extends('blog.app')
@section('content')
    <div class="container mx-auto px-4 lg:px-8 mt-10 mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-8">
            <div class="lg:col-span-4">
                {{--  --}}
                <div class="flex mb-5">
                    @foreach ($category as $item)
                        <a class="inline-block cursor-pointer px-3 py-1 mr-2 mt-2 text-sm font-medium leading-5 text-gray-700 bg-gray-200 rounded-full hover:bg-gray-300 focus:outline-none focus:bg-gray-300"
                            style="font-size: .8em">
                            {{ $item->name }}
                        </a>
                    @endforeach
                </div>
                <div class="flex flex-col gap-4">
                    @foreach ($post as $article)
                        <a href="{{ url('blog/' . $article->slug) }}">
                            <div class=" p-4">
                                <h4 class="text-xl font-medium">{{ $article->title }}</h4>
                                <p class="text-sm text-gray-500">
                                    @foreach ($article->categories as $categories)
                                        <strong>{{ $categories->name }}</strong>
                                    @endforeach
                                </p>
                                <div class="mt-2 mb-3 text-gray-500">{!! substr($article->content, 0, 120) !!}...</div>
                                <p class="text-sm text-gray-500">
                                    <small>{{ \Carbon\Carbon::make($article->published_at)->format('d M Y') }}</small>
                                    @foreach ($article->tags as $tag)
                                        <small><strong>#{{ $tag->name }}</strong></small>
                                    @endforeach
                                </p>
                            </div>
                        </a>
                    @endforeach

                    <div class="mt-4 flex justify-center">
                        <nav class="block">
                            <ul class="flex pl-0 rounded list-none flex-wrap">
                                @if ($post->currentPage() > 1)
                                    <li
                                        class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 border-r-0 ml-0 rounded-l hover:bg-gray-200">
                                        <a href="{{ $post->url($post->currentPage() - 1) }}" rel="prev">
                                            << </a>
                                    </li>
                                @endif

                                @if ($post->lastPage() > 20 && $post->currentPage() > 10)
                                    <li
                                        class="relative block py-2 px-3 leading-tight bg-white border border-gray-300  border-r-0 ml-0">
                                        <a href="{{ $post->url(1) }}">1</a>
                                    </li>
                                    <li
                                        class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 border-r-0 ml-0">
                                        <span class="px-2">...</span>
                                    </li>
                                @endif

                                @php
                                    $start = $post->currentPage() - 5 > 0 ? $post->currentPage() - 5 : 1;
                                    $end = $start + 9 < $post->lastPage() ? $start + 9 : $post->lastPage();
                                @endphp

                                @for ($i = $start; $i <= $end; $i++)
                                    <li
                                        class="relative block py-2 px-3 leading-tight border border-gray-300  border-r-0 ml-0 @if ($post->currentPage() == $i) font-bold @endif">
                                        <a href="{{ $post->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                @if ($post->lastPage() > 20 && $post->currentPage() < $post->lastPage() - 9)
                                    <li
                                        class="relative block py-2 px-3 leading-tight border border-gray-300 border-r-0 ml-0">
                                        <span class="px-2">...</span>
                                    </li>
                                    <li
                                        class="relative block py-2 px-3 leading-tight border border-gray-300 rounded-r hover:bg-gray-200">
                                        <a href="{{ $post->url($post->lastPage()) }}">{{ $post->lastPage() }}</a>
                                    </li>
                                @endif

                                @if ($post->currentPage() < $post->lastPage())
                                    <li
                                        class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 rounded-r hover:bg-gray-200">
                                        <a href="{{ $post->url($post->currentPage() + 1) }}" rel="next"> >> </a>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                {{--  --}}
            </div>

            <div class="lg:col-span-2">
                <!-- Profil Penulis -->
                {{-- shadow-md  --}}
                <div class="cards rounded-md p-6">
                    <!-- Foto Profil -->
                    <div class="flex items-center justify-center">
                        <img alt="Foto Profil" class="rounded-full w-24 h-24"
                            src="https://miro.medium.com/v2/resize:fill:72:72/1*YhHjHHQnvLRlIqRhEhsnFw.jpeg">
                    </div>

                    <!-- Informasi Profil -->
                    <div class="mt-6 text-center">
                        <h3 class="text-xl font-medium text-gray-500">Ego Oktafanda</h3>
                        <p class="mt-2 text-gray-500">Software Enginering</p>
                    </div>

                    <!-- Kontak Profil -->
                    <div class="flex justify-center mt-6" style="flex-direction: column; align-items: center">
                        <div>
                            egooktafanda1097@gmail.com
                        </div>
                        <div>
                            +62 822-8473-3404
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
