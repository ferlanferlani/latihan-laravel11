<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto max-w-7xl px-6 lg:px-8 justify-center flex">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-1">
            <!-- post card-->
            <article class="flex flex-col items-start justify-between bg-white shadow-lg rounded-lg p-6">
                <div class="post-image w-full">
                    <img class="w-full h-auto object-cover rounded-md" src="{{ $post['image'] }}"
                        alt="{{ $post['title'] }}">
                </div>
                <div class="flex items-center mt-3 gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">{{ $post['date'] }}</time>
                    <a href="#"
                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ $post['category'] }}</a>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                    <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="" class="size-10 rounded-full bg-gray-50">
                    <div class="text-sm/6">
                        <p class="font-semibold text-gray-900">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                {{ $post['author'] }}
                            </a>
                        </p>
                        <p class="text-gray-600">Admin</p>
                    </div>
                </div>
                <div class="group relative">
                    {{-- <h3 class="mt-3 text-lg font-semibold text-gray-900">
                        <span class="absolute inset-0"></span>
                        {{ $post['title'] }}
                    </h3> --}}
                    <p class="mt-5 line-clamp-3 text-justify text-sm/6 text-gray-600">
                        {{ $post['body'] }}
                    </p>
                </div>
            </article>
            {{-- end post card --}}
        </div>
    </div>

</x-layout>
