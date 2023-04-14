<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="{{ $post->meta_descriptions ?? null }}" name="description">
    <meta content="{{ $post->meta_keyword ?? null }}" name="keywords">
    <meta content="ego oktafanda" name="author">
    <meta content="index, follow" name="robots">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content=" days" name="revisit-after">
    {!! $post->meta ?? null !!}
    <link href="{{ url('') }}" rel="canonical">
    <title>{{ $post->title ?? null }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('public/css/blog.singgle.css') }}" rel="stylesheet">

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/default.min.css" rel="stylesheet"> --}}
    <link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>
        hljs.highlightAll();
    </script>
    <style>
        pre {
            /* background-color: #f4f4f4; */
            border-radius: 3px;
            font-size: 14px;
            line-height: 1.4;
            padding: 10px;
            /* overflow-x: auto; */
            font-size: 0.8rem !important;
            margin-top: 10px !important;
            margin-bottom: 10px !important;
        }

        pre code {
            overflow-x: auto !important;
            width: 100%;
            border: 1px solid gray;
            --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        code {
            display: inline-block !important;
            font-family: Consolas, Menlo, Monaco, monospace !important;
            font-size: .9rem !important;
            line-height: 1.5;
            color: #333;
            background-color: gray;
            border-radius: 3px;
            color: #fff;
        }

        /* Tema Umum */
        .hljs {
            display: block;
            overflow-x: auto;
            padding: 0.5em;
            background: #282c34;
            /* background: #f7f7f7; */
            /* color: #333; */
            color: #abb2bf;
        }

        /* Tema Dark Mode */
        .hljs-dark {
            background: #282c34;
            color: #abb2bf;
        }

        /* Kode warna */
        .hljs-comment,
        .hljs-quote {
            color: #998;
            font-style: italic;
        }

        .hljs-doctag,
        .hljs-keyword,
        .hljs-formula {
            color: #c00;
        }

        .hljs-section,
        .hljs-name,
        .hljs-selector-tag,
        .hljs-deletion,
        .hljs-subst {
            color: #900;
            font-weight: bold;
        }

        .hljs-literal {
            color: #000080;
        }

        .hljs-string,
        .hljs-regexp,
        .hljs-addition,
        .hljs-attribute,
        .hljs-meta-string {
            color: #080;
        }

        .hljs-built_in,
        .hljs-class .hljs-title {
            color: #0086b3;
            font-weight: bold;
        }

        .hljs-attr,
        .hljs-variable,
        .hljs-template-variable,
        .hljs-type,
        .hljs-selector-class,
        .hljs-selector-attr,
        .hljs-selector-pseudo,
        .hljs-number {
            color: #6897BB;
        }

        .hljs-symbol,
        .hljs-bullet,
        .hljs-link,
        .hljs-meta,
        .hljs-selector-id,
        .hljs-title {
            color: #bc7a00;
            font-weight: bold;
        }

        .hljs-emphasis {
            font-style: italic;
        }

        .hljs-strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <nav class="border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ url('') }}">
                            <img alt="Logo" class=" h-10 w-10" src="{{ asset('public/img/logo/logo.png') }}">
                        </a>
                        <strong class="sm:hidden">APTEN</strong>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a class="border-indigo-500 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                            href="{{ url('blog') }}">
                            Blog
                        </a>

                        <a class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium"
                            href="{{ url('egooktafanda') }}">
                            Me
                        </a>
                    </div>
                </div>

                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    {{-- <button
                        class="bg-gray-100 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-gray-500">
                        <span class="sr-only">Search</span>
                        <svg aria-hidden="true" class="h-6 w-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 21l-4.5-4.5M14 10h7M19 15l2.5 2.5M3 3h6" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </button> --}}

                    <div class="toggle-wrapper">
                        <label class="toggle">
                            <input id="dark-mode-toggle" type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <img alt="Foto Penulis" class="w-10 h-10 rounded-full mr-4"
                        src="https://miro.medium.com/v2/resize:fill:72:72/1*YhHjHHQnvLRlIqRhEhsnFw.jpeg">

                    {{-- <button
                        class="ml-4 bg-gray-100 p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-gray-500">
                        <span class="sr-only">Account</span>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 10l7-7m0 0l7 7m-7-7v18" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                        </svg>
                    </button> --}}
                </div>
            </div>
            <!-- Mobile menu button -->
            <div class="flex sm:hidden">
                <button class="mobile-menu-button">
                    <span class="sr-only">
                        {{-- Open main menu --}}
                    </span>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="mobile-menu hidden sm:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 bg-gray-100"
                    href="{{ url('blog') }}">Blog</a>
                <a class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:text-gray-500 hover:bg-gray-50"
                    href="{{ url('') }}">Me</a>
            </div>
        </div>
    </nav>
    @yield('content')
    <hr>
    <footer class="bg-gray-800 text-white py-4 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto flex justify-between items-center">
            <div>
                <span class="font-bold">kaptencode.com</span> &copy; 2023
            </div>
            <div>
                <a class="mr-4" href="#">#</a>
                <a href="#">Kontak</a>
            </div>
        </div>
    </footer>
    <script>
        // Get the checkbox
        const darkModeToggle = document.querySelector("#dark-mode-toggle");

        // Function to set the theme
        function setTheme(theme) {
            // Get the body element
            const body = document.querySelector("body");

            // Toggle the "dark-mode" class
            body.classList.toggle("dark-mode", theme === "dark");
        }

        // Listen for changes to the checkbox
        darkModeToggle.addEventListener("change", (event) => {
            if (event.target.checked) {
                setTheme("dark");
            } else {
                setTheme("light");
            }
        });

        // Check the checkbox based on the user's preferred theme
        if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) {
            darkModeToggle.checked = true;
            setTheme("dark");
        }

        // Toggle mobile menu visibility
        const menuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        document.querySelectorAll("pre br").forEach(function(br) {
            br.remove();
        });
    </script>
</body>

</html>
