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
                        <li class ="my-10"><a href="" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-plus-circle"></i> ADD USER</a></li>
                        <li class ="my-10"><a href="" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-pen-square"></i> EDIT USER</a></li>
                        <li class ="my-10"><a href="{{ route('createCategory') }}" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-plus-circle"></i> CREATE CATEGORY</a></li>
                        <li class ="my-10"><a href="{{ route('createPost') }}" class = "hover:bg-slate-400 py-4 px-2 rounded"><i class="fas fa-plus-circle"></i> CREATE POST</a></li>

                    </ul>
                </div>


                <div class="flex-1 w-full mx-auto">
                    <div class="text-2xl uppercase font-bold w-auto mt-5 text-center">
                        ALL POST
                    </div>

                    <div class="overflow-hidden">

                        <table class="border border-collapse shadow table-auto border-slate-400 w-11/12 mx-auto">
                            <thead>
                                <tr>
                                    <th class ="border border-slate-300">Title</th>
                                    <th class ="border border-slate-300">Category</th>
                                    <th class ="border border-slate-300">Author</th>
                                    <th class ="border border-slate-300">Content</th>
                                    <th class ="border border-slate-300">Image</th>
                                    <th class ="border border-slate-300">isPublished</th>
                                    <th class ="border border-slate-300">created_at</th>
                                    <th class ="border border-slate-300">Edit</th>
                                    <th class ="border border-slate-300">Delete</th>
                                </tr>
                            </thead>
                            <tbody class ="table-auto text-center divide-y divide-gray-200 dark:divide-gray-700">

                                @foreach ($Posts as $post )

                                <tr class = "">
                                    <td class ="border border-slate-300">{{ $post->Title }}</td>
                                    <td class ="border border-slate-300">{{ $post->category->categoryName }}</td>
                                    <td class ="border border-slate-300">{{ $post->Author }}</td>
                                    <td class ="border border-slate-300 w-1/2">{{ $post->Content }}</td>
                                    <td class ="border border-slate-300"><img src="{{ asset('storage/'.$post->ImagePath ) }}" alt="" class ="h-auto w-24 rounded-lg mx-auto"></td>
                                    <td class ="border border-slate-300">{{ $post->isPublished === 0 ? 'True': 'False' }}</td>
                                    <td class ="border border-slate-300">{{ $post->created_at->todatestring() }}</td>
                                    <td class ="border border-slate-300"><a href="/edit/{{ $post->id }}" class ="hover:bg-blue-500 text-lg rounded p-2">EDIT</a></td>
                                    <td class ="border border-slate-300"><a href="{{ route('deletePost',$post->id) }}" class ="hover:bg-blue-500 text-lg rounded p-2">DELETE</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>




            </div>

        </div>
    </div>



</x-app-layout>
