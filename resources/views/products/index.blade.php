@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-orange">Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-orange mb-3">Add Product</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="GET" action="{{ route('products.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control custom-input" placeholder="Search for products" value="{{ request()->search }}">
            <button type="submit" class="btn btn-orange">Search</button>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="bg-orange text-white">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
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
    .bg-orange {
        background-color: #FF7F50;
    }
    .table-bordered th, .table-bordered td {
        border: 2px solid black !important;
    }
</style>
