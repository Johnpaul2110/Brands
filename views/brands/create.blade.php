@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Brand</h1>
    <form action="{{ route('brands.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="brand_name">Brand Name</label>
            <input type="text" name="brand_name" id="brand_name" class="form-control" required>
        </div>

        <!-- File input for image upload -->
        

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
