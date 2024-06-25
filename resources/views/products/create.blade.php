@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-orange">Create Product</h1>

    <div class="card shadow-sm p-4">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="name" class="form-label text-orange">Name:</label>
                <input type="text" id="name" name="name" class="form-control custom-input @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="price" class="form-label text-orange">Price:</label>
                <input type="text" id="price" name="price" class="form-control custom-input @error('price') is-invalid @enderror" value="{{ old('price') }}" required>
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="stock" class="form-label text-orange">Stock:</label>
                <input type="text" id="stock" name="stock" class="form-control custom-input @error('stock') is-invalid @enderror" value="{{ old('stock') }}" required>
                @error('stock')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-orange w-100">Create Product</button>
        </form>
    </div>
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
        max-width: 420px;
        border: 2px solid black;
    }
</style>
