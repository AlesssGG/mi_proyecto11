@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-orange">Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name" class="form-label text-orange">Name:</label>
            <input type="text" id="name" name="name" class="form-control custom-input @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="price" class="form-label text-orange">Price:</label>
            <input type="text" id="price" name="price" class="form-control custom-input @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" required>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="stock" class="form-label text-orange">Stock:</label>
            <input type="text" id="stock" name="stock" class="form-control custom-input @error('stock') is-invalid @enderror" value="{{ old('stock', $product->stock) }}" required>
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label text-orange">Description:</label>
            <textarea id="description" name="description" class="form-control custom-input @error('description') is-invalid @enderror" required>{{ old('description', $product->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-orange w-100">Update Product</button>
    </form>
</div>
@endsection

<style>
    .text-orange {
        color: #FF7F50;
    }
    .btn-orange {
        background-color: #FF7F50;
        color: white;
    }
    .btn-orange:hover {
        background-color: #FF4500;
    }
    .custom-input {
        max-width: 400px;
        border: 2px solid black;
    }
    .form-group {
        margin-bottom: 1rem;
    }
</style>

