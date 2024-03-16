@extends('admin.main.layout')
@section('content')
    <div class="container-xl">
        <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
            <div class="inner">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        @if (Session::has('msg'))
                            <p class="alert alert-info">{{ Session::get('msg') }}</p>
                        @endif
                        <form class="settings-form" action="{{ route('projects.update', $project->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Gallery List</label>
                                <input type="text" name="name" class="form-control" id="setting-input-2"
                                    value="{{ $project->name }}" required>
                            </div>
                            <div class="mb-3">
                                <div class="row" id="imagesD">
                                    @foreach ($project->project_images as $pimage)
                                        <div class="col-md-3">
                                            @if (isset($pimage) && !empty($pimage->image) && File::exists(public_path('storage/ProjectImages/' . $pimage->image)))
                                                <img height="103" width="127"
                                                    src="{{ asset('storage/ProjectImages/' . $pimage->image) }}"
                                                    alt="">
                                                <button class="btn" onclick="removeButton({{ $pimage->id }})"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                        <path
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                    </svg></button>
                                            @else
                                                <img
                                                    src="{{ asset('User/assets/img/the-japanese-bridge-claude-monet.jpg') }}">
                                            @endif

                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div id="image-all">
                                <label for="setting-input-3" class="form-label">Image</label>
                                <div class="mb-3 image-field">
                                    <input type="file" name="image[]" class="form-control" required>
                                    <button type="button" class="btn btn-danger btn-sm remove-image mt-2">Remove</button>
                                </div>
                            </div>
                            <div class="mb-3 float-end">
                                <button type="button" class="btn btn-sm btn-success" onclick="addMoreImage()">+ Add more
                                    image</button>
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn app-btn-primary">Save</button>
                            </div>
                        </form>
                    </div><!--//app-card-body-->
                </div>
            </div><!--//inner-->
        </div><!--//app-card-->
    </div><!--//container-fluid-->
@endsection

@section('script')
    <script>
        function addMoreImage() {
            var html =
                '<div class="mb-3 image-field"><input type="file" name="image[]" class="form-control" required><button type="button" class="btn btn-danger btn-sm remove-image">Remove</button></div>';
            var container = document.getElementById('image-all');
            container.insertAdjacentHTML('beforeend', html);
        }

        document.addEventListener('click', function(e) {
            if (e.target && e.target.classList.contains('remove-image')) {
                e.target.parentElement.remove();
            }
        });

        function removeButton(imageId) {
            // Show SweetAlert confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms, make AJAX call to delete the image
                    $.ajax({
                        url: "{{ route('admin.deleteImage') }}", // Replace with your route to delete image
                        type: 'POST',
                        data: {
                            'image_id': imageId,
                            '_token': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            console.log(response);
                            // If image deletion is successful
                            if (response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                );
                                
                                $( "#imagesD" ).load(window.location.href + " #imagesD" );
                                // Optionally, you can also remove the image from the DOM
                                // e.g., $(`#image-${imageId}`).remove();
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete the image.',
                                    'error'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire(
                                'Error!',
                                'Failed to delete the image.',
                                'error'
                            );
                        }
                    });
                }
            });
        }
    </script>
@endsection
