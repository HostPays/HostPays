@extends('admin.layouts.app')
@section('content')
    <div class="flex items-starts justify-center">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center justify-center">
                <div class="w-full max-w-xs">
                    <h1 class="text-center text-gray-500 text-2xl font-bold">Create a new product</h1>
                </div>
            </div>
            <div class="flex items-center justify-between content-center">
                <div class="w-full max-w-xs">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input id="name" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                        placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-between content-center">
                <div class="w-full max-w-xs">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                        Price
                    </label>
                    <input id="price" type="number"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') is-invalid @enderror"
                        name="price" value="{{ old('price') }}" required autocomplete="price" autofocus
                        placeholder="Price">
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-between content-center">
                <div class="w-full max-w-xs">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                        Description
                    </label>
                    <textarea id="description"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') is-invalid @enderror"
                        name="description" value="{{ old('description') }}" required autocomplete="description" autofocus
                        placeholder="Description"></textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-between content-center">
                <div class="w-full max-w-xs">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                        Image
                    </label>
                    <input id="image" type="file"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') is-invalid @enderror"
                        name="image" value="{{ old('image') }}" required autocomplete="image" autofocus
                        placeholder="Image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-between content-center">
                <div class="w-full max-w-xs">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                        Category
                    </label>
                    <select id="category_id"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('category_id') is-invalid @enderror"
                        name="category_id" value="{{ old('category_id') }}" required autocomplete="category_id" autofocus>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        <option value="new">New</option>
                    </select>
                    @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-between content-center " id="new">
                <div class="w-full max-w-xs">
                    <input id="new" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('price') is-invalid @enderror"
                        name="new" autocomplete="new" autofocus placeholder="Create New Category ">
                    @error('new')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex items-center justify-between content-center">
                <div class="w-full max-w-xs">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
    <script>
        const select = document.getElementById('category_id');
        const hidden = document.getElementById('new');
        if (select.value == 'new') {
            hidden.classList.remove('hidden');
        }else{
            hidden.classList.add('hidden');
        }
        select.addEventListener('change', function() {
            if (select.value === 'new') {
                hidden.classList.remove('hidden');
            } else {
                hidden.classList.add('hidden');
            }
        });
    </script>
@endsection
