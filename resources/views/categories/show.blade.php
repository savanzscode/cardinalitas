@extends('layouts.app')

@section('title', 'View Category')

@section('content')
<h1>Category Details</h1>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $category->name }}</h5>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
    </div>
</div>
@endsection