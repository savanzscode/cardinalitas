@extends('layouts.app')

@section('title', 'View Product')

@section('content')
<h1>Product Details</h1>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">Price: ${{ $product->price }}</p>
        <p class="card-text">Category: {{ $product->category->name }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
    </div>
</div>
@endsection