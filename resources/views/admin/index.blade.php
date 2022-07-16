@extends('admin.layouts.app')
@section('content')
    <!-- Admin page with dashboard to manage the website -->

    <div class=" grid grid-cols-2  justify-center justify-items-center space-y-1.5">
        <div class="bg-gray-900 text-white box-content h-64 w-64 p-4 border-4 border-green-400">
            This month revenue
            <div class="text-gray-500">
                <span class="text-2xl font-bold">200,-</span>
            </div>
            <br>
            Payed:
            <div class="text-gray-500">
                <span class="text-2xl font-bold">200,-</span>
            </div>
            Unpayed:
            <div class="text-gray-500">
                <span class="text-2xl font-bold">200,-</span>
            </div>
        </div>
        <div class="bg-gray-900 text-white box-content h-64 w-64 p-4 border-4 border-green-400">
            Just selled products
            <div class="text-gray-500 border-2 border-white">
                <span class="text-1xl font-bold">Email: </span>John@doe.nl | <span class="text-1xl font-bold">Minecraft: </span>1GB
            </div>
        </div>
        <div class="bg-gray-900 text-white box-content h-64 w-64 p-4 border-4 border-green-400">
            New users
            <div class="text-gray-500 border-2 border-white">
                <span class="text-1xl font-bold">Firstname: </span>John
                <br>
                <span class="text-1xl font-bold">Lastname:</span> Doe
                <br>
                <span class="text-1xl font-bold">Email:</span> John@Doe.nl
            </div>

        </div>
        <div class="bg-gray-900 text-white box-content h-64 w-64 p-4 border-4 border-green-400">
            05
        </div>
    </div>
@endsection
