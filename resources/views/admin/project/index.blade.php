@extends('admin.main.layout')
@section('content')
<style>
    .action-icons {
    display: block;
    gap: 10px; /* Adjust the gap between the icons as needed */
}
</style>
    <div class="app-card app-card-stats-table h-100 shadow-sm">
        <div class="app-card-header p-3">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto">
                    <h4 class="app-card-title">Gallery List</h4>
                    @if (Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                    @endif
                </div>
                <div class="col-auto float-end">
                    <a href="{{ route('projects.create') }}" class="btn btn-sm btn-success">Add Gallery</a>
                </div>


            </div>

        </div>

        <div class="app-card-body p-3 p-lg-4">
            <div class="table-responsive">
                <table class="table table-borderless mb-0">
                    <thead>
                        <tr>
                            <th class="meta">Project Title</th>
                            <th class="meta ">Created at</th>
                            <th class="meta ">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td class="">{{ $item->created_at->format('M d, Y h:i A') }}</td>
                                <td class="action-icons">
                                    <a href="{{ route('projects.edit', $item->slug) }}" class="m-3"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg></a>
                                    <form method="POST" action="{{ route('projects.destroy', $item->slug) }}"
                                        class="action-icon">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit"
                                            class="btn btn-outline-danger btn-xs delete-icon show_confirm"
                                            data-toggle="tooltip" title='Delete'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div><!--//table-responsive-->
        </div><!--//app-card-body-->
    </div>
@endsection
