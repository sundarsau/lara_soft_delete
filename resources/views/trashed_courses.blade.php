@extends('layouts.master')
@section('main-content')
  
    <h1>Laravel Soft Delete</h1>
    <div class="container">
        <div class="text-end">
            <a href="{{ route('course.index') }}" class="btn btn-primary">Back to Courses</a>
        </div>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <h4>Courses Trashed Data</h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-5">
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
                    @forelse($trash_course as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->course_title }}</td>
                            <td>{{ $row->course_descr }}</td>
                            <td>{{ $row->level }}</td>
                            <td>{{ $row->duration }}</td>

                            <td>
                                <button class="btn-restore" onClick="restoreFunction('{{ $row->id }}')"
                                    data-toggle="modal" data-target="#restoreModal">Restore</button>
                                <button class="btn-delete" onClick="deleteFunction('{{ $row->id }}')"
                                    data-toggle="modal" data-target="#deleteModal">Permanent Delete</i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No data Found in Trash</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @include('modals.modal_restore_delete')
    <script>
        function deleteFunction(id) {
            document.getElementById('delete_id').value = id;
            $("#deleteModal").modal('show');
        }

        function restoreFunction(id) {
            document.getElementById('restore_id').value = id;
            $("#restoreModal").modal('show');
        }
    </script>
@endsection
