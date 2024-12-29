@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Brand</h1>
<link rel="stylesheet" href="{{asset('fontawesome-free-6.3.0-web/css/all.min.css')}}">
    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Brand Form -->
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id">Brand ID</label>
            <input type="text" name="id" id="id" class="form-control" value="{{ $brand->id }}" readonly>
        </div>

        <div class="form-group">
            <label for="name">Brand Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{( $brand->name) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Brand</button>
        <a href="{{ route('brands.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
