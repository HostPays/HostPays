@extends('layouts.app')
@section('content')
    <!-- edit user settings, with laravel css -->
    <div class="flex items-center justify-center">
        <div class="w-full max-w-xs ">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 " method="POST"
                action="{{ route('settings.update') }}">
                @csrf
                <div class="mb-3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        {{ __('Name') }}
                    </label>
                    <input id="name" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                        name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus
                        placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        {{ __('Email Address') }}
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" type="email" placeholder="Email" value="{{ Auth::user()->email }}" required
                        autocomplete="email" autofocus name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        {{ __('Password') }}
                    </label>
                    <input
                        class="shadow appearance-none broder rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') is-invalid @enderror""
                        id="password" type="password" placeholder="******************" required
                        autocomplete="current-password" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
