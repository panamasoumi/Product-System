<x-layout>

<h1>Products</h1>

<a href="{{ route('products.create')}}">New product</a>

    
@foreach ($products as $product)

    <h2>{{$product->name }}</h2>
    <p>{{ $product->description}}</p>
    <p>{{ $product->size}}</p>

@endforeach


</x-layout>

