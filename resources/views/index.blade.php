<x-layout>
    <div class="w-full flex flex-row justify-between flex-wrap py-4 text-xl text-white bg-[#1b1b1b] shadow border ">
        <x-navigation />
        <div class="div">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-white font-semibold hover:text-gray-900 dark:text-gray-400
                        dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-white font-semibold hover:text-gray-900 dark:text-gray-400
                        dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-white ml-4 font-semibold hover:text-gray-900 dark:text-gray-400
                            dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>


        <div class="mx-auto flex ">
            <a href=""><i class = "fa fa-facebook-official px-4 text-white text-xl" aria-hidden="true" style = "font-size: 1.5rem"></i></a>
            <a href=""><i class = "fa fa-twitter-square px-4 text-white text-xl" aria-hidden="true" style = "font-size: 1.5rem"></i></a>
            <a href=""><i class = "fa fa-instagram px-4 text-white text-xl" aria-hidden="true" style = "font-size: 1.5rem"></i></a>

        </div>
    </div>

    <header class ="container w-full mx-auto">
        <div class="flex flex-col items-center">
            <span class = "font-bold text-gray-800 uppercase py-12 text-4xl">SIMPLE BLOG</span>
        </div>

        <nav class="w-full py-4 border-t border-b bg-gray-100">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                @foreach ($Category as $category )
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">{{ $category->categoryName }}</a>
                @endforeach
            </div>
            <form class="">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="container w-1/2 align-middle relative mx-auto">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>


        </nav>

</header>

<main class="container mx-auto flex flex-wrap py-6">
    <section class="w-full flex flex-col items-center px-3">
        @foreach ($Posts as $post )

        <article class="container flex flex-col shadow my-4">
            <a href="#" class="hover:opacity-75">
                <img src="{{ $post->ImagePath }}" style="width: 400px" height="400px">
            </a>
            <div class="bg-white flex flex-col justify-center p-6">
                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a>
                <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{ $post->Title }}</a>
                <p href="#" class="text-sm pb-4 ">
                    By <a href="#" class="font-semibold  hover:text-gray-800">{{ $post->Author }}</a>, Published on {{ $post->created_at }}
                </p>
                <span href="#" class="pb-6 ">{{ $post->Content }}</span>
                <a href="#" class="uppercase  text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
            </div>

        </article>
        @endforeach

        <div class="mt-4 p-4">
            {{ $Posts->links() }}
        </div>

    </section>
</main>
</x-layout>
