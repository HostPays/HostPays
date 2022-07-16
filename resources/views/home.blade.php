@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Welcome message and some basic info + some fotos -->
        <div class="flex items-center justify-between content-center">
            <div class="w-full max-w-xs">
                <h1 class="text-center text-gray-500 text-2xl font-bold">Welcome to the
                    {{ config('app.name', 'HostPays') }}</h1>
            </div>
        </div>

    </div>
@endsection
