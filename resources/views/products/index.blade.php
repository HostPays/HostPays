@extends('layouts.app')
@section('content')
    <div class="flex items-starts justify-center">
        @if ($products->isempty())
            <h1 class="text-center text-gray-500 text-2xl font-bold">No products found</h1>
        @endif
        @foreach ($products as $product)
            <div class="flex-none w-48 relative">
                <img src="/storage/{{ $product->image }}" alt="" class="absolute inset-0 w-full h-full object-cover"
                    loading="lazy" />
            </div>
            <form class="flex-auto p-6">
                <div class="flex flex-wrap">
                    <h1 class="flex-auto text-lg font-semibold text-slate-900">
                        {{ $product->name }}
                    </h1>
                    <div class="text-lg font-semibold text-slate-500">
                        ${{ $product->price }}
                    </div>
                    <div class="w-full flex-none text-sm font-medium text-slate-700 mt-2">
                        In stock
                    </div>
                </div>
                <div class="flex space-x-4 mb-6 text-sm font-medium">
                    <div class="flex-auto flex space-x-4">
                        <button class="h-10 px-6 font-semibold rounded-md bg-black text-white" type="submit">
                            Buy now
                        </button>
                        <button class="h-10 px-6 font-semibold rounded-md border border-slate-200 text-slate-900"
                            type="button">
                            Add to bag
                        </button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
@endsection
