@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <h5 class="card-title">Manage Categories</h5>
                    <p class="card-text">Create, edit, and delete categories.</p>
                    <a href="{{ route('categories.index') }}" class="btn btn-light">Go to Categories</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <h5 class="card-title">Manage Products</h5>
                    <p class="card-text">Create, edit, and delete products.</p>
                    <a href="{{ route('products.index') }}" class="btn btn-light">Go to Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
