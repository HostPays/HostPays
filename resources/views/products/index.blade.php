@extends('layouts.app')
@section('content')
    <div class="flex items-center justify-between">
        <div class="w-full max-w-xs ">
            @if($products->isempty())
                <h1 class="text-center text-gray-500 text-2xl font-bold">No products found</h1>
            @endif
            @foreach ($products as $product)
                {{ $product->name }}
            @endforeach
        </div>
    </div>
@endsection
