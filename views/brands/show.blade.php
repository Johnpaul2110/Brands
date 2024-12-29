@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $brand->name }}</h1>
    <p><strong>Brand ID:</strong> {{ $brand->id }}</p>
    <p><strong>Created At:</strong> {{ $brand->created_at->format('d-m-Y') }}</p>
    <p><strong>Updated At:</strong> {{ $brand->updated_at->format('d-m-Y') }}</p>

    <a href="{{ route('brands.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
