<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Fixed Sidebar and Scrollable Content</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #1a202c;
            color: #f7fafc;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #a0aec0;
        }

        ::-webkit-scrollbar-track {
            background-color: #2d3748;
        }


        /* Style untuk scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            /* Lebar scrollbar */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #888;
            /* Warna thumb */
            border-radius: 10px;
            /* Rounding pada thumb */
        }

        ::-webkit-scrollbar-track {
            background-color: #2d3748;
            /* Warna track */
            border-radius: 10px;
            /* Rounding pada track */
        }
    </style>
</head>

<body>
    <div class="flex flex-row h-screen">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white pt-6 w-1/4 pl-6 flex flex-col">
            {{-- <div class="flex items-center mb-8 pr-6">
                <img alt="Profile Picture" class="w-10 h-10 rounded-full mr-4" src="https://i.imgur.com/4tBRj24.jpg">
                <div>
                    <h2 class="text-xl font-bold">ChatGPT</h2>
                    <p class="text-gray-400">Online</p>
                </div>
            </div> --}}
            <div class="relative pr-6">
                <input
                    class="bg-gray-700 rounded-lg w-full py-2 px-3 text-gray-400 placeholder-gray-400 focus:outline-none focus:shadow-outline focus:border-blue-300"
                    placeholder="Search" type="text">
            </div>
            <h3 class="text-lg font-bold mt-8 mb-4">Documents</h3>
            <ul class="text-gray-400 overflow-y-auto mb-3">
                <li class="flex items-center mb-2">
                    <a class="flex items-center w-full p-2 rounded-md hover:bg-gray-700" href="#">
                        <img alt="user avatar" class="w-6 h-6 rounded-full mr-2" src="https://via.placeholder.com/32">
                        <span>Document 1</span>
                    </a>
                </li>
            </ul>
            <div class="mt-auto">
                <hr>
                <ul class="text-gray-400">
                    <li class="flex items-center mb-2">
                        <a class="flex items-center w-full p-2 rounded-md hover:bg-gray-700" href="#">
                            <svg class="h-5 w-5 fill-current mr-2" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 19H3a2 2 0 01-2-2V3a2 2 0 012-2h14a2 2 0 012 2v8.071a1 1 0 01-.293.707l-6.414 6.414A1 1 0 0111 19zM11 9a2 2 0 114 0 2 2 0 01-4 0z" />
                            </svg>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="flex items-center mb-2">
                        <a class="flex items-center w-full p-2 rounded-md hover:bg-gray-700" href="#">
                            <svg class="h-5 w-5 fill-current mr-2" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414 0L10 12.586l-2.293-2.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 000-1.414z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Content -->
        <div class="w-3/4 p-6 overflow-y-auto">
            <h1 class="text-4xl font-bold mb-4">Article Title</h1>


        </div>
    </div>
</body>

</html>
