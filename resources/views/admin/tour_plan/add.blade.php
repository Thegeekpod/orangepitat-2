@extends('admin.main.layout')
@section('content')
    <div class="app-card app-card-stats-table h-100 shadow-sm">
        <div class="app-card-header p-3">
            <h4 class="app-card-title">Create Packages</h4>
        </div>
        <div class="app-card-body p-3 p-lg-4">
            <form action="{{ route('day.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="package_id" value="{{$packge_id}}">
                <div class="mb-3">
                    <label for="title" class="form-label">Day</label>
                    <input type="text" class="form-control" id="day" name="day" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Plan Name</label>
                    <input type="text" class="form-control" id="plan_name" name="plan_name" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Plan Details</label>
                   <textarea name="plan_details" rows="15" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
