@extends('layouts.master')
@section('main-content')
    <h1>Laravel Soft Delete</h1>
    <div class="container">
        <div class="text-end">
            <a href="{{ route('show.trashed') }}" class="btn btn-primary">View Trashed Data</a>
        </div>

        <h4>List of Courses</h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-5">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Level</th>
                        <th>Duration</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->course_title }}</td>
                            <td>{{ $row->course_descr }}</td>
                            <td>{{ $row->level }}</td>
                            <td>{{ $row->duration }}</td>
                            <td>
                                <button class="fa fa-trash" onClick="trashConfirm('{{ $row->id }}')" data-toggle="modal"
                                    data-target="#deleteConfirm" title="Move to Trash"></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No Courses Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
@include ('modals.modal_trash')
@endsection
@push('js')
    <script>
        function trashConfirm(id) {
            document.getElementById('delete_id').value = id;
            $("#modalTrash").modal('show');
        }
    </script>
@endpush
  
