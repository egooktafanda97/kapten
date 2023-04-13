@extends('blog.app')
@section('content')
    <div class="container mx-auto px-4 lg:px-8 mt-10">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-8" id="article">
            <div class="lg:col-span-4">
                <div class="lg:flex justify-between items-center">
                    <div class="flex items-center pb-2">
                        <img alt="Foto Penulis" class="w-10 h-10 rounded-full mr-4"
                            src="https://miro.medium.com/v2/resize:fill:72:72/1*YhHjHHQnvLRlIqRhEhsnFw.jpeg">
                        <div>
                            <p class="text-gray-500 text-sm">ego oktafanda s.kom, m.kom</p>
                            <p class="text-gray-600 text-sm">
                                {{ \Carbon\Carbon::make($post->published_at)->format('d M Y') }}
                            </p>
                        </div>
                        <div class="flex items-center">
                            {{-- kolom share --}}
                        </div>
                    </div>

                </div>
                <hr style="border-color:#1F2937">
                <div class="mt-10 mb-10">
                    <h1 class="text-3xl font-bold pb-2 ">
                        {{ $post->title }}
                    </h1>
                    <div id="category">
                        @foreach ($post->categories as $category)
                            <a class="inline-block px-3 py-1 mr-2 mt-2 text-sm font-medium leading-5 text-gray-700 bg-gray-200 rounded-full hover:bg-gray-300 focus:outline-none focus:bg-gray-300"
                                href="#">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div>

                </div>
                <div style="padding-left:20px">
                    <div class="container mx-auto max-w-screen-xl">
                        <article class="no-tailwindcss-base">
                            {!! $post->content !!}
                        </article>
                    </div>
                </div>
                {{-- <div class="flex items-center pb-2 mt-10">
                    <div>
                        like
                    </div>
                </div> --}}
                <div class="flex items-center pb-2 mt-5 mb-5" id="tagar">
                    <div class="flex flex-wrap mb-4">
                        <div class="flex items-center">
                            <div class="flex flex-wrap">
                                @foreach ($post->tags as $tag)
                                    <a class="inline-block px-3 py-1 mr-2 mt-2 text-sm font-medium leading-5 text-gray-700 bg-gray-200 rounded-full hover:bg-gray-300 focus:outline-none focus:bg-gray-300"
                                        href="#">
                                        #{{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
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
