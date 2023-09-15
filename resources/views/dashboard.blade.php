<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pb-1">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container flex w-full  mt-2">
        <div class="max-w-fit">
            <div class="flex w-fit min-h-screen">
                <div class="flex-col border text-gray-900 dark:text-gray-100 ">
                    <div class="text-xl font-bold text-black">
                        <h1>ADMIN DASHBOARD</h1>
                    </div>
                    <div class= "border">
                        <span class = ""></span>
                        <span class = ""></span>
                    </div>

                    <ul class="shadow container p-4 my-4 font-bold  uppercase">
                        <li class ="my-4"><a href=""><i class="fas fa-warehouse"></i> DASHBOARD</a></li>
                        <li class ="my-4"><a href=""><i class="fas fa-plus-circle"></i> ADD USER</a></li>
                        <li class ="my-4"><a href=""><i class="fas fa-pen-square"></i> EDIT USER</a></li>
                        <li class ="my-4"><a href=""><i class="fas fa-plus-circle"></i> CREATE CATEGORY</a></li>
                        <li class ="my-4"><a href=""><i class="fas fa-pen-square"></i> EDIT CATEGORY</a></li>
                        <li class ="my-4"><a href=""><i class="fas fa-plus-circle"></i> CREATE POST</a></li>
                        <li class ="my-4"><a href=""><i class="fas fa-pen-square"></i> EDIT POST</a></li>
                    </ul>
                </div>

                <div class="justify-center align-middle text-center">
                    sadsadsa
                </div>




            </div>

        </div>
    </div>



</x-app-layout>
