@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Brands</h1>
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.3.0-web/css/all.min.css')}}">

    <!-- Create Button -->
    <a href="{{ route('brands.create') }}" class="btn btn-primary mb-3">Create</a>

    <!-- Search Bar -->
    <form method="GET" action="{{ route('brands.index') }}" class="mb-3">
    <i class="fa-solid fa-magnifying-glass"></i>

        <input type="text" name="search" class="form-control" placeholder="Search brands" class="fa-solid fa-magnifying-glass"value="{{ request()->search }}">
    </form>

    <!-- Brands Table -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr>
                <td>{{ $brand->brand_id }}</td>
                <td>{{ $brand->brand_name }}</td>

                <td>
                    <!-- Edit Button -->
                    <a href="{{ route('brands.edit', $brand->brand_id) }}" class="btn btn-warning btn-sm">Edit</a>
                    
                    <!-- Delete Button -->
                    
                    <form action="{{ route('brands.destroy', $brand->brand_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination (if needed) -->
    {{ $brands->links() }}
</div>
@endsection
