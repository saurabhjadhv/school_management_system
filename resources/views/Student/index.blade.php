@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Students Data</h1>
        <a href="{{ route('Student-form') }}" class="btn btn-primary">Add New Student</a>
    </div>

    {{-- Flash Messages --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    @if(session()->has('errors'))
        <div class="alert alert-danger">
            {{ session()->get('errors') }}
        </div>
    @endif

    <table class="table table-striped" id="students-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Class Teacher</th>
                <th>Class</th>
                <th>Admission Date</th>
                <th>Yearly Fees</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->teacher->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->admission_date }}</td>
                    <td>{{ $student->yearly_fees }}</td>
                    <td class="d-flex">
                        <a href="{{ route('Student-show', $student->id) }}" class="btn btn-success btn-sm me-2">View</a>
                        <a href="{{ route('Student-edit', $student->id) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                        <form action="{{ route('Student-delete', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#students-table').DataTable({
            "paging": true,
            "lengthMenu": [2, 4, 10, 25, 50],
            "searching": true,
            "ordering": true,
            "processing": true,
            "pageLength": 3
        });
    });
</script>
@endsection
