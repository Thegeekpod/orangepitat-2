@extends('admin.main.layout')
@section('content')
    <div class="app-card app-card-stats-table h-100 shadow-sm">
        <div class="app-card-header p-3">
            <h4 class="app-card-title">Create Packages</h4>
        </div>
        <div class="app-card-body p-3 p-lg-4">
            <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Select Locations</label>
                    <select name="location_id" id="location" class="form-control">
                        @if (isset($locations))
                            @foreach ($locations as $item)
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endforeach
                        @else
                            <option disabled selected>Please select location first</option>
                        @endif

                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Duration</label>
                    <input type="number" class="form-control" id="duration" name="duration" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Address</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Description</label>
                   <textarea name="description" rows="15" class="form-control editor"></textarea>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Included</label>
                   <textarea name="included" rows="15" class="form-control editor1"></textarea>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Excluded</label>
                   <textarea name="excluded" rows="15" class="form-control editor2"></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
