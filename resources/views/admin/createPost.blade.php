<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pb-1">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container max-w-full border mt-2 ml-2 w-screen bg-white">
        <div class="text-black">
            <div class="flex flex-wrap min-h-screen w-screen max-w-full">
                <div class="text-gray-900 dark:text-gray-100">
                    <div class="text-xl font-bold text-black">
                        <h1>ADMIN DASHBOARD</h1>
                    </div>
                    <div class= "border mb-2">
                        <span class = ""></span>
                        <span class = ""></span>
                    </div>
                    <ul class="py-4 font-bold uppercase text-black min-h-screen shadow border">
                        <li class ="my-10 mt-0"><a href="{{ route('dashboard') }}" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-warehouse"></i> DASHBOARD</a></li>
                        <li class ="my-10 mt-0"><a href="{{ route('category') }}" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-warehouse"></i> CATEGORIES</a></li>
                        <li class ="my-10"><a href="" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-plus-circle"></i> ADD USER</a></li>
                        <li class ="my-10"><a href="" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-pen-square"></i> EDIT USER</a></li>
                        <li class ="my-10"><a href="{{ route('createCategory') }}" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-plus-circle"></i> CREATE CATEGORY</a></li>
                        <li class ="my-10"><a href="{{ route('createPost') }}" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-plus-circle"></i> CREATE POST</a></li>
                    </ul>
                </div>


                <div class="flex-1 w-full mx-auto">
                    <div class="text-5xl uppercase font-bold w-auto my-7 text-center">
                        Create Post
                    </div>

                    <div class="container overflow-hidden my-5 ">
                        <div class = "mx-auto">
                            <form method="POST" action="/store" class="w-1/2 align-middle mx-auto" enctype="multipart/form-data" >
                                @csrf


                                <div class="md:flex md:items-center mb-6">
                                  <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                      TITLE
                                    </label>
                                  </div>
                                  <div class="md:w-2/3">
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white
                                    focus:border-purple-500" id="inline-full-name" type="text" value="" name ="Title">
                                  </div>
                                </div>
                                @error('Title')
                                <p class="text-red-600 text-center">{{ $message }}</p>

                                @enderror

                                <div class="md:flex md:items-center mb-6">
                                  <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                      AUTHOR
                                    </label>
                                  </div>
                                  <div class="md:w-2/3">
                                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                    id="inline-password" type="text" placeholder="" name ="Author">
                                  </div>
                                </div>
                                @error('Author')
                                <p class="text-red-600 text-center">{{ $message }}</p>

                                @enderror


                                <div class="md:flex md:items-center mb-6">
                                    <div class="md:w-1/3">
                                      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                                        Category
                                      </label>
                                    </div>
                                    <div class="md:w-2/3">
                                        <select name="category_id" id="" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full px-4
                                        text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500">
                                        @foreach ($Category as $category)
                                        <option value="{{ $category->id }}">{{ $category->categoryName  }}</option>
                                        @endforeach
                                        </select>


                                    </div>
                                  </div>
                                  @error('category_id')
                                  <p class="text-red-600 text-center">{{ $message }}</p>

                                  @enderror




                                <div class="md:flex md:items-center mb-6">
                                    <div class="md:w-1/3">
                                      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        CONTENT
                                      </label>
                                    </div>
                                    <div class="md:w-2/3">
                                      <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white
                                      focus:border-purple-500" id="inline-full-name" type="text" value="" name ="Content"></textarea>
                                    </div>
                                  </div>
                                  @error('Content')
                                  <p class="text-red-600 text-center">{{ $message }}</p>

                                  @enderror

                                  <div class="md:flex md:items-center mb-6">
                                    <div class="md:w-1/3">
                                      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        isPublished
                                      </label>
                                    </div>

                                    <div class="md:w-2/3">
                                        <label class="text-gray-500 font-bold md:text-right mb-1 md:mb-0">TRUE</label>
                                        <input class="text=white bg-gray-200 appearance-none border-2 border-gray-200 rounded px-4
                                        leading-tight focus:outline-none focus:bg-white
                                      focus:border-purple-500" type="radio" name ="isPublished" value = "0">
                                        <label class="text-gray-500 font-bold md:text-right mb-1 md:mb-0">FALSE</label>
                                        <input type="radio" name="isPublished" id="" class = "text=white bg-gray-200 appearance-none border-2 border-gray-200 rounded px-4
                                        leading-tight focus:outline-none focus:bg-white
                                        focus:border-purple-500" value ="1">
                                    </div>
                                  </div>
                                  @error('isPublished')
                                  <p class="text-red-600 text-center">{{ $message }}</p>

                                  @enderror


                                  <div class="md:flex md:items-center mb-6">
                                    <div class="md:w-1/3">
                                      <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                        Image
                                      </label>
                                    </div>
                                    <div class="md:w-2/3">
                                      <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white
                                      focus:border-purple-500" id="inline-full-name" type="file" value="" name="Image">
                                    </div>
                                  </div>
                                  @error('Image')
                                  <p class="text-red-600 text-center ">{{ $message }}</p>

                                  @enderror


                                <div class="md:flex md:items-center">
                                  <div class="md:w-1/3"></div>
                                  <div class="md:w-2/3">
                                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold px-4 rounded" type="submit">
                                      Sign Up
                                    </button>
                                  </div>
                                </div>
                              </form>
                        </div>



                    </div>

                </div>




            </div>

        </div>
    </div>




</x-app-layout>
