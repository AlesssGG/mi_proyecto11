<!-- resources/views/products/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>
    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <div class="card-body">
            <p><strong>Price:</strong> {{ $product->price }}</p>
            <p><strong>Stock:</strong> {{ $product->stock }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
        </div>
    </div>
</div>
@endsection
