@extends('admin.main.layout')
@section('content')
    <div class="app-card app-card-stats-table h-100 shadow-sm">
        <div class="app-card-header p-3">
            <h4 class="app-card-title">Create Packages</h4>
        </div>
        <div class="app-card-body p-3 p-lg-4">
            <form action="{{ route('package.update',['id' => $package->id ]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Select Locations</label>
                    <select name="location_id" id="location" class="form-control">
                        @if (isset($locations))
                            @foreach ($locations as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $package->location_id ? 'selected' : '' }}>{{ $item->title }}</option>
                            @endforeach
                        @else
                            <option disabled selected>Please select location first</option>
                        @endif

                    </select>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="name" value="{{$package->name}}" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{$package->price}}" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Duration</label>
                    <input type="number" class="form-control" id="duration" name="duration" value="{{$package->duration}}" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Address</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{$package->address}}" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Description</label>
                   <textarea name="description" rows="15" class="form-control editor">{{$package->description}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Included</label>
                   <textarea name="included" rows="15" class="form-control editor">{{$package->included}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Excluded</label>
                   <textarea name="excluded" rows="15" class="form-control editor">{{$package->excluded}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
